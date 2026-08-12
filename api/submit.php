<?php

header('Content-Type: application/json; charset=utf-8');

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Method not allowed'
    ]);
    exit;
}


// --------------------------------------------------
// CONFIGURATION
// --------------------------------------------------

$ADMIN_EMAIL = 'shimlamanalitaxiservice01@gmail.com';

// Use an email belonging to your domain once you buy one.
// For now, this can be a Hostinger email if available.
$FROM_EMAIL = 'noreply@lightcyan-raven-664511.hostingersite.com';


// --------------------------------------------------
// BASIC SPAM PROTECTION
// --------------------------------------------------

// Honeypot field
if (!empty($_POST['bot-field'])) {
    // Pretend success so bots don't know they were blocked.
    echo json_encode([
        'success' => true
    ]);
    exit;
}


// --------------------------------------------------
// SANITIZE INPUT
// --------------------------------------------------

function clean($value) {
    return trim(strip_tags($value ?? ''));
}

$name        = clean($_POST['name'] ?? '');
$phone       = clean($_POST['phone'] ?? '');
$email       = clean($_POST['email'] ?? '');
$destination = clean($_POST['destination'] ?? '');
$vehicle     = clean($_POST['vehicle-type'] ?? '');


// --------------------------------------------------
// VALIDATION
// --------------------------------------------------

if (!$name || !$phone || !$destination || !$vehicle) {
    http_response_code(400);

    echo json_encode([
        'success' => false,
        'message' => 'Please fill in all required fields.'
    ]);

    exit;
}

if (strlen($phone) < 6) {
    http_response_code(400);

    echo json_encode([
        'success' => false,
        'message' => 'Please enter a valid phone number.'
    ]);

    exit;
}

if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);

    echo json_encode([
        'success' => false,
        'message' => 'Please enter a valid email address.'
    ]);

    exit;
}


// --------------------------------------------------
// SAVE SUBMISSION
// --------------------------------------------------

// Store outside public_html
$domainRoot = dirname(__DIR__, 1);

// /public_html/api -> /public_html
// We want one level above public_html.
$storageDir = dirname(__DIR__, 2) . '/form-data';

if (!is_dir($storageDir)) {
    mkdir($storageDir, 0755, true);
}

$csvFile = $storageDir . '/submissions.csv';

$isNewFile = !file_exists($csvFile);

$fp = fopen($csvFile, 'a');

if ($fp) {

    if ($isNewFile) {
        fputcsv($fp, [
            'Date',
            'Name',
            'Phone',
            'Email',
            'Destination',
            'Vehicle'
        ]);
    }

    fputcsv($fp, [
        date('Y-m-d H:i:s'),
        $name,
        $phone,
        $email,
        $destination,
        $vehicle
    ]);

    fclose($fp);
}


// --------------------------------------------------
// SEND EMAIL
// --------------------------------------------------

$subject = 'New Taxi Booking Enquiry - ' . $destination;

$message = "
New taxi enquiry received from your website.

--------------------------------
CUSTOMER DETAILS
--------------------------------

Name: $name
Phone: $phone
Email: $email

Destination: $destination
Vehicle: $vehicle

--------------------------------
Received: " . date('Y-m-d H:i:s') . "
--------------------------------
";

$headers = [];

$headers[] = 'From: ' . $FROM_EMAIL;
$headers[] = 'Reply-To: ' . $email;
$headers[] = 'Content-Type: text/plain; charset=UTF-8';

$mailSent = mail(
    $ADMIN_EMAIL,
    $subject,
    $message,
    implode("\r\n", $headers)
);


// --------------------------------------------------
// RESPONSE
// --------------------------------------------------

echo json_encode([
    'success' => true,
    'email_sent' => $mailSent
]);
