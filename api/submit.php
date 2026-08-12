<?php
header('Content-Type: application/json');

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Method not allowed'
    ]);
    exit;
}

// PHPMailer
require_once __DIR__ . '/PHPMailer/src/Exception.php';
require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/src/SMTP.php';
require_once __DIR__ . '/config.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// --------------------------------------------------
// CONFIGURATION
// --------------------------------------------------

$smtpHost = SMTP_HOST;
$smtpPort = SMTP_PORT;
$smtpUsername = SMTP_USERNAME;
$smtpPassword = SMTP_PASSWORD;

$adminEmail = ADMIN_EMAIL;


// --------------------------------------------------
// GET FORM DATA
// --------------------------------------------------

$name        = trim($_POST['name'] ?? '');
$phone       = trim($_POST['phone'] ?? '');
$email       = trim($_POST['email'] ?? '');
$destination = trim($_POST['destination'] ?? '');
$vehicle     = trim($_POST['vehicle-type'] ?? '');

$car         = trim($_POST['car'] ?? '');
$pickup      = trim($_POST['pickup'] ?? '');
$drop        = trim($_POST['drop'] ?? '');
$distance    = trim($_POST['distance'] ?? '');
$days        = trim($_POST['days'] ?? '');
$estimated   = trim($_POST['estimated_cost'] ?? '');


// --------------------------------------------------
// BASIC VALIDATION
// --------------------------------------------------

if (!$phone) {
    http_response_code(400);

    echo json_encode([
        'success' => false,
        'message' => 'Phone number is required'
    ]);

    exit;
}


// --------------------------------------------------
// CREATE EMAIL
// --------------------------------------------------

$mail = new PHPMailer(true);

try {

    // SMTP
    $mail->isSMTP();
    $mail->Host       = $smtpHost;
    $mail->SMTPAuth   = true;
    $mail->Username   = $smtpUsername;
    $mail->Password   = $smtpPassword;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $smtpPort;


    // Sender
    $mail->setFrom($smtpUsername, 'Himachal Taxi Website');

    // Admin recipient
    $mail->addAddress($adminEmail);


    // Reply to customer
    if ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mail->addReplyTo($email, $name ?: 'Website Visitor');
    }


    $mail->isHTML(true);


    // --------------------------------------------------
    // EMAIL SUBJECT
    // --------------------------------------------------

    if ($car || $pickup || $drop) {

        $mail->Subject = '🚕 New Taxi Price Booking Request';

        $mail->Body = "
        <h2>New Taxi Price Booking Request</h2>

        <table cellpadding='8' cellspacing='0' border='1'
               style='border-collapse:collapse;'>

            <tr>
                <td><strong>Name</strong></td>
                <td>" . htmlspecialchars($name ?: 'Website Visitor') . "</td>
            </tr>

            <tr>
                <td><strong>Phone</strong></td>
                <td>" . htmlspecialchars($phone) . "</td>
            </tr>

            <tr>
                <td><strong>Email</strong></td>
                <td>" . htmlspecialchars($email) . "</td>
            </tr>

            <tr>
                <td><strong>Vehicle</strong></td>
                <td>" . htmlspecialchars($car) . "</td>
            </tr>

            <tr>
                <td><strong>Pickup</strong></td>
                <td>" . htmlspecialchars($pickup) . "</td>
            </tr>

            <tr>
                <td><strong>Drop</strong></td>
                <td>" . htmlspecialchars($drop) . "</td>
            </tr>

            <tr>
                <td><strong>Distance</strong></td>
                <td>" . htmlspecialchars($distance) . "</td>
            </tr>

            <tr>
                <td><strong>Days</strong></td>
                <td>" . htmlspecialchars($days) . "</td>
            </tr>

            <tr>
                <td><strong>Estimated Cost</strong></td>
                <td><strong>" . htmlspecialchars($estimated) . "</strong></td>
            </tr>

        </table>
        ";

    } else {

        $mail->Subject = '🚕 New Taxi Quote Request';

        $mail->Body = "
        <h2>New Taxi Quote Request</h2>

        <table cellpadding='8' cellspacing='0' border='1'
               style='border-collapse:collapse;'>

            <tr>
                <td><strong>Name</strong></td>
                <td>" . htmlspecialchars($name) . "</td>
            </tr>

            <tr>
                <td><strong>Phone</strong></td>
                <td>" . htmlspecialchars($phone) . "</td>
            </tr>

            <tr>
                <td><strong>Email</strong></td>
                <td>" . htmlspecialchars($email) . "</td>
            </tr>

            <tr>
                <td><strong>Destination</strong></td>
                <td>" . htmlspecialchars($destination) . "</td>
            </tr>

            <tr>
                <td><strong>Vehicle</strong></td>
                <td>" . htmlspecialchars($vehicle) . "</td>
            </tr>

        </table>
        ";
    }


    // Plain-text alternative
    $mail->AltBody =
        "New taxi booking request\n\n" .
        "Name: $name\n" .
        "Phone: $phone\n" .
        "Email: $email\n" .
        "Destination: $destination\n" .
        "Vehicle: $vehicle\n" .
        "Pickup: $pickup\n" .
        "Drop: $drop\n" .
        "Distance: $distance\n" .
        "Days: $days\n" .
        "Estimated Cost: $estimated\n";


    // Send
    $mail->send();


    echo json_encode([
        'success' => true,
        'message' => 'Booking request sent successfully'
    ]);

} catch (Exception $e) {

    error_log('PHPMailer error: ' . $mail->ErrorInfo);

    http_response_code(500);

    echo json_encode([
        'success' => false,
        'message' => 'Unable to send email'
    ]);
}
