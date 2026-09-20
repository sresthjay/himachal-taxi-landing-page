<?php
$adgroup = isset($_GET['adgroup']) ? trim($_GET['adgroup']) : '';
$title = 'Himachal Cabs Online | Manali, Shimla & Dharamshala Taxi Services';
$description = 'Book reliable Himachal taxi services with local drivers. Get one-way cabs, round trips & sightseeing taxi in Manali, Shimla, Dharamshala and beyond.';

if ($adgroup === 'himachal-taxi-service') {
    $title = 'Himachal Taxi Service | Manali, Shimla, Dharamshala | Cabs Online';
    $description = 'Himachal taxi service with experienced drivers across Manali, Shimla, Dharamshala & Spiti Valley. Book one-way, round trips & sightseeing tours. 5,000+ travelers served in 8 years.';
} elseif ($adgroup === 'shimla-taxi-service') {
    $title = 'Shimla Taxi Service | Reliable Cabs Online';
    $description = 'Reliable Shimla taxi services with experienced local drivers. One-way, round trips & sightseeing options. Book now for comfortable journeys across Shimla.';
} elseif ($adgroup === 'manali-taxi-service') {
    $title = 'Manali Taxi Service | Comfortable Cabs Online';
    $description = 'Comfortable Manali taxi services from verified drivers. Round trips, sightseeing & flexible booking options. 5,000+ happy travelers trust us.';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Preload LCP Hero Image immediately -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($description); ?>">

    <!-- Standard Favicon for modern browsers -->
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">

    <!-- Apple Touch Icon for iOS devices -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">

    <!-- PWA Icons -->
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/favicon/android-chrome-512x512.png">

    <link rel="manifest" href="/site.webmanifest">
    <meta name="theme-color" content="#ffffff">

    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <!-- Google Fonts (Non-blocking) -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@700;800&display=swap" as="style"
        onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@700;800&display=swap" rel="stylesheet">
    </noscript>

    <!-- Inline Critical & Core CSS to Eliminate Render-Blocking Requests and Accelerate LCP Discovery -->
    <style>
        /* CSS RESET & BASE STYLES */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #222222;
            background: #f9f9f9;
        }

        :root {
            --primary: #2E7D32;
            --accent: #FFC107;
            --dark: #1a1a1a;
            --light: #ffffff;
            --font-head: 'Plus Jakarta Sans', 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        /* Distinctive heading typeface (loads non-blocking, swaps in when ready) */
        h1,
        h2,
        h3,
        .tour-title,
        .fleet-name,
        .final-cta-container h2 {
            font-family: var(--font-head);
            letter-spacing: -0.01em;
        }

        /* HERO SECTION */
        .hero {
            position: relative;
            overflow: hidden;
            min-height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px 20px;
            text-align: center;
            color: white;
            background: linear-gradient(135deg, #0d1b2a 0%, #1b4332 50%, #0f172a 100%);
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

        

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        @media (max-width: 768px) {
            .top-strip {
                display: none !important;
            }

            .header-container {
                padding: 0 15px;
            }

            .logo img {
                max-width: 160px;
                height: auto;
            }
        }

        .hero-content {
            max-width: 800px;
            width: 100%;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        /* Amber accent bar under the hero heading */
        .hero-content h1::after {
            content: "";
            display: block;
            width: 72px;
            height: 4px;
            margin: 14px auto 0;
            border-radius: 4px;
            background: linear-gradient(90deg, var(--accent), #ffdf5d);
        }

        .subhead {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        /* BOOKING FORM */
        .booking-form {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            margin: 0 auto;
            text-align: left;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--dark);
            font-size: 0.9rem;
        }

        input,
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
        }

        button.cta-btn {
            width: 100%;
            background: var(--accent);
            color: var(--dark);
            font-weight: 700;
            padding: 15px;
            border: none;
            border-radius: 6px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: background 0.3s;
            text-transform: uppercase;
        }

        button.cta-btn:hover {
            background: #ffca2c;
        }

        /* FINAL CTA SECTION */
        .final-cta-section {
            padding: 5rem 1rem;
            background: #ffffff;
            text-align: center;
            border-top: 1px solid #eaeaea;
            border-bottom: 1px solid #eaeaea;
        }

        .final-cta-section .section-title p {
            max-width: 800px;
            font-size: 1.05rem;
            line-height: 1.6;
            margin: 0 auto 2rem auto;
            color: #444444;
        }

        .final-cta-section a.cta-btn {
            display: inline-block;
            width: auto;
            background: var(--accent);
            color: var(--dark);
            font-weight: 700;
            padding: 15px 35px;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            text-decoration: none;
            text-transform: uppercase;
            transition: background 0.3s;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .final-cta-section a.cta-btn:hover {
            background: #ffca2c;
        }

        /* TRUST BADGES */
        .trust-section {
            padding: 3rem 1rem;
            background: white;
            text-align: center;
        }

        .trust-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            max-width: 1000px;
            margin: 2rem auto 0;
        }

        .trust-item h3 {
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        /* FLEET SECTION */
        .fleet-section {
            padding: 4rem 1rem;
            background: #f4f4f4;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2rem;
            color: var(--primary);
            margin: 0 10px 1rem;
            line-height: 1.2;
        }

        .section-title p {
            color: #333333;
            max-width: 600px;
            margin: 0 auto;
        }

        .fleet-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .fleet-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s;
            display: flex;
            flex-direction: column;
        }

        .fleet-card:hover {
            transform: translateY(-5px);
        }

        .fleet-img {
            height: 250px;
            background: #e8e8e8;
            position: relative;
            overflow: hidden;
        }

        .fleet-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .fleet-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: linear-gradient(135deg, #FFC107, #FFB300);
            color: var(--dark);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
        }

        .fleet-details {
            padding: 1.5rem;
            flex-grow: 1;
        }

        .fleet-details p {
            font-size: 0.85rem;
            color: #222222;
            margin-bottom: 1rem;
        }

        .fleet-name {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            text-align: center;
        }

        .fleet-specs {
            display: flex;
            gap: 1rem;
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 1rem;
            justify-content: center;
        }

        .fleet-specs span {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .fleet-price {
            font-size: 1.1rem;
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 1rem;
            text-align: center;
        }

        .fleet-price small {
            font-size: 0.8rem;
            color: #222222;
            font-weight: normal;
        }

        .fleet-cta {
            margin-top: auto;
            padding: 1rem;
            background: var(--primary);
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 0 0 12px 12px;
            font-weight: 600;
        }

        /* CALCULATOR SECTION */
        .calculator-section {
            padding: 4rem 1rem;
            background: white;
        }

        .calc-wrapper {
            max-width: 600px;
            margin: 0 auto;
            background: #f9f9f9;
            padding: 2rem;
            border-radius: 12px;
            border: 1px solid #eee;
        }

        .calc-result {
            margin-top: 1.5rem;
            padding: 1rem;
            background: #e8f5e9;
            border-radius: 8px;
            color: var(--primary);
            font-weight: 700;
            display: none;
            text-align: center;
        }

        /* FAQ SECTION */
        .faq-section {
            padding: 4rem 1rem;
            background: #f4f4f4;
        }

        .faq-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        @media (max-width: 768px) {
            .faq-container {
                grid-template-columns: 1fr;
            }
        }

        .faq-item {
            background: white;
            margin-bottom: 1rem;
            border-radius: 8px;
            overflow: hidden;
        }

        .faq-question {
            padding: 1.2rem;
            cursor: pointer;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
        }

        .faq-question::after {
            content: '+';
            font-size: 1.5rem;
            color: var(--primary);
        }

        .faq-item.active .faq-question::after {
            content: '-';
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            padding: 0 1.2rem;
            background: #fafafa;
            color: #555;
            line-height: 1.6;
        }

        .faq-item.active .faq-answer {
            padding: 1.2rem;
            max-height: 200px;
        }

        /* WHY CHOOSE US */
        .why-us-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 2rem auto;
        }

        .why-card {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .why-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 1.8rem;
            }

            .hero {
                min-height: 85vh;
            }

            .booking-form {
                padding: 1.5rem;
            }
        }

        /* TOP UTILITY STRIP (desktop only) */
        .top-strip {
            background: #1b4332;
            color: #ffffff;
            font-size: 0.8rem;
        }

        .top-strip-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 6px 20px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 20px;
        }

        .top-strip a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .top-strip a:hover {
            color: var(--accent);
        }

        .top-strip::after {
            content: "";
            display: block;
            height: 3px;
            background: linear-gradient(90deg, var(--accent), #43a047);
        }

        /* TOP SITE HEADER */
        .site-header {
            background: rgba(255, 255, 255, 0.97);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            padding: 10px 0;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0px 20px;
        }

        .logo img {
            width: 180px;
            height: 80px;
            max-width: 100%;
            object-fit: contain;
            display: block;
        }

        .main-nav {
            display: flex;
            align-items: center;
            gap: 22px;
        }

        .main-nav a {
            color: var(--dark);
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 600;
            padding: 6px 2px;
            border-bottom: 2px solid transparent;
            transition: color 0.3s, border-color 0.3s;
            white-space: nowrap;
        }

        .main-nav a:hover,
        .main-nav a.active {
            color: var(--primary);
            border-bottom-color: var(--accent);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .nav-cta {
            background: linear-gradient(135deg, #FFC107, #FFB300);
            color: #1a1a1a !important;
            padding: 10px 20px !important;
            border-radius: 999px;
            border-bottom: none !important;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 700;
            white-space: nowrap;
            box-shadow: 0 4px 12px rgba(255, 179, 0, 0.35);
            transition: transform 0.25s ease, box-shadow 0.25s ease, filter 0.25s ease;
        }

        .nav-cta:hover {
            filter: brightness(1.05);
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(255, 179, 0, 0.45);
            color: #1a1a1a !important;
        }

        /* Modern hamburger button */
        .nav-toggle {
            display: none;
            width: 46px;
            height: 46px;
            border: none;
            border-radius: 50%;
            background: linear-gradient(135deg, #2E7D32, #43a047);
            box-shadow: 0 4px 12px rgba(46, 125, 50, 0.35);
            cursor: pointer;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 5px;
            padding: 0;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .nav-toggle:hover {
            transform: scale(1.07);
            box-shadow: 0 6px 18px rgba(46, 125, 50, 0.45);
        }

        .nav-toggle:active {
            transform: scale(0.95);
        }

        .nav-toggle span {
            display: block;
            width: 20px;
            height: 2.4px;
            background: #ffffff;
            border-radius: 3px;
            transition: transform 0.35s cubic-bezier(0.68, -0.4, 0.27, 1.4), opacity 0.2s ease;
        }

        .nav-toggle[aria-expanded="true"] {
            box-shadow: 0 0 0 6px rgba(255, 193, 7, 0.3);
        }

        .nav-toggle[aria-expanded="true"] span:nth-child(1) {
            transform: translateY(7.4px) rotate(45deg);
        }

        .nav-toggle[aria-expanded="true"] span:nth-child(2) {
            opacity: 0;
            transform: scaleX(0);
        }

        .nav-toggle[aria-expanded="true"] span:nth-child(3) {
            transform: translateY(-7.4px) rotate(-45deg);
        }

        /* Header state after scrolling */
        .site-header {
            transition: box-shadow 0.3s ease, background-color 0.3s ease, padding 0.3s ease;
        }

        .site-header.scrolled {
            background: rgba(255, 255, 255, 0.99);
            box-shadow: 0 6px 24px rgba(0, 0, 0, 0.14);
            padding: 6px 0;
        }

        /* Nav link icons */
        .main-nav a {
            display: inline-flex;
            align-items: center;
            gap: 7px;
        }

        .main-nav a .nav-ico {
            width: 15px;
            height: 15px;
            flex-shrink: 0;
            opacity: 0.7;
        }

        .main-nav a:hover .nav-ico,
        .main-nav a.active .nav-ico {
            opacity: 1;
        }

        /* Dimmed backdrop behind open mobile menu */
        .nav-backdrop {
            position: fixed;
            inset: 0;
            background: rgba(13, 27, 42, 0.45);
            backdrop-filter: blur(3px);
            -webkit-backdrop-filter: blur(3px);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
            z-index: 999;
        }

        .nav-backdrop.show {
            opacity: 1;
            visibility: visible;
        }

        @media (min-width: 901px) {
            .nav-backdrop {
                display: none;
            }
        }

        /* Fleet feature icons (inline SVG, no icon-font dependency) */
        .feat-ico {
            width: 16px;
            height: 16px;
            margin-right: 5px;
            color: #2E7D32;
            vertical-align: -3px;
            flex-shrink: 0;
        }

        section[id] {
            scroll-margin-top: 90px;
        }

        .header-actions .nav-cta-desktop {
            display: inline-block;
        }

        /* Mobile-only menu extras (hidden on desktop) */
        .mobile-menu-label,
        .main-nav .nav-cta-menu,
        .main-nav .mobile-menu-call {
            display: none;
        }

        @media (max-width: 900px) {
            .nav-toggle {
                display: inline-flex;
            }

            .main-nav {
                position: absolute;
                top: calc(100% + 8px);
                left: 12px;
                right: 12px;
                background: #ffffff;
                flex-direction: column;
                align-items: stretch;
                gap: 4px;
                padding: 10px 12px 16px;
                box-shadow: 0 20px 45px rgba(0, 0, 0, 0.2);
                border: 1px solid #eee;
                border-radius: 20px;
                opacity: 0;
                visibility: hidden;
                transform: translateY(-12px) scale(0.98);
                transform-origin: top center;
                transition: opacity 0.28s ease, transform 0.28s ease, visibility 0.28s;
                max-height: calc(100dvh - 110px);
                overflow-y: auto;
            }

            .main-nav.open {
                opacity: 1;
                visibility: visible;
                transform: translateY(0) scale(1);
            }

            .main-nav.open a {
                animation: navLinkIn 0.4s cubic-bezier(0.2, 0.7, 0.3, 1) both;
            }

            .main-nav.open a:nth-of-type(1) {
                animation-delay: 0.03s;
            }

            .main-nav.open a:nth-of-type(2) {
                animation-delay: 0.08s;
            }

            .main-nav.open a:nth-of-type(3) {
                animation-delay: 0.13s;
            }

            .main-nav.open a:nth-of-type(4) {
                animation-delay: 0.18s;
            }

            .main-nav.open a:nth-of-type(5) {
                animation-delay: 0.23s;
            }

            .main-nav.open a:nth-of-type(6) {
                animation-delay: 0.28s;
            }

            @keyframes navLinkIn {
                from {
                    opacity: 0;
                    transform: translateX(16px);
                }

                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            .main-nav a {
                display: flex;
                align-items: center;
                gap: 12px;
                padding: 10px 12px;
                border-bottom: none;
                border-radius: 14px;
                font-size: 1rem;
                transition: background-color 0.25s ease, box-shadow 0.25s ease;
            }

            .main-nav a:hover {
                border-bottom-color: transparent;
                background: #f1f8f1;
            }

            .main-nav a.active {
                border-bottom-color: transparent;
                background: #FFF8E1;
                box-shadow: inset 3px 0 0 var(--accent);
            }

            .main-nav a:not(.nav-cta-menu):not(.mobile-menu-call)::after {
                content: "›";
                margin-left: auto;
                color: #bdbdbd;
                font-size: 1.4rem;
                line-height: 1;
                transition: transform 0.25s ease, color 0.25s ease;
            }

            .main-nav a:not(.nav-cta-menu):not(.mobile-menu-call):hover::after {
                transform: translateX(4px);
                color: var(--primary);
            }

            .main-nav a.active:not(.nav-cta-menu):not(.mobile-menu-call)::after {
                color: var(--accent);
            }

            .main-nav a .nav-ico {
                width: 38px;
                height: 38px;
                padding: 10px;
                box-sizing: border-box;
                background: #e8f5e9;
                border-radius: 12px;
                opacity: 1;
                transition: background-color 0.25s ease, color 0.25s ease, transform 0.25s ease;
            }

            .main-nav a:hover .nav-ico {
                background: var(--primary);
                color: #ffffff;
                transform: scale(1.05);
            }

            .main-nav a.active .nav-ico {
                background: var(--accent);
                color: #1a1a1a;
            }

            .mobile-menu-label {
                display: block;
                font-size: 0.72rem;
                font-weight: 700;
                letter-spacing: 2px;
                text-transform: uppercase;
                color: #9e9e9e;
                padding: 10px 12px 2px;
            }

            .main-nav .nav-cta-menu {
                display: block;
                text-align: center;
                margin-top: 12px;
                padding: 14px 18px !important;
                font-size: 1rem;
            }

            .main-nav a.nav-cta-menu:hover {
                background: linear-gradient(135deg, #FFB300, #FFA000);
            }

            .main-nav .mobile-menu-call {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 8px;
                padding: 12px 4px 6px;
                color: var(--primary);
                font-weight: 700;
                background: none !important;
                box-shadow: none !important;
            }

            .main-nav a.mobile-menu-call:hover {
                background: none;
            }

            .main-nav .mobile-menu-call .nav-ico {
                width: 16px;
                height: 16px;
                padding: 0;
                background: none;
                border-radius: 0;
            }

            .main-nav a:last-child {
                border-bottom: none;
            }

            .nav-cta {
                text-align: center;
                margin-top: 8px;
            }

            .header-actions .nav-cta {
                display: none;
            }
        }

        @media (min-width: 901px) {
            .main-nav .nav-cta {
                display: none;
            }
        }

        .header-contact {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .header-contact a {
            color: var(--dark);
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: color 0.3s;
        }

        .header-contact a:hover {
            color: var(--primary);
        }

        /* SITE FOOTER */
        .site-footer {
            background: #1a1a1a;
            color: #d1d1d1;
            text-align: center;
            padding: 2rem 1rem;
            font-size: 0.9rem;
            border-top: 4px solid var(--accent);
        }

        /* ===== TOUR PACKAGES SECTION ===== */

        .tours-section {
            padding: 80px 0;
            background-color: #f9f9f9;
        }

        .tours-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .tour-card {
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .tour-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .tour-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            position: relative;
        }

        .tour-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(135deg, #FFC107, #FFB300);

            color: var(--dark);
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
        }

        .tour-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .tour-title {
            font-size: 1.4rem;
            margin: 0 0 15px;
            color: #1b4332;
            font-weight: 700;
        }

        .tour-meta {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 0.9rem;
            color: #444;
            font-weight: 500;
        }

        .meta-item svg {
            fill: var(--primary) !important;
        }

        .places-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 15px;
        }

        .place-tag {
            background: #e8f5e9;
            color: #2e7d32;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .tour-desc {
            font-size: 0.95rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
            /* Pushes button to bottom */
        }

        .tour-price {
            font-size: 1rem;
            font-weight: 600;
            color: #805c1b;
            /* Dark Brown color */
            margin-bottom: 20px;
        }

        .tour-cta {
            display: inline-block;
            width: 100%;
            text-align: center;
            padding: 12px;
            background: var(--primary);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            transition: background 0.3s ease;
            cursor: pointer;
            border: none;
            font-size: 1rem;
        }

        .tour-cta:hover {
            background: #1e5c22;
        }

        /* Add to styles.css */

        .tour-content ul {
            list-style: none;
            /* Remove default bullets */
            padding: 0;
            margin: 0 0 20px 0;
        }

        .tour-content ul li {
            display: flex;
            align-items: flex-start;
            /* Aligns text with the top of the icon */
            gap: 10px;
            line-height: 1.5;
            color: #444;
            font-size: 0.95rem;
        }

        .tour-content ul li i.fa-circle-check {
            color: #2E7D32;
            /* Matches your brand green */
            font-size: 1.2rem;
            margin-top: 2px;
            /* Visual alignment fix */
            flex-shrink: 0;
            /* Prevents icon from squishing */
        }

        /* CALCULATOR MODAL POPUP */
        .calc-modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.65);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            backdrop-filter: blur(4px);
        }

        .calc-modal-content {
            background: white;
            width: 100%;
            max-width: 520px;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            position: relative;
            max-height: 90vh;
            overflow-y: auto;
        }

        .calc-modal-close {
            position: absolute;
            top: 15px;
            right: 20px;
            background: transparent;
            border: none;
            font-size: 2rem;
            cursor: pointer;
            color: #666;
            line-height: 1;
            transition: color 0.2s;
        }

        .calc-modal-close:hover {
            color: #000;
        }

        /* Responsive Tweaks */
        @media (max-width: 600px) {
            .tours-grid {
                grid-template-columns: 1fr;
                padding: 0 15px;
            }

            .tour-meta {
                justify-content: flex-start;
            }
        }

        /* TESTIMONIAL SLIDER */
        .testimonial-section {
            padding: 4rem 1.5rem 5rem;
            background: #ffffff;
        }

        .testimonial-slider-wrapper {
            max-width: 800px;
            margin: 4.5rem auto 1.5rem auto;
            position: relative;
            display: flex;
            align-items: center;
            padding: 0 15px;
        }

        .testimonial-slider {
            width: 100%;
            overflow: visible;
            position: relative;
            min-height: 320px;
        }

        .testimonial-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
            padding: 3.2rem 2.5rem 2.5rem;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease, transform 0.5s ease;
            text-align: center;
            border-top: 4px solid var(--primary);
            box-sizing: border-box;
            transform: scale(0.95);
            z-index: 1;
        }

        .testimonial-card.active {
            opacity: 1;
            visibility: visible;
            transform: scale(1);
            position: relative;
            z-index: 2;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
        }

        .testimonial-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: var(--primary);
            color: white;
            border: none;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            transition: background 0.3s, transform 0.2s;
        }

        .testimonial-arrow:hover {
            background: #1b4332;
            transform: translateY(-50%) scale(1.08);
        }

        .testimonial-arrow.prev {
            left: -10px;
        }

        .testimonial-arrow.next {
            right: -10px;
        }

        .testimonial-dots {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 1.5rem;
        }

        .testimonial-dots .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #ccc;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        .testimonial-dots .dot.active {
            background: var(--primary);
            transform: scale(1.2);
        }

        .testimonial-avatar {
            width: 75px;
            height: 75px;
            border-radius: 50%;
            background: #e8e8e8;
            position: absolute;
            top: -37.5px;
            left: 50%;
            transform: translateX(-50%);
            border: 4px solid white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        .testimonial-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .testimonial-stars {
            color: #FFC107;
            font-size: 1.1rem;
            margin-bottom: 1rem;
            letter-spacing: 2px;
        }

        .testimonial-text {
            font-size: 0.95rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            font-style: italic;
        }

        .testimonial-name {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 0.2rem;
        }

        .testimonial-role {
            font-size: 0.85rem;
            color: #222222;
        }

        .float-contact-buttons {
            position: fixed;
            left: 20px;
            bottom: 30px;
            z-index: 99;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .float-contact-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            color: white;
            font-size: 1.6rem;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.35);
            animation: bouncePulse 1.5s infinite ease-in-out;
            transition: transform 0.5s ease, box-shadow 0.3s ease;
            position: relative;
        }

        .float-contact-btn.whatsapp {
            background-color: #25D366;
            animation-delay: 0s;
        }

        .float-contact-btn.phone {
            background-color: var(--accent);
            animation-delay: .75s;
        }

        .float-contact-btn:hover {
            transform: scale(1.12);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.45);
        }

        .float-contact-btn .tooltip {
            visibility: hidden;
            width: 110px;
            background-color: #ffffff;
            color: #030303;
            text-align: center;
            border-radius: 6px;
            padding: 5px 9px;
            position: absolute;
            left: 100%;
            top: 50%;
            transform: translateY(-50%) translateX(10px);
            opacity: 0;
            transition: all 0.3s ease;
            white-space: nowrap;
            z-index: 1000;
            font-size: 14px;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        }

        .float-contact-btn .tooltip::after {
            content: "";
            position: absolute;
            top: 50%;
            right: 100%;
            margin-top: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: transparent #fff transparent transparent;
        }

        .float-contact-btn:hover .tooltip {
            visibility: visible;
            opacity: 1;
            transform: translateY(-50%) translateX(0);
        }

        .float-contact-btn:hover {
            animation-play-state: paused;
        }

        @media (max-width: 768px) {
            .float-contact-btn {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }

            .float-contact-btn .tooltip {
                display: none;
            }
        }

        #backToTopBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: #333;
            color: white;
            cursor: pointer;
            padding: 11px 13px;
            border-radius: 50%;
            font-size: 18px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s, transform 0.3s;
        }

        /* ===== TRUST SECTION ===== */
        .trust-section {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.03) 0%, transparent 100%);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 40px 0;
            margin: 0 0 30px 0;
        }

        .trust-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
            gap: 20px;
            place-items: center;
        }

        /* ===== TRUST CARD ===== */
        .trust-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 24px 16px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            text-align: center;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: default;
            min-height: 140px;
            justify-content: space-between;
        }

        .trust-card:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }

        .trust-card:active {
            transform: translateY(-2px);
        }

        /* ===== TRUST CARD ICON ===== */
        .trust-card__icon {
            font-size: 40px;
            line-height: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            transition: transform 0.3s ease;
        }

        .trust-card:hover .trust-card__icon {
            transform: scale(1.1);
        }

        /* ===== TRUST CARD CONTENT ===== */
        .trust-card__content {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .trust-card__title {
            margin: 0;
            font-size: 15px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.95);
            line-height: 1.3;
        }

        .trust-card__subtitle {
            margin: 0;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.65);
            line-height: 1.3;
            letter-spacing: 0.3px;
        }

        /* ===== FOOTER CONTENT ===== */
        .footer-content {
            text-align: center;
            padding: 20px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-content p {
            margin: 8px 0;
            font-size: 13px;
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.6;
        }

        .footer-content a {
            color: rgba(255, 255, 255, 0.85);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-content a:hover {
            color: var(--accent);
            text-decoration: underline;
        }

        .final-cta-container {
            max-width: 1100px;
            margin: 0 auto;
            background: linear-gradient(135deg, #1b5e20 0%, #2e7d32 50%, #388e3c 100%);
            color: #ffffff;
            padding: 4rem 2.5rem;
            border-radius: 20px;
            border: 1px solid rgba(255, 193, 7, 0.45);
            box-shadow: 0 15px 40px rgba(46, 125, 50, 0.3), 0 0 0 4px rgba(255, 193, 7, 0.12);
            text-align: center;
        }

        .final-cta-container h2 {
            color: #ffffff;
            margin-bottom: 1.2rem;
            line-height: 1.3;
            font-size: 2.2rem;
        }

        .final-cta-container p {
            color: #f1f8e9 !important;
            font-size: 1.1rem;
            line-height: 1.7;
            max-width: 900px;
            margin: 0 auto 2.5rem auto !important;
        }

        /* ===== RESPONSIVE: TABLET (768px and below) ===== */
        @media (max-width: 768px) {
            .trust-container {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 16px;
            }

            .trust-card {
                padding: 20px 12px;
                min-height: 130px;
            }

            .trust-card__icon {
                font-size: 32px;
                width: 52px;
                height: 52px;
            }

            .trust-card__title {
                font-size: 14px;
            }

            .trust-card__subtitle {
                font-size: 11px;
            }

            .trust-section {
                padding: 30px 0;
                margin: 0 0 20px 0;
            }
        }

        /* ===== RESPONSIVE: MOBILE (480px and below) ===== */
        @media (max-width: 480px) {
            .trust-container {
                grid-template-columns: repeat(2, 1fr);
                gap: 12px;
            }

            .trust-card {
                padding: 16px 10px;
                min-height: 120px;
                gap: 10px;
            }

            .trust-card__icon {
                font-size: 28px;
                width: 48px;
                height: 48px;
            }

            .trust-card__title {
                font-size: 13px;
                font-weight: 600;
            }

            .trust-card__subtitle {
                font-size: 10px;
            }

            .trust-section {
                padding: 24px 0;
                margin: 0 0 16px 0;
            }

            .footer-content p {
                font-size: 12px;
            }

            .subhead {
            font-size: 1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        }

        /* ===== DARK MODE SUPPORT ===== */
        @media (prefers-color-scheme: dark) {
            .trust-card {
                background: rgba(255, 255, 255, 0.04);
                border-color: rgba(255, 255, 255, 0.1);
            }

            .trust-card:hover {
                background: rgba(255, 255, 255, 0.08);
                border-color: rgba(255, 255, 255, 0.2);
            }

            .trust-card__icon {
                background: rgba(255, 255, 255, 0.05);
            }
        }

        @keyframes bouncePulse {

            0%,
            100% {
                transform: translateY(0) scale(1);
            }

            50% {
                transform: translateY(0) scale(1.15);
            }
        }
    </style>
</head>

<body>
    <!-- TOP UTILITY STRIP (desktop only) -->
    <div class="top-strip">
        <div class="top-strip-inner">
            <a href="tel:+919805753890"><svg
                    style="width:12px;height:12px;fill:currentColor;vertical-align:middle;"
                    viewBox="0 0 512 512">
                    <path
                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 333.4 178.6 277.7 144 207.3L193.3 167c13.7-11.1 18.4-30 11.6-46.3l-40-96z" />
                </svg> +91 98057 53890</a>
            <a href="mailto:himachalcabsonline01@gmail.com"><svg
                    style="width:12px;height:12px;fill:currentColor;vertical-align:middle;"
                    viewBox="0 0 512 512">
                    <path
                        d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 192V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V192L286.4 336.4c-17.7 13.3-41.1 13.3-58.8 0L0 192z" />
                </svg>
                himachalcabsonline01@gmail.com</a>
        </div>
    </div>

    <!-- TOP SITE HEADER -->
    <header class="site-header">
        <div class="header-container">
            <div class="logo">
                <a href="#home">
                    <img src="/Images/logo.png" alt="Himachal Taxi Service Logo" width="180" height="50"
                        fetchpriority="high" loading="eager">
                </a>
            </div>
            <nav class="main-nav" id="mainNav" aria-label="Primary">
                <p class="mobile-menu-label">Explore</p>
                <a href="#home"><svg class="nav-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M3 10.5 12 3l9 7.5" />
                        <path d="M5 9.5V21h5v-6h4v6h5V9.5" />
                    </svg>Home</a>
                <a href="#why-us"><svg class="nav-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M12 3l7 2.8v5.4c0 4.4-2.9 8.3-7 9.8-4.1-1.5-7-5.4-7-9.8V5.8z" />
                        <path d="M9.3 11.8l2 2 3.4-3.8" />
                    </svg>Why Us</a>
                <a href="#fleet"><svg class="nav-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M4.5 12 6.2 7.6A2 2 0 0 1 8.1 6.2h7.8a2 2 0 0 1 1.9 1.4L19.5 12" />
                        <rect x="3.5" y="12" width="17" height="5" rx="1.5" />
                        <circle cx="7.5" cy="17.5" r="1.3" />
                        <circle cx="16.5" cy="17.5" r="1.3" />
                    </svg>Fleet</a>
                <a href="#reviews"><svg class="nav-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path
                            d="M12 3.6l2.6 5.2 5.7.8-4.1 4 1 5.7-5.2-2.7-5.2 2.7 1-5.7-4.1-4 5.7-.8z" />
                    </svg>Reviews</a>
                <a href="#tours"><svg class="nav-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M12 21.5s-6.5-5.6-6.5-10.5a6.5 6.5 0 1 1 13 0c0 4.9-6.5 10.5-6.5 10.5z" />
                        <circle cx="12" cy="11" r="2.2" />
                    </svg>Tours</a>
                <a href="#faq"><svg class="nav-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M4 5.5A1.5 1.5 0 0 1 5.5 4h13A1.5 1.5 0 0 1 20 5.5v8a1.5 1.5 0 0 1-1.5 1.5H9l-5 4.5z" />
                    </svg>FAQ</a>
                <a href="#home" class="nav-cta nav-cta-menu">Book Your Taxi Now</a>
                <a href="tel:+919805753890" class="mobile-menu-call"><svg class="nav-ico" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <path
                            d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.4 2.1L8.1 9.7a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.4c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.9 2z" />
                    </svg>+91 98057 53890</a>
            </nav>
            <div class="header-actions">
                <a href="#home" class="nav-cta nav-cta-desktop">Book Now</a>
                <button class="nav-toggle" id="navToggle" aria-label="Open menu" aria-expanded="false"
                    aria-controls="mainNav">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>
    <div class="nav-backdrop" id="navBackdrop"></div>

    <main role="main">

        <!-- HERO SECTION -->
        <header class="hero" id="home">
            <div class="hero-content">
                <!-- <h1 style="color: var(--accent);">Himachal Cabs
                    Online</h1> -->
                <h1 style="color: var(--accent);">Himachal Taxi Service for Transfers, Sightseeing & Tours</h1>
                <p class="subhead">
                    Himachal Cabs Online is a local taxi service for private travel across Himachal Pradesh. Book
                    one-way transfers, sightseeing cabs or multi-day taxi trips with experienced local drivers and
                    choose from sedans, SUVs and larger vehicles for your journey.
                </p>


                <form id="taxiForm" class="booking-form" action="api/submit.php" method="POST">
                    <input type="hidden" name="bot-field">

                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" placeholder="Your Name" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="Your Phone Number (10-12 digits)" inputmode="numeric"
                            pattern="[0-9]{10,12}" minlength="10" maxlength="12" title="Enter 10-12 digits" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address (Optional)</label>
                        <input type="email" id="email" name="email" placeholder="Your Email Address">
                    </div>

                    <div class="form-group">
                        <label for="destination">Where are you going?</label>
                        <select id="destination" name="destination" required>
                            <option value="" disabled selected>Select Destination</option>
                            <option value="Shimla">Shimla</option>
                            <option value="Manali">Manali</option>
                            <option value="Dharamshala">Dharamshala</option>
                            <option value="Dalhousie">Dalhousie</option>
                            <option value="Kasol">Kasol</option>
                            <option value="Spiti">Spiti</option>
                            <option value="Kinnaur">Kinnaur</option>
                            <option value="Other">Other (Custom Tour)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="type">Select Vehicle</label>
                        <select id="type" name="vehicle-type" required>
                            <option value="" disabled selected>Select Vehicle Type</option>
                            <option value="Sedan">Sedan (2-4 seater)</option>
                            <option value="SUV">SUV (4-7 seater)</option>
                            <option value="Traveller">Traveller 8+ Seater</option>
                        </select>
                    </div>

                    <button type="submit" class="cta-btn" id="submitBtn">Get Free Quote Now</button>
                </form>
            </div>
        </header>

        <!-- WHY CHOOSE US -->
        <section class="trust-section" id="why-us">
            <div class="section-title">
                <h2>Why Travelers Trust Himachal Cabs Online</h2>
                <p>Looking for a dependable taxi service in Himachal Pradesh? Our experienced local drivers and flexible
                    travel options make every journey comfortable and hassle-free — from Shimla and Manali to
                    Dharamshala, Dalhousie, and beyond.</p>
            </div>
            <div class="why-us-grid">
                <div class="why-card">
                    <div class="why-icon">🏔️</div>
                    <h3>Mountain Experts</h3>
                    <p>Our experienced drivers know Himachal Pradesh’s winding roads, steep ghats, and challenging
                        mountain routes, helping you travel safely and comfortably.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon">🛡️</div>
                    <h3>Safety First</h3>
                    <p>Our taxis are well-maintained, AC-checked, and equipped with essential safety and travel
                        amenities, including first-aid kits.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon">💰</div>
                    <h3>No Hidden Costs</h3>
                    <p>Get clear, upfront pricing with no hidden charges. Any applicable tolls, parking fees, or other
                        additional costs are communicated clearly.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon">🌙</div>
                    <h3>24/7 Support</h3>
                    <p>Need assistance during your journey? Our support team is available 24/7, and in case of a vehicle
                        breakdown, we work to arrange a replacement swiftly.</p>
                </div>
            </div>
        </section>

        <!-- FLEET & PRICING -->
        <section class="fleet-section" id="fleet">
            <div class="section-title">
                <h2>Our Fleet & Transparent Pricing</h2>
                <p>Choose the right vehicle for your Himachal journey with comfortable options for every group size,
                    route, and budget.</p>
            </div>
            <div class="fleet-grid">
                <!-- Car 1: Hatchback -->
                <div class="fleet-card">
                    <div class="fleet-img">
                        <img src="/Images/Maruti Alto.jpg" alt="Maruti Alto Taxi" width="300" height="250"
                            loading="lazy">
                        <span class="fleet-badge">Budget Friendly</span>
                    </div>
                    <div class="fleet-details">
                        <h3 class="fleet-name">Maruti Alto</h3>
                        <div class="fleet-specs">
                            <span>👥 4+1 Seats</span>
                            <span>🧳 2-3 Bags</span>
                            <span>⛽ Petrol</span>
                        </div>
                        <div class="fleet-price">₹2500/day <small>or ₹15/km</small></div>
                        <p>
                            <svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 20 9.5 5l4.5 8.5L16.5 10 21 20H3z"/></svg> Perfect
                            for local sightseeing
                        </p>
                        <p>
                            <svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="8" r="3.2"/><path d="M3 20c0-3.3 2.7-5.5 6-5.5s6 2.2 6 5.5"/><circle cx="16.8" cy="9" r="2.5"/><path d="M16.4 14.6c2.5.6 4.6 2.4 4.6 5.4"/></svg> Best
                            for couples & solo travelers
                        </p>
                        <p>
                            <svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 4h12M6 8.5h12M6 4c6.5 0 9.5 1.3 9.5 4.5S12.5 13 8 13l7.5 8"/></svg>
                            Budget-friendly Himachal travel
                        </p>
                        <p>
                            <svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 21 9.5 3M19 21 14.5 3M12 6.5v2.5M12 11v2.5M12 15.5V18"/></svg> Easy on narrow
                            roads
                        </p>
                    </div>
                    <a href="#booking-form" class="fleet-cta" data-car="Maruti Alto">Calculate Price</a>
                </div>

                <!-- Car 2: Sedan -->
                <div class="fleet-card">
                    <div class="fleet-img">
                        <img src="/Images/Dzire.webp" alt="Swift Dzire Taxi" width="300" height="250" loading="lazy">
                        <span class="fleet-badge">Popular</span>
                    </div>
                    <div class="fleet-details">
                        <h3 class="fleet-name">Swift Dzire</h3>
                        <div class="fleet-specs">
                            <span>👥 4+1 Seats</span>
                            <span>⛽ Petrol/Diesel</span>
                            <span>🎒 2-4 Bags</span>
                        </div>
                        <div class="fleet-price">₹3000/day <small>or ₹17/km</small></div>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="8" r="3.2"/><path d="M3 20c0-3.3 2.7-5.5 6-5.5s6 2.2 6 5.5"/><circle cx="16.8" cy="9" r="2.5"/><path d="M16.4 14.6c2.5.6 4.6 2.4 4.6 5.4"/></svg>
                            Ideal for couples</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 20 9.5 5l4.5 8.5L16.5 10 21 20H3z"/></svg>
                            Great for Shimla-Manali</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 21 9.5 3M19 21 14.5 3M12 6.5v2.5M12 11v2.5M12 15.5V18"/></svg>
                            Comfortable highway travel</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="7.5" r="2.6"/><circle cx="5.5" cy="9.5" r="2.2"/><circle cx="18.5" cy="9.5" r="2.2"/><path d="M7.5 20c0-2.8 2-4.7 4.5-4.7s4.5 1.9 4.5 4.7M1.5 20c0-2.4 1.6-4 3.7-4.4M18.8 15.6c2.1.4 3.7 2 3.7 4.4"/></svg>
                            Budget-friendly family trips</p>
                    </div>
                    <a href="#booking-form" class="fleet-cta" data-car="Swift Dzire">Calculate Price</a>
                </div>

                <div class="fleet-card">
                    <div class="fleet-img">
                        <img src="/Images/Etios.webp" alt="Toyota Etios Taxi" width="300" height="250" loading="lazy">
                        <span class="fleet-badge">Comfort</span>
                    </div>
                    <div class="fleet-details">
                        <h3 class="fleet-name">Toyota Etios</h3>
                        <div class="fleet-specs">
                            <span>👥 4+1 Seats</span>
                            <span>🧳 3-5 Bags</span>
                            <span>⛽ Diesel</span>
                        </div>
                        <div class="fleet-price">₹3200/day <small>or ₹18/km</small></div>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 21 9.5 3M19 21 14.5 3M12 6.5v2.5M12 11v2.5M12 15.5V18"/></svg> Reliable
                            long-distance travel</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="7.5" r="2.6"/><circle cx="5.5" cy="9.5" r="2.2"/><circle cx="18.5" cy="9.5" r="2.2"/><path d="M7.5 20c0-2.8 2-4.7 4.5-4.7s4.5 1.9 4.5 4.7M1.5 20c0-2.4 1.6-4 3.7-4.4M18.8 15.6c2.1.4 3.7 2 3.7 4.4"/></svg>
                            Comfortable for family trips</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 20 9.5 5l4.5 8.5L16.5 10 21 20H3z"/></svg>
                            Great for Himachal Taxi Tours</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 21 9.5 3M19 21 14.5 3M12 6.5v2.5M12 11v2.5M12 15.5V18"/></svg> Suitable
                            for hill roads</p>
                    </div>
                    <a href="#booking-form" class="fleet-cta" data-car="Toyota Etios">Calculate Price</a>
                </div>

                <!-- Car 3: SUV -->
                <div class="fleet-card">
                    <div class="fleet-img">
                        <img src="/Images/ertiga.webp" alt="Suzuki Ertiga Taxi" width="300" height="250" loading="lazy">
                        <span class="fleet-badge">Suitable for Hills</span>
                    </div>
                    <div class="fleet-details">
                        <h3 class="fleet-name">Suzuki Ertiga</h3>
                        <div class="fleet-specs">
                            <span>👥 6+1 Seats</span>
                            <span>🧳 4-6 Bags</span>
                            <span>⛽ Diesel</span>
                        </div>
                        <div class="fleet-price">₹4000/day <small>or ₹24/km</small></div>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="8" r="3.2"/><path d="M3 20c0-3.3 2.7-5.5 6-5.5s6 2.2 6 5.5"/><circle cx="16.8" cy="9" r="2.5"/><path d="M16.4 14.6c2.5.6 4.6 2.4 4.6 5.4"/></svg> Perfect
                            for small groups</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="7.5" r="2.6"/><circle cx="5.5" cy="9.5" r="2.2"/><circle cx="18.5" cy="9.5" r="2.2"/><path d="M7.5 20c0-2.8 2-4.7 4.5-4.7s4.5 1.9 4.5 4.7M1.5 20c0-2.4 1.6-4 3.7-4.4M18.8 15.6c2.1.4 3.7 2 3.7 4.4"/></svg>
                            Great for family tours</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 20 9.5 5l4.5 8.5L16.5 10 21 20H3z"/></svg>
                            Comfortable mountain journeys</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 21 9.5 3M19 21 14.5 3M12 6.5v2.5M12 11v2.5M12 15.5V18"/></svg> Ideal
                            for Himachal circuits</p>
                    </div>
                    <a href="#booking-form" class="fleet-cta" data-car="Suzuki Ertiga">Calculate Price</a>
                </div>

                <div class="fleet-card">
                    <div class="fleet-img">
                        <img src="/Images/Innova.webp" alt="Toyota Innova Taxi" width="300" height="250" loading="lazy">
                        <span class="fleet-badge">Comfort</span>
                    </div>
                    <div class="fleet-details">
                        <h3 class="fleet-name">Toyota Innova</h3>
                        <div class="fleet-specs">
                            <span>👥 6+1 Seats</span>
                            <span>🧳 5-7 Bags</span>
                            <span>⛽ Diesel</span>
                        </div>
                        <div class="fleet-price">₹4500/day <small>or ₹26/km</small></div>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 21 9.5 3M19 21 14.5 3M12 6.5v2.5M12 11v2.5M12 15.5V18"/></svg>
                            Excellent for long journeys</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 20 9.5 5l4.5 8.5L16.5 10 21 20H3z"/></svg>
                            Comfortable on mountain roads</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="7.5" r="2.6"/><circle cx="5.5" cy="9.5" r="2.2"/><circle cx="18.5" cy="9.5" r="2.2"/><path d="M7.5 20c0-2.8 2-4.7 4.5-4.7s4.5 1.9 4.5 4.7M1.5 20c0-2.4 1.6-4 3.7-4.4M18.8 15.6c2.1.4 3.7 2 3.7 4.4"/></svg>
                            Ideal for family tours</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 21 9.5 3M19 21 14.5 3M12 6.5v2.5M12 11v2.5M12 15.5V18"/></svg> Great
                            for Himachal circuits</p>
                    </div>
                    <a href="#booking-form" class="fleet-cta" data-car="Toyota Innova">Calculate Price</a>
                </div>

                <!-- Car 4: Luxury -->
                <div class="fleet-card">
                    <div class="fleet-img">
                        <img src="/Images/Innova Crysta.webp" alt="Innova Crysta Taxi" width="300" height="250"
                            loading="lazy">
                        <span class="fleet-badge">Premium</span>
                    </div>
                    <div class="fleet-details">
                        <h3 class="fleet-name">Innova Crysta</h3>
                        <div class="fleet-specs">
                            <span>👥 7+1 Seats</span>
                            <span>🧳 5-7 Bags</span>
                            <span>⛽ Diesel</span>
                        </div>
                        <div class="fleet-price">₹5000/day <small>or ₹28/km</small></div>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="7.5" r="2.6"/><circle cx="5.5" cy="9.5" r="2.2"/><circle cx="18.5" cy="9.5" r="2.2"/><path d="M7.5 20c0-2.8 2-4.7 4.5-4.7s4.5 1.9 4.5 4.7M1.5 20c0-2.4 1.6-4 3.7-4.4M18.8 15.6c2.1.4 3.7 2 3.7 4.4"/></svg>
                            Premium family travel</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 21 9.5 3M19 21 14.5 3M12 6.5v2.5M12 11v2.5M12 15.5V18"/></svg> Extra
                            comfort for long drives</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3v18M4.2 7.5l15.6 9M19.8 7.5l-15.6 9M12 3 10 5M12 3l2 2M12 21l-2-2M12 21l2-2"/></svg>
                            Great for snow roads</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 20 9.5 5l4.5 8.5L16.5 10 21 20H3z"/></svg>
                            Ideal for Spiti Valley</p>
                    </div>
                    <a href="#booking-form" class="fleet-cta" data-car="Innova Crysta">Calculate Price</a>
                </div>

                <!-- Car 5: Mini-Bus -->
                <div class="fleet-card">
                    <div class="fleet-img">
                        <img src="/Images/Traveller 12 Seater.webp" alt="Traveller 12 Seater" width="300" height="250"
                            loading="lazy">
                        <span class="fleet-badge">Group</span>
                    </div>
                    <div class="fleet-details">
                        <h3 class="fleet-name">Traveller 12-Seater</h3>
                        <div class="fleet-specs">
                            <span>👥 12+1 Seats</span>
                            <span>💺 Comfort</span>
                            <span>⛽ Diesel</span>
                        </div>
                        <div class="fleet-price">₹6500/day <small>or ₹32/km</small></div>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="7.5" r="2.6"/><circle cx="5.5" cy="9.5" r="2.2"/><circle cx="18.5" cy="9.5" r="2.2"/><path d="M7.5 20c0-2.8 2-4.7 4.5-4.7s4.5 1.9 4.5 4.7M1.5 20c0-2.4 1.6-4 3.7-4.4M18.8 15.6c2.1.4 3.7 2 3.7 4.4"/></svg>
                            Perfect for group tours</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="17" cy="6" r="2.4"/><path d="M2.5 20 9.5 7l4 6 2.5-3 5.5 10h-19z"/></svg>
                            Ideal for Spiti Valley</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 20 9.5 5l4.5 8.5L16.5 10 21 20H3z"/></svg> Great for Kinnaur
                            routes</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 21 9.5 3M19 21 14.5 3M12 6.5v2.5M12 11v2.5M12 15.5V18"/></svg> Handles
                            mountain roads well</p>
                    </div>
                    <a href="#booking-form" class="fleet-cta" data-car="Traveller 12-Seater">Calculate Price</a>
                </div>

                <div class="fleet-card">
                    <div class="fleet-img">
                        <img src="/Images/Traveller 17 Seater.webp" alt="Traveller 17 Seater" width="300" height="250"
                            loading="lazy">
                        <span class="fleet-badge">Large Group</span>
                    </div>
                    <div class="fleet-details">
                        <h3 class="fleet-name">Traveller 17-Seater</h3>
                        <div class="fleet-specs">
                            <span>👥 17+1 Seats</span>
                            <span>💺 Relaxed</span>
                            <span>⛽ Diesel</span>
                        </div>
                        <div class="fleet-price">₹8000/day <small>or ₹38/km</small></div>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="7.5" r="2.6"/><circle cx="5.5" cy="9.5" r="2.2"/><circle cx="18.5" cy="9.5" r="2.2"/><path d="M7.5 20c0-2.8 2-4.7 4.5-4.7s4.5 1.9 4.5 4.7M1.5 20c0-2.4 1.6-4 3.7-4.4M18.8 15.6c2.1.4 3.7 2 3.7 4.4"/></svg>
                            Ideal for large groups</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="8" r="3.2"/><path d="M3 20c0-3.3 2.7-5.5 6-5.5s6 2.2 6 5.5"/><circle cx="16.8" cy="9" r="2.5"/><path d="M16.4 14.6c2.5.6 4.6 2.4 4.6 5.4"/></svg> Perfect
                            for family tours</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 21 9.5 3M19 21 14.5 3M12 6.5v2.5M12 11v2.5M12 15.5V18"/></svg> Great
                            for Himachal circuits</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 20 9.5 5l4.5 8.5L16.5 10 21 20H3z"/></svg>
                            Comfortable on hill roads</p>
                    </div>
                    <a href="#booking-form" class="fleet-cta" data-car="Traveller 17-Seater">Calculate Price</a>
                </div>

                <div class="fleet-card">
                    <div class="fleet-img">
                        <img src="/Images/Urbania.webp" alt="Urbania 17 Seater" width="300" height="250" loading="lazy">
                        <span class="fleet-badge">Luxury</span>
                    </div>
                    <div class="fleet-details">
                        <h3 class="fleet-name">Urbania 17-Seater</h3>
                        <div class="fleet-specs">
                            <span>👥 17+1 Seats</span>
                            <span>❄️ Fully AC</span>
                            <span>⛽ Diesel</span>
                        </div>
                        <div class="fleet-price">₹12000/day <small>or ₹70/km</small></div>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="7.5" r="2.6"/><circle cx="5.5" cy="9.5" r="2.2"/><circle cx="18.5" cy="9.5" r="2.2"/><path d="M7.5 20c0-2.8 2-4.7 4.5-4.7s4.5 1.9 4.5 4.7M1.5 20c0-2.4 1.6-4 3.7-4.4M18.8 15.6c2.1.4 3.7 2 3.7 4.4"/></svg>
                            Premium group travel</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 21 9.5 3M19 21 14.5 3M12 6.5v2.5M12 11v2.5M12 15.5V18"/></svg> Spacious
                            for long journeys</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="17" cy="6" r="2.4"/><path d="M2.5 20 9.5 7l4 6 2.5-3 5.5 10h-19z"/></svg>
                            Ideal for Himachal tours</p>
                        <p><svg class="feat-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 20 9.5 5l4.5 8.5L16.5 10 21 20H3z"/></svg>
                            Comfortable mountain travel</p>
                    </div>
                    <a href="#booking-form" class="fleet-cta" data-car="Urbania 17-Seater">Calculate Price</a>
                </div>
            </div>
        </section>

        <!-- PRICE CALCULATOR MODAL -->
        <div id="calcModal" class="calc-modal-overlay" style="display: none;">
            <div class="calc-modal-content">
                <button class="calc-modal-close" id="closeCalcModal">&times;</button>
                <div class="section-title" style="margin-bottom: 20px;">
                    <h2 style="font-size: 1.8rem; color: #1b4332;">Plan Your Himachal Taxi Tour Budget</h2>
                    <p style="font-size: 0.95rem; color: #555;">Tell us about your journey and get a quick estimated
                        fare for your selected taxi.</p>
                </div>

                <!-- Step 1: Form Inputs -->
                <div id="calcFormStep">
                    <div class="form-group">
                        <label for="calc-car">Select Car</label>
                        <select id="calc-car">
                            <option value="14">Maruti Alto</option>
                            <option value="17">Swift Dzire</option>
                            <option value="18">Toyota Etios</option>
                            <option value="24">Suzuki Ertiga</option>
                            <option value="26">Toyota Innova</option>
                            <option value="29">Innova Crysta</option>
                            <option value="40">Traveller 12-Seater</option>
                            <option value="50">Traveller 17-Seater</option>
                            <option value="70">Urbania 17-Seater</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="calc-pickup">Pickup Location</label>
                        <input type="text" id="calc-pickup" placeholder="e.g. Chandigarh / Shimla" required>
                    </div>
                    <div class="form-group">
                        <label for="calc-drop">Drop Location</label>
                        <input type="text" id="calc-drop" placeholder="e.g. Manali / Delhi" required>
                    </div>
                    <div class="form-group">
                        <label for="calc-km">Approx Distance (km)</label>
                        <input type="number" id="calc-km" placeholder="e.g. 250">
                    </div>
                    <div class="form-group">
                        <label for="calc-days">Number of Days</label>
                        <input type="number" id="calc-days" placeholder="e.g. 5" value="1">
                    </div>
                    <button class="cta-btn" id="calcBtn" style="margin-top: 10px;">Calculate Estimate</button>
                </div>

                <!-- Step 2: Result & Phone Share -->
                <div id="calcResultStep" style="display: none;">
                    <div id="calc-result" class="calc-result" style="display: block; margin-bottom: 20px;">
                        <!-- Result will appear here -->
                    </div>
                    <div class="form-group" style="text-align: left; margin-bottom: 15px;">
                        <label for="calc-phone"
                            style="font-weight: 600; color: #333; display: block; margin-bottom: 5px;">Enter Your Phone
                            Number to Get Quote:</label>
                        <input type="tel" id="calc-phone" placeholder="Your Phone Number (10-12 digits, e.g. 9805753890)"
                            inputmode="numeric" pattern="[0-9]{10,12}" minlength="10" maxlength="12" title="Enter 10-12 digits"
                            style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 1rem;"
                            required>
                    </div>
                    <button class="cta-btn" id="bookEstimateBtn" style="background: var(--primary); color: white;">Get
                        Quote & Book Now</button>
                    <button type="button" id="backToCalcBtn"
                        style="background: transparent; border: none; color: #555; text-decoration: underline; margin-top: 12px; cursor: pointer; width: 100%; font-size: 0.9rem;">←
                        Edit Journey Details</button>
                </div>
            </div>
        </div>


        <!-- TESTIMONIAL SECTION -->
        <section class="testimonial-section" id="reviews">
            <div class="section-title">
                <p
                    style="text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem; color: var(--primary); font-weight: 700; margin-bottom: 5px;">
                    Testimonial</p>
                <h2>What Our Travelers Say</h2>
                <p>Read genuine experiences from travelers who chose Himachal Cabs Online for their journeys across
                    Himachal Pradesh.</p>
            </div>
            
            <div class="testimonial-slider-wrapper">
                <button class="testimonial-arrow prev" id="prevTestimonial" aria-label="Previous Testimonial">&#10094;</button>
                
                <div class="testimonial-slider" id="testimonialSlider">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card active">
                        <div class="testimonial-avatar">
                            <img src="/Images/user-male.png" alt="Customer Avatar" width="75" height="75" loading="lazy">
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-stars">⭐⭐⭐⭐⭐</div>
                            <p class="testimonial-text">"We had a pleasant and comfortable experience with Mr.Jayant Thakur
                                during our recent trip to Himachal Pradesh. Mr.Jayant Thakur gave us a perfectly planned
                                itinerary for our trip and was always willing to help n guide us in the best possible way
                                through out the trip. He made sure to provide us with the best transportation with
                                experienced
                                and cooperative drivers, who made our trip more enjoyable.. Highly recommended for families
                                visiting Himachal Pradesh."</p>
                            <h3 class="testimonial-name">Ramakrishna M</h3>
                            <span class="testimonial-role">Himachal Family Trip</span>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="testimonial-card">
                        <div class="testimonial-avatar">
                            <img src="/Images/user-female.png" alt="Customer Avatar" width="75" height="75" loading="lazy">
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-stars">⭐⭐⭐⭐⭐</div>
                            <p class="testimonial-text">"The experience with Pawan Thakur has been excellent over the last
                                13
                                days. We had been to Chitkul and Spiti Valley - Pawan took us to all places of interest in
                                Spiti
                                Valley without any time binding on us - we had a wonderful experience with him."</p>
                            <h3 class="testimonial-name">Manika Basu</h3>
                            <span class="testimonial-role">Spiti Valley Trip</span>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="testimonial-card">
                        <div class="testimonial-avatar">
                            <img src="/Images/user-male-2.png" alt="Customer Avatar" width="75" height="75" loading="lazy">
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-stars">⭐⭐⭐⭐⭐</div>
                            <p class="testimonial-text">"Booked a trip to Shimla &amp; Manali - The team proposed a good
                                itinerary based on my travel dates &amp; plan. We were also able to be flexible on the local
                                sightseeing schedules. Driver was well versed with the area &amp; locations - Which is
                                valuable
                                as roads are difficult being hilly areas. Travel was made easier being driven around these
                                areas
                                which allowed us to enjoy the scenic routes &amp; nature. Would recommend people to consider
                                if
                                you're on a trip to North India."</p>
                            <h3 class="testimonial-name">Ramachandran N</h3>
                            <span class="testimonial-role">Shimla Manali Taxi Tour</span>
                        </div>
                    </div>
                </div>

                <button class="testimonial-arrow next" id="nextTestimonial" aria-label="Next Testimonial">&#10095;</button>
            </div>

            <!-- Dots Pagination -->
            <div class="testimonial-dots" id="testimonialDots">
                <span class="dot active" data-index="0"></span>
                <span class="dot" data-index="1"></span>
                <span class="dot" data-index="2"></span>
            </div>
        </section>

        <!-- TOUR PACKAGES SECTION -->
        <section class="tours-section" id="tours">
            <div class="section-title">
                <h2>Popular Himachal Tour Packages</h2>
                <p>Checkout our pre-planned taxi tour itineraries of Himachal. These itineraries are fully customizable.
                </p>
            </div>

            <!-- This grid will be populated by JS -->
            <div class="tours-grid" id="toursContainer">
                <!-- Cards will be injected here automatically -->
            </div>
        </section>


        <!-- FAQ SECTION -->
        <section class="faq-section" id="faq">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Checkout the most asked questions and their answers regarding our Himachal Taxi Service.</p>
            </div>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">Do I need to pay separately for the driver’s food and stay during the
                        trip?
                    </div>
                    <div class="faq-answer">No. The driver’s food and stay are included in the taxi package, so you do
                        not
                        need to make separate arrangements or payments for these expenses during your trip.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Do you provide AC in all cars?</div>
                    <div class="faq-answer">Yes, all our vehicles are fully AC. However, AC service will be switched off
                        in hilly areas.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Q. What is the advance booking payment policy?</div>
                    <div class="faq-answer">We generally require a 20% advance deposit to confirm your booking, with the
                        remaining balance payable during the trip.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Q. Can we customize our Himachal tour itinerary?</div>
                    <div class="faq-answer">Yes! Our taxi service is flexible and can be arranged according to your
                        travel itinerary. You can choose the destinations, sightseeing places, and stopovers you want to
                        cover, and we’ll provide a suitable taxi for your planned journey.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Q. Do you provide one-way taxi service or taxis for the entire trip?</div>
                    <div class="faq-answer">Yes, we provide both one-way taxi services and full-trip taxi services
                        across Himachal Pradesh. You can book a taxi based on your travel requirements—whether you need
                        a one-way drop to your destination or a dedicated vehicle for your entire Himachal trip.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Q. From which locations do you offer pickup for Himachal tours?</div>
                    <div class="faq-answer">We offer pickup services from Delhi, Chandigarh, Amritsar, Pathankot,
                        Ambala,
                        Rajpura, and other major travel hubs. You can share your pickup location with us, and we’ll help
                        arrange the most convenient taxi service for your Himachal trip.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Q. Are your drivers experienced in hill driving?</div>
                    <div class="faq-answer">Yes. Our drivers are experienced in driving on Himachal’s hilly and
                        mountainous
                        roads. They are familiar with local routes, hill conditions, and the driving requirements of
                        different destinations across Himachal Pradesh.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Q. What confirmation will I receive after making an advance payment?</div>
                    <div class="faq-answer">After making the advance payment, you will receive an advance payment
                        receipt
                        along with the taxi and driver details.</div>
                </div>
            </div>
        </section>

        <!-- Floating Left Contact Buttons -->
        <div class="float-contact-buttons">
            <a href="https://wa.me/919805753890" class="float-contact-btn whatsapp" target="_blank"
                aria-label="Chat on WhatsApp">
                <svg style="width:26px;height:26px;fill:currentColor;" viewBox="0 0 448 512">
                    <path
                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.8 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                </svg>
                <span class="tooltip">WhatsApp</span>
            </a>
            <a href="tel:+919805753890" class="float-contact-btn phone" aria-label="Call Us">
                <svg style="width:24px;height:24px;fill:currentColor;" viewBox="0 0 512 512">
                    <path
                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 333.4 178.6 277.7 144 207.3L193.3 167c13.7-11.1 18.4-30 11.6-46.3l-40-96z" />
                </svg>
                <span class="tooltip">Call Us</span>
            </a>
        </div>

        <!-- Back to Top Button -->
        <button id="backToTopBtn" title="Go to top" aria-label="Back to top">
            <svg style="width:18px;height:18px;fill:currentColor;" viewBox="0 0 448 512">
                <path
                    d="M201.4 137.4c12.5-12.5 32.8-12.5 45.3 0l160 160c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L224 205.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l160-160z" />
            </svg>
        </button>

        <!-- Final CTA Section -->
        <section class="final-cta-section">
            <div class="final-cta-container">
                <h2>More Than <span style="color:var(--accent);">5,000</span> People Have Explored Himachal With Us</h2>
                <p>
                    Planning a trip to Himachal? We're a complete Himachal taxi service providers covering all your
                    transportation needs — including our popular Shimla taxi service and Manali taxi service, plus
                    reliable cabs to Dharamshala, Dalhousie, and Spiti Valley. Over the past 8 years, we've safely
                    carried more than 5,000 satisfied travelers across the mountains, backed by our satisfaction
                    guarantee. Join the thousands of happy travelers who've explored Himachal with us.
                </p>
                <a href="#home" class="cta-btn">Book Your Taxi Now</a>
            </div>

        </section>

    </main>

    <!-- FOOTER -->
    <footer class="site-footer">
        <!-- Trust Badges Section -->
        <div class="trust-section">
            <div class="trust-container">
                <!-- Badge 1: Himachal Tourism -->
                <div class="trust-card">
                    <div class="trust-card__icon">🏛️</div>
                    <div class="trust-card__content">
                        <h3 class="trust-card__title">Himachal Tourism</h3>
                        <p class="trust-card__subtitle">Registered Transporters</p>
                    </div>
                </div>

                <!-- Badge 3: Google Reviews -->
                <div class="trust-card">
                    <div class="trust-card__icon">⭐</div>
                    <div class="trust-card__content">
                        <h3 class="trust-card__title">200+ Reviews</h3>
                        <p class="trust-card__subtitle">4.8★ Positive Rating</p>
                    </div>
                </div>

                <!-- Badge 4: Years in Business -->
                <div class="trust-card">
                    <div class="trust-card__icon">📅</div>
                    <div class="trust-card__content">
                        <h3 class="trust-card__title">8+ Years in Market</h3>
                        <p class="trust-card__subtitle">Proven Track Record</p>
                    </div>
                </div>

                <!-- Badge 5: Happy Travelers -->
                <div class="trust-card">
                    <div class="trust-card__icon">👥</div>
                    <div class="trust-card__content">
                        <h3 class="trust-card__title">5,000+</h3>
                        <p class="trust-card__subtitle">Community of Explorers</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Original Footer Content -->
        <div class="footer-content">
            <p>&copy; <span id="current-year"></span> Himachal Cabs Online - A Unit of <a
                    href="https://uranoteholidays.com" target="_blank"
                    style="text-decoration: none; font-weight: bold; color: var(--accent);">Uranote Holidays.</a> All
                rights reserved.</p>
            <p><a href="/privacy-policy.html" style="color: var(--light); text-decoration: underline;">Privacy
                    Policy</a></p>
        </div>
    </footer>

    <script src="main.js?v=2.2" defer></script>

    <!-- Google Tag Manager (Optimized) -->
    <!-- Google Tag Manager (Optimized: loaded exclusively on user interaction for 0 TBT) -->
    <script>
        function loadGTM() {
            if (window.gtmLoaded) return;
            window.gtmLoaded = true;
            (function (w, d, s, l, i) {
                w[l] = w[l] || []; w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                }); var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-5KZDTW64');
        }
        ['pointerdown', 'touchstart', 'scroll', 'keydown', 'click'].forEach(function (e) {
            window.addEventListener(e, loadGTM, { once: true, passive: true });
        });
    </script>
    <!-- End Google Tag Manager -->
    
    <!-- Dynamic Meta Description & Title for Ad Groups -->
    

</body>

</html>