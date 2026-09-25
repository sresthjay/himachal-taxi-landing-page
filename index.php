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

    <!-- Preload LCP hero image + heading font (body font swaps lazily, low shift risk) -->
    <link rel="preload" as="image" href="/Images/hero-bg.jpg" fetchpriority="high">
    <link rel="preload" as="font" type="font/woff2" crossorigin
        href="https://fonts.gstatic.com/s/fraunces/v38/6NU78FyLNQOQZAnv9bYEvDiIdE9Ea92uemAk_WBq8U_9v0c2Wa0KxC9TeA.woff2">

    <!-- Google Fonts (Non-blocking) -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Fraunces:opsz,wght@9..144,700;9..144,900&display=swap" as="style"
        onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Fraunces:opsz,wght@9..144,700;9..144,900&display=swap" rel="stylesheet">
    </noscript>

    <!-- Inline Critical & Core CSS to Eliminate Render-Blocking Requests and Accelerate LCP Discovery -->
    <style>*{box-sizing:border-box;margin:0;padding:0}html{scroll-behavior:smooth}body{font-family:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;line-height:1.6;color:#222222;background:#f9f9f9}:root{--primary:#2E7D32;--accent:#FFC107;--dark:#1a1a1a;--light:#ffffff;--font-head:'Fraunces',Georgia,'Times New Roman',serif}h1,h2,h3,.tour-title,.fleet-name,.final-cta-container h2{font-family:var(--font-head);letter-spacing:-0.01em}.hero{position:relative;overflow:hidden;display:flex;align-items:center;justify-content:center;padding:70px 20px 80px;color:white;background:#0d1b2a}.hero-bg{position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;z-index:1}.hero-overlay{position:absolute;inset:0;z-index:1;background:radial-gradient(900px 400px at 85% 10%,rgba(255,193,7,0.18),transparent 60%),linear-gradient(100deg,rgba(13,27,42,0.94) 20%,rgba(27,67,50,0.88) 55%,rgba(13,27,42,0.72) 100%)}.hero-inner{position:relative;z-index:2;width:100%;max-width:1200px;display:grid;grid-template-columns:1.05fr 0.95fr;gap:48px;align-items:center}.hero-eyebrow{display:inline-flex;align-items:center;gap:8px;font-size:0.82rem;font-weight:700;letter-spacing:0.4px;color:#ffe9a8;background:rgba(255,193,7,0.14);border:1px solid rgba(255,193,7,0.45);padding:8px 16px;border-radius:999px;margin-bottom:26px}.hero-eyebrow-dot{width:8px;height:8px;border-radius:50%;background:var(--accent);box-shadow:0 0 0 4px rgba(255,193,7,0.25)}@media (max-width:768px){.top-strip{display:none !important}.header-container{padding:0 15px}.logo img{max-width:160px;height:auto}}.hero-copy h1{font-size:3rem;font-weight:900;line-height:1.12;color:#ffffff}.hero-copy h1 span{color:var(--accent)}.hero-copy h1::after{content:"";display:block;width:72px;height:4px;margin:16px 0 0;border-radius:4px;background:linear-gradient(90deg,var(--accent),#ffdf5d)}.hero-sub{font-size:1.12rem;line-height:1.7;color:rgba(255,255,255,0.85);margin:1.2rem 0 1.8rem;max-width:34rem}.hero-stats{display:flex;gap:28px;margin-bottom:1.8rem}.hero-stat{display:flex;flex-direction:column}.hero-stat strong{font-family:var(--font-head);font-size:1.6rem;color:#ffffff;line-height:1.2}.hero-stat span{font-size:0.82rem;color:rgba(255,255,255,0.7)}.hero-actions{display:flex;gap:12px;flex-wrap:wrap;margin-bottom:1.6rem}.hero-btn{display:inline-flex;align-items:center;gap:8px;padding:13px 22px;border-radius:999px;font-weight:700;font-size:0.95rem;text-decoration:none;transition:transform 0.25s ease,box-shadow 0.25s ease,background-color 0.25s ease}.hero-btn svg{width:16px;height:16px}.hero-btn-call{background:linear-gradient(135deg,#FFC107,#FFB300);color:#1a1a1a;box-shadow:0 6px 18px rgba(255,179,0,0.35)}.hero-btn-call:hover{transform:translateY(-2px);box-shadow:0 10px 24px rgba(255,179,0,0.45)}.hero-btn-wa{border:1.5px solid rgba(255,255,255,0.5);color:#ffffff}.hero-btn-wa:hover{background:rgba(255,255,255,0.12);border-color:#ffffff}.hero-chips{display:flex;align-items:center;gap:8px;flex-wrap:wrap}.hero-chips-label{font-size:0.82rem;font-weight:600;color:rgba(255,255,255,0.65)}.hero-chip{background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.22);color:#ffffff;font-size:0.82rem;font-weight:600;padding:7px 14px;border-radius:999px;cursor:pointer;transition:background-color 0.25s ease,border-color 0.25s ease,color 0.25s ease}.hero-chip:hover{background:rgba(255,193,7,0.2);border-color:var(--accent)}.hero-chip.active{background:var(--accent);border-color:var(--accent);color:#1a1a1a}h1{font-size:2.5rem;margin-bottom:1rem;line-height:1.2}.hero-form-card{background:#ffffff;border-radius:20px;padding:28px 26px 24px;box-shadow:0 25px 60px rgba(0,0,0,0.35);color:var(--dark)}.hero-form-card h2{font-size:1.45rem;color:#1b4332;margin-bottom:4px}.hero-form-card>p{font-size:0.88rem;color:#666666;margin-bottom:18px}.hero-form-card .booking-form{box-shadow:none;padding:0;margin:0;max-width:none}.hero-form-note{text-align:center;font-size:0.78rem;color:#888888;margin-top:12px}@media (max-width:900px){.hero{padding:50px 16px 60px}.hero-inner{grid-template-columns:1fr;gap:32px}.hero-copy h1{font-size:2.1rem}.hero-stats{gap:18px}.hero-stat strong{font-size:1.3rem}}.booking-form{background:white;padding:2rem;border-radius:12px;box-shadow:0 10px 25px rgba(0,0,0,0.2);max-width:500px;margin:0 auto;text-align:left}.form-group{margin-bottom:1rem}label{display:block;font-weight:600;margin-bottom:0.5rem;color:var(--dark);font-size:0.9rem}input,select{width:100%;padding:12px;border:1px solid #ddd;border-radius:6px;font-size:1rem}button.cta-btn{width:100%;background:var(--accent);color:var(--dark);font-weight:700;padding:15px;border:none;border-radius:6px;font-size:0.9rem;cursor:pointer;transition:background 0.3s;text-transform:uppercase}button.cta-btn:hover{background:#ffca2c}.final-cta-section{padding:5rem 1rem;background:radial-gradient(800px 380px at 50% 0%,rgba(255,193,7,0.22),transparent 65%),linear-gradient(180deg,#fffdf6 0%,#faf4e6 100%);text-align:center}.final-cta-section .section-title p{max-width:800px;font-size:1.05rem;line-height:1.6;margin:0 auto 2rem auto;color:#444444}.final-cta-section a.cta-btn{display:inline-block;width:auto;background:var(--accent);color:var(--dark);font-weight:700;padding:15px 35px;border:none;border-radius:6px;font-size:1rem;cursor:pointer;text-decoration:none;text-transform:uppercase;transition:background 0.3s;box-shadow:0 4px 12px rgba(0,0,0,0.15)}.final-cta-section a.cta-btn:hover{background:#ffca2c}.final-cta-stars{display:inline-flex;align-items:center;gap:8px;font-size:0.88rem;font-weight:600;color:rgba(255,255,255,0.85);background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.14);padding:8px 16px;border-radius:999px;margin-bottom:18px}.final-cta-stars .stars{color:var(--accent);letter-spacing:2px}.final-cta-container p.final-cta-stars{margin-bottom:18px !important}.final-cta-container .section-kicker{background:rgba(255,193,7,0.12);border-color:rgba(255,193,7,0.55);color:#ffd54f}.final-cta-container p.section-kicker{margin-bottom:20px !important}.final-cta-buttons{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;margin-bottom:22px}.final-cta-section a.final-cta-call{display:inline-flex;align-items:center;gap:8px;background:transparent;color:#ffffff;border:1.5px solid rgba(255,255,255,0.55);box-shadow:none;text-transform:none;font-size:1rem}.final-cta-section a.final-cta-call:hover{background:rgba(255,255,255,0.12);border-color:#ffffff}.final-cta-call svg{width:16px;height:16px}.final-cta-points{display:flex;gap:18px;justify-content:center;flex-wrap:wrap;font-size:0.85rem;color:rgba(255,255,255,0.75)}.final-cta-points span{display:inline-flex;align-items:center;gap:6px}.final-cta-points .tick{color:var(--accent);font-weight:800}.quote-modal-overlay{position:fixed;inset:0;background:rgba(13,27,42,0.55);backdrop-filter:blur(3px);-webkit-backdrop-filter:blur(3px);display:flex;align-items:center;justify-content:center;padding:16px;z-index:1100;opacity:0;visibility:hidden;transition:opacity 0.3s ease,visibility 0.3s ease}.quote-modal-overlay.show{opacity:1;visibility:visible}.quote-modal-content{background:#ffffff;border-radius:20px;max-width:480px;width:100%;max-height:calc(100dvh - 40px);overflow-y:auto;padding:28px 24px 24px;position:relative;box-shadow:0 25px 60px rgba(0,0,0,0.3);transform:translateY(16px) scale(0.98);transition:transform 0.3s ease}.quote-modal-overlay.show .quote-modal-content{transform:none}.quote-modal-close{position:absolute;top:12px;right:12px;width:38px;height:38px;border:none;border-radius:50%;background:#f1f1f1;color:#333;font-size:1.4rem;line-height:1;cursor:pointer;transition:background 0.25s ease,transform 0.25s ease}.quote-modal-close:hover{background:var(--accent);transform:scale(1.05)}.quote-modal-content h2{font-size:1.5rem;color:#1b4332;margin-bottom:4px;padding-right:40px}.quote-modal-sub{font-size:0.9rem;color:#666;margin-bottom:18px}.quote-modal-content .booking-form{box-shadow:none;padding:0;margin:0;max-width:none}.trust-section{padding:3rem 1rem;background:white;text-align:center}.trust-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:2rem;max-width:1000px;margin:2rem auto 0}.trust-item h3{color:var(--primary);margin-bottom:0.5rem}.fleet-section{padding:5rem 1rem;background:linear-gradient(180deg,#f8faf8 0%,#eef3ee 100%)}.section-kicker{display:inline-block;font-size:0.78rem;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:#7a5c00;background:#FFF8E1;border:1px solid rgba(255,193,7,0.55);padding:7px 16px;border-radius:999px;margin-bottom:18px}.section-title > p.section-kicker,.section-title > p.why-kicker{margin-bottom:18px}#fleet .section-title{max-width:680px;margin:0 auto 3rem}.section-title{text-align:center;margin-bottom:3rem}.section-title h2{font-size:2rem;color:var(--primary);margin:0 10px 1rem;line-height:1.2}.section-title p{color:#333333;max-width:600px;margin:0 auto}.fleet-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:2rem;max-width:1200px;margin:0 auto}.fleet-card{background:white;border-radius:20px;overflow:hidden;border:1px solid #ececec;box-shadow:0 4px 15px rgba(0,0,0,0.08);display:flex;flex-direction:column;transition:transform 0.35s ease,box-shadow 0.35s ease,opacity 0.6s ease}.fleet-card.reveal-init{opacity:0;transform:translateY(28px)}.fleet-card.in-view{opacity:1;transform:none}.fleet-card:hover{transform:translateY(-8px);box-shadow:0 20px 40px rgba(27,67,50,0.16)}.fleet-img{aspect-ratio:3 / 2;background:linear-gradient(180deg,#f7f5f0 0%,#efede6 100%);position:relative;overflow:hidden}.fleet-img img{width:100%;height:100%;object-fit:cover;object-position:center;display:block;transition:transform 0.6s ease}.fleet-card:hover .fleet-img img{transform:scale(1.06)}.fleet-img::after{content:"";position:absolute;top:0;bottom:0;left:-80%;width:60%;background:linear-gradient(100deg,transparent,rgba(255,255,255,0.35),transparent);transform:skewX(-20deg);transition:left 0.7s ease;pointer-events:none}.fleet-card:hover .fleet-img::after{left:130%}@media (prefers-reduced-motion:reduce){.fleet-card.reveal-init{opacity:1;transform:none}.fleet-img::after{display:none}.fleet-img img{transition:none}}.fleet-badge{position:absolute;top:10px;right:10px;background:linear-gradient(135deg,#FFC107,#FFB300);color:var(--dark);padding:5px 12px;border-radius:20px;font-size:0.8rem;font-weight:bold;box-shadow:0 2px 8px rgba(0,0,0,0.25)}.fleet-details{padding:1.5rem;flex-grow:1}.fleet-details p{font-size:0.85rem;color:#222222;margin-bottom:1rem}.fleet-name{font-size:1.25rem;font-weight:700;margin-bottom:0.5rem;text-align:center}.fleet-specs{display:flex;gap:8px;flex-wrap:wrap;font-size:0.82rem;color:#555;margin-bottom:1rem;justify-content:center}.fleet-specs span{display:inline-flex;align-items:center;gap:4px;background:#f1f8f1;color:#2e7d32;font-weight:600;padding:6px 12px;border-radius:999px}.fleet-price{font-size:1.15rem;color:var(--primary);font-weight:800;margin-bottom:1rem;text-align:center;background:#FFF8E1;border-radius:12px;padding:10px}.fleet-price small{font-size:0.8rem;color:#222222;font-weight:normal}.fleet-cta{margin:auto 1.5rem 1.5rem;padding:0.95rem;background:linear-gradient(135deg,#FFC107,#FFB300);color:#1a1a1a;text-align:center;text-decoration:none;border-radius:12px;font-weight:700;box-shadow:0 4px 12px rgba(255,179,0,0.3);transition:transform 0.25s ease,box-shadow 0.25s ease,filter 0.25s ease}.fleet-cta::after{content:"→";display:inline-block;margin-left:6px;transition:transform 0.25s ease}.fleet-cta:hover{transform:translateY(-2px);filter:brightness(1.04);box-shadow:0 8px 18px rgba(255,179,0,0.4)}.fleet-cta:hover::after{transform:translateX(4px)}.calculator-section{padding:4rem 1rem;background:white}.calc-wrapper{max-width:600px;margin:0 auto;background:#f9f9f9;padding:2rem;border-radius:12px;border:1px solid #eee}.calc-result{margin-top:1.5rem;padding:1rem;background:#e8f5e9;border-radius:8px;color:var(--primary);font-weight:700;display:none;text-align:center}.routes-section{padding:5rem 1rem;background:#ffffff}#routes .section-title{max-width:680px;margin:0 auto 3rem}.routes-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;max-width:1100px;margin:0 auto}.route-card{background:#ffffff;border:1px solid #ececec;border-radius:18px;padding:24px 22px;box-shadow:0 4px 14px rgba(0,0,0,0.05);display:flex;flex-direction:column;gap:10px;transition:transform 0.3s ease,box-shadow 0.3s ease,border-color 0.3s ease}.route-card:hover{transform:translateY(-5px);box-shadow:0 16px 32px rgba(27,67,50,0.12);border-color:rgba(255,193,7,0.6)}.route-path{font-family:var(--font-head);font-size:1.25rem;font-weight:700;color:#1b4332;display:flex;align-items:center;gap:10px;flex-wrap:wrap}.route-arrow{display:inline-flex;align-items:center;justify-content:center;width:30px;height:30px;border-radius:50%;background:var(--accent);color:#1a1a1a;font-size:1rem;font-weight:800;flex-shrink:0}.route-meta{font-size:0.85rem;color:#666666;margin:0}.route-btn{margin-top:6px;padding:12px;background:transparent;color:#1a1a1a;border:1.5px solid var(--accent);border-radius:12px;font-weight:700;font-size:0.95rem;cursor:pointer;transition:background-color 0.25s ease,transform 0.25s ease,box-shadow 0.25s ease}.route-btn:hover{background:linear-gradient(135deg,#FFC107,#FFB300);transform:translateY(-2px);box-shadow:0 6px 16px rgba(255,179,0,0.35)}@media (max-width:900px){.routes-grid{grid-template-columns:repeat(2,1fr)}}@media (max-width:600px){.routes-grid{grid-template-columns:1fr}.routes-section{padding:4rem 1rem}}.faq-section{padding:5rem 1rem;background:#ffffff}#faq .section-title{max-width:680px;margin:0 auto 2.5rem}.faq-container{max-width:820px;margin:0 auto;display:flex;flex-direction:column;gap:14px}.faq-item{background:#ffffff;border:1px solid #e8e8e8;border-radius:16px;overflow:hidden;transition:border-color 0.3s ease,box-shadow 0.3s ease}.faq-item:hover{border-color:#cfcfcf}.faq-item.active{border-color:rgba(255,193,7,0.65);box-shadow:0 10px 26px rgba(27,67,50,0.1)}.faq-question{padding:1.1rem 1.25rem;cursor:pointer;font-weight:600;font-size:1rem;color:var(--dark);display:flex;justify-content:space-between;align-items:center;gap:14px;background:#ffffff;transition:color 0.25s ease,background-color 0.25s ease;user-select:none}.faq-question:hover{background:#fafdf9}.faq-item.active .faq-question{color:#1b4332}.faq-question::after{content:'+';flex-shrink:0;width:32px;height:32px;display:inline-flex;align-items:center;justify-content:center;font-size:1.3rem;font-weight:400;line-height:1;color:var(--primary);background:#e8f5e9;border-radius:50%;transition:transform 0.35s ease,background-color 0.3s ease,color 0.3s ease}.faq-item.active .faq-question::after{content:'+';transform:rotate(45deg);background:var(--accent);color:#1a1a1a}.faq-answer{max-height:0;overflow:hidden;transition:max-height 0.4s ease,padding 0.3s ease;padding:0 1.25rem;background:#ffffff;color:#555555;line-height:1.7;font-size:0.95rem}.faq-item.active .faq-answer{padding:0 1.25rem 1.25rem;max-height:500px}#why-us{background:#ffffff;padding:80px 20px}#why-us .section-title{max-width:720px;margin:0 auto 3rem}.why-kicker{display:inline-block;font-size:0.78rem;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:#7a5c00;background:#FFF8E1;border:1px solid rgba(255,193,7,0.55);padding:7px 16px;border-radius:999px;margin-bottom:18px}#why-us .why-us-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;max-width:1200px;margin:0 auto}#why-us .why-card{position:relative;text-align:left;margin:0;padding:28px 24px;background:#ffffff;border:1px solid #eeeeee;border-radius:18px;box-shadow:0 4px 14px rgba(0,0,0,0.05);overflow:hidden;transition:transform 0.3s ease,box-shadow 0.3s ease}#why-us .why-card::before{content:"";position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg,var(--accent),#ffdf5d);transform:scaleX(0);transform-origin:left;transition:transform 0.35s ease}#why-us .why-card:hover{transform:translateY(-6px);box-shadow:0 16px 32px rgba(0,0,0,0.1)}#why-us .why-card:hover::before{transform:scaleX(1)}.why-card-top{display:flex;align-items:flex-start;justify-content:space-between;margin-bottom:16px}.why-icon-tile{width:52px;height:52px;border-radius:14px;background:#e8f5e9;display:inline-flex;align-items:center;justify-content:center;transition:background-color 0.3s ease,transform 0.3s ease}.why-icon-tile svg{width:26px;height:26px;color:var(--primary);transition:color 0.3s ease}#why-us .why-card:hover .why-icon-tile{background:var(--accent);transform:scale(1.05)}#why-us .why-card:hover .why-icon-tile svg{color:#1a1a1a}.why-num{font-family:var(--font-head);font-size:0.8rem;font-weight:800;letter-spacing:1px;color:#1a1a1a;background:#FFF3C4;border-radius:999px;padding:5px 11px}#why-us .why-card h3{font-size:1.15rem;color:#1b4332;margin-bottom:8px}#why-us .why-card p{font-size:0.92rem;color:#555555;line-height:1.65}@media (max-width:1000px){#why-us .why-us-grid{grid-template-columns:repeat(2,1fr)}}@media (max-width:600px){#why-us{padding:60px 16px}#why-us .why-us-grid{grid-template-columns:1fr}}@media (max-width:768px){h1{font-size:1.8rem}.hero{min-height:85vh}.booking-form{padding:1.5rem}}.top-strip{background:#1b4332;color:#ffffff;font-size:0.8rem}.top-strip-inner{max-width:1200px;margin:0 auto;padding:6px 20px;display:flex;justify-content:flex-end;align-items:center;gap:20px}.top-strip a{color:#ffffff;text-decoration:none;font-weight:600;display:inline-flex;align-items:center;gap:6px}.top-strip a:hover{color:var(--accent)}.top-strip::after{content:"";display:block;height:3px;background:linear-gradient(90deg,var(--accent),#43a047)}.site-header{background:rgba(255,255,255,0.97);box-shadow:0 2px 10px rgba(0,0,0,0.1);position:sticky;top:0;z-index:1000;padding:10px 0}.header-container{display:flex;justify-content:space-between;align-items:center;gap:16px;max-width:1200px;margin:0 auto;padding:0px 20px}.logo img{width:180px;height:80px;max-width:100%;object-fit:contain;display:block}.main-nav{display:flex;align-items:center;gap:22px}.main-nav a{color:var(--dark);text-decoration:none;font-size:0.95rem;font-weight:600;padding:6px 2px;border-bottom:2px solid transparent;transition:color 0.3s,border-color 0.3s;white-space:nowrap}.main-nav a:hover,.main-nav a.active{color:var(--primary);border-bottom-color:var(--accent)}.header-actions{display:flex;align-items:center;gap:12px}.nav-cta{background:linear-gradient(135deg,#FFC107,#FFB300);color:#1a1a1a !important;padding:10px 20px !important;border-radius:999px;border-bottom:none !important;text-decoration:none;font-size:0.95rem;font-weight:700;white-space:nowrap;box-shadow:0 4px 12px rgba(255,179,0,0.35);transition:transform 0.25s ease,box-shadow 0.25s ease,filter 0.25s ease}.nav-cta:hover{filter:brightness(1.05);transform:translateY(-1px);box-shadow:0 6px 16px rgba(255,179,0,0.45);color:#1a1a1a !important}.nav-toggle{display:none;width:46px;height:46px;border:none;border-radius:50%;background:linear-gradient(135deg,#2E7D32,#43a047);box-shadow:0 4px 12px rgba(46,125,50,0.35);cursor:pointer;align-items:center;justify-content:center;flex-direction:column;gap:5px;padding:0;transition:transform 0.25s ease,box-shadow 0.25s ease}.nav-toggle:hover{transform:scale(1.07);box-shadow:0 6px 18px rgba(46,125,50,0.45)}.nav-toggle:active{transform:scale(0.95)}.nav-toggle span{display:block;width:20px;height:2.4px;background:#ffffff;border-radius:3px;transition:transform 0.35s cubic-bezier(0.68,-0.4,0.27,1.4),opacity 0.2s ease}.nav-toggle[aria-expanded="true"]{box-shadow:0 0 0 6px rgba(255,193,7,0.3)}.nav-toggle[aria-expanded="true"] span:nth-child(1){transform:translateY(7.4px) rotate(45deg)}.nav-toggle[aria-expanded="true"] span:nth-child(2){opacity:0;transform:scaleX(0)}.nav-toggle[aria-expanded="true"] span:nth-child(3){transform:translateY(-7.4px) rotate(-45deg)}.site-header{transition:box-shadow 0.3s ease,background-color 0.3s ease,padding 0.3s ease}.site-header.scrolled{background:rgba(255,255,255,0.99);box-shadow:0 6px 24px rgba(0,0,0,0.14);padding:6px 0}.main-nav a{display:inline-flex;align-items:center;gap:7px}.main-nav a .nav-ico{width:15px;height:15px;flex-shrink:0;opacity:0.7}.main-nav a:hover .nav-ico,.main-nav a.active .nav-ico{opacity:1}.nav-backdrop{position:fixed;inset:0;background:rgba(13,27,42,0.45);backdrop-filter:blur(3px);-webkit-backdrop-filter:blur(3px);opacity:0;visibility:hidden;transition:opacity 0.3s ease,visibility 0.3s ease;z-index:999}.nav-backdrop.show{opacity:1;visibility:visible}@media (min-width:901px){.nav-backdrop{display:none}}.feat-ico{width:16px;height:16px;margin-right:5px;color:#2E7D32;vertical-align:-3px;flex-shrink:0}section[id]{scroll-margin-top:90px}.header-actions .nav-cta-desktop{display:inline-block}.mobile-menu-label,.main-nav .nav-cta-menu,.main-nav .mobile-menu-call{display:none}@media (max-width:900px){.nav-toggle{display:inline-flex}.main-nav{position:absolute;top:calc(100% + 8px);left:12px;right:12px;background:#ffffff;flex-direction:column;align-items:stretch;gap:4px;padding:10px 12px 16px;box-shadow:0 20px 45px rgba(0,0,0,0.2);border:1px solid #eee;border-radius:20px;opacity:0;visibility:hidden;transform:translateY(-12px) scale(0.98);transform-origin:top center;transition:opacity 0.28s ease,transform 0.28s ease,visibility 0.28s;max-height:calc(100dvh - 110px);overflow-y:auto}.main-nav.open{opacity:1;visibility:visible;transform:translateY(0) scale(1)}.main-nav.open a{animation:navLinkIn 0.4s cubic-bezier(0.2,0.7,0.3,1) both}.main-nav.open a:nth-of-type(1){animation-delay:0.03s}.main-nav.open a:nth-of-type(2){animation-delay:0.08s}.main-nav.open a:nth-of-type(3){animation-delay:0.13s}.main-nav.open a:nth-of-type(4){animation-delay:0.18s}.main-nav.open a:nth-of-type(5){animation-delay:0.23s}.main-nav.open a:nth-of-type(6){animation-delay:0.28s}.main-nav.open a:nth-of-type(7){animation-delay:0.33s}.main-nav.open a:nth-of-type(8){animation-delay:0.38s}.main-nav.open a:nth-of-type(9){animation-delay:0.43s}@keyframes navLinkIn{from{opacity:0;transform:translateX(16px)}to{opacity:1;transform:translateX(0)}}.main-nav a{position:relative;display:flex;align-items:center;gap:12px;padding:10px 12px 10px 18px;border-bottom:none;border-radius:14px;font-size:1rem;transition:background-color 0.25s ease;overflow:hidden}.main-nav a:not(.nav-cta-menu):not(.mobile-menu-call)::before{content:"";position:absolute;left:8px;top:10px;bottom:10px;width:3px;border-radius:3px;background:var(--accent);transform:scaleY(0);transition:transform 0.25s ease}.main-nav a.active:not(.nav-cta-menu):not(.mobile-menu-call)::before{transform:scaleY(1)}.main-nav a:hover{border-bottom-color:transparent;background:#f1f8f1}.main-nav a.active{border-bottom-color:transparent;background:#FFF8E1}.main-nav a:not(.nav-cta-menu):not(.mobile-menu-call)::after{content:"›";margin-left:auto;color:#bdbdbd;font-size:1.4rem;line-height:1;transition:transform 0.25s ease,color 0.25s ease}.main-nav a:not(.nav-cta-menu):not(.mobile-menu-call):hover::after{transform:translateX(4px);color:var(--primary)}.main-nav a.active:not(.nav-cta-menu):not(.mobile-menu-call)::after{color:var(--accent)}.main-nav a .nav-ico{width:38px;height:38px;padding:10px;box-sizing:border-box;background:#e8f5e9;border-radius:12px;opacity:1;transition:background-color 0.25s ease,color 0.25s ease,transform 0.25s ease}.main-nav a:hover .nav-ico{background:var(--primary);color:#ffffff;transform:scale(1.05)}.main-nav a.active .nav-ico{background:var(--accent);color:#1a1a1a}.mobile-menu-label{display:block;font-size:0.72rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:#9e9e9e;padding:10px 12px 2px}.main-nav .nav-cta-menu{display:block;text-align:center;margin-top:12px;padding:14px 18px !important;font-size:1rem}.main-nav a.nav-cta-menu:hover{background:linear-gradient(135deg,#FFB300,#FFA000)}.main-nav .mobile-menu-call{display:flex;align-items:center;justify-content:center;gap:8px;padding:12px 4px 6px;color:var(--primary);font-weight:700;background:none !important;box-shadow:none !important}.main-nav a.mobile-menu-call:hover{background:none}.main-nav .mobile-menu-call .nav-ico{width:16px;height:16px;padding:0;background:none;border-radius:0}.main-nav a:last-child{border-bottom:none}.nav-cta{text-align:center;margin-top:8px}.header-actions .nav-cta{display:none}}@media (min-width:901px){.main-nav .nav-cta{display:none}}.header-contact{display:flex;gap:20px;align-items:center}.header-contact a{color:var(--dark);text-decoration:none;font-size:0.95rem;font-weight:600;display:flex;align-items:center;gap:6px;transition:color 0.3s}.header-contact a:hover{color:var(--primary)}.site-footer{background:#1a1a1a;color:#d1d1d1;text-align:center;padding:2rem 1rem;font-size:0.9rem;border-top:4px solid var(--accent)}.tours-section{padding:80px 20px;background:linear-gradient(180deg,#fffdf6 0%,#f9f9f9 100%)}#tours .section-title{max-width:680px;margin:0 auto 3rem}.tours-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(350px,1fr));gap:30px;max-width:1200px;margin:0 auto;padding:0 20px}.tour-card{background:#ffffff;border-radius:20px;overflow:hidden;border:1px solid #ececec;box-shadow:0 4px 15px rgba(0,0,0,0.08);transition:transform 0.35s ease,box-shadow 0.35s ease,opacity 0.6s ease;display:flex;flex-direction:column}.tour-card.reveal-init{opacity:0;transform:translateY(28px)}.tour-card.in-view{opacity:1;transform:none}.tour-card:hover{transform:translateY(-8px);box-shadow:0 20px 40px rgba(27,67,50,0.16)}.tour-media{position:relative;overflow:hidden;aspect-ratio:16 / 10;background:#e8e8e8}.tour-media img.tour-image{width:100%;height:100%;object-fit:cover;transition:transform 0.6s ease}.tour-card:hover .tour-media img.tour-image{transform:scale(1.06)}.tour-media::after{content:"";position:absolute;top:0;bottom:0;left:-80%;width:60%;background:linear-gradient(100deg,transparent,rgba(255,255,255,0.35),transparent);transform:skewX(-20deg);transition:left 0.7s ease;pointer-events:none}.tour-card:hover .tour-media::after{left:130%}.tour-image{width:100%;height:220px;object-fit:cover;position:relative}.tour-badge{position:absolute;top:15px;right:15px;background:linear-gradient(135deg,#FFC107,#FFB300);color:var(--dark);padding:6px 12px;border-radius:20px;font-size:0.8rem;font-weight:700;box-shadow:0 2px 8px rgba(0,0,0,0.25)}.tour-content{padding:25px;flex-grow:1;display:flex;flex-direction:column}.tour-title{font-size:1.4rem;margin:0 0 15px;color:#1b4332;font-weight:700}.tour-meta{display:flex;gap:15px;margin-bottom:15px;flex-wrap:wrap}.meta-item{display:inline-flex;align-items:center;gap:6px;font-size:0.82rem;color:#2e7d32;font-weight:600;background:#f1f8f1;padding:6px 12px;border-radius:999px}.meta-item svg{fill:var(--primary) !important}.places-list{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:15px}.place-tag{background:#e8f5e9;color:#2e7d32;padding:4px 10px;border-radius:6px;font-size:0.85rem;font-weight:500}.tour-desc{font-size:0.95rem;color:#666;line-height:1.6;margin-bottom:20px;flex-grow:1}.tour-price{font-size:1.1rem;font-weight:800;color:var(--primary);background:#FFF8E1;border-radius:12px;padding:10px 14px;margin-bottom:20px}.tour-cta{display:inline-block;width:100%;text-align:center;padding:13px;background:linear-gradient(135deg,#FFC107,#FFB300);color:#1a1a1a;text-decoration:none;border-radius:12px;font-weight:700;box-shadow:0 4px 12px rgba(255,179,0,0.3);transition:transform 0.25s ease,box-shadow 0.25s ease,filter 0.25s ease;cursor:pointer;border:none;font-size:1rem}.tour-cta::after{content:"→";display:inline-block;margin-left:6px;transition:transform 0.25s ease}.tour-cta:hover{transform:translateY(-2px);filter:brightness(1.04);box-shadow:0 8px 18px rgba(255,179,0,0.4)}.tour-cta:hover::after{transform:translateX(4px)}@media (prefers-reduced-motion:reduce){.tour-card.reveal-init{opacity:1;transform:none}.tour-media::after{display:none}.tour-media img.tour-image{transition:none}}.tour-content ul{list-style:none;padding:0;margin:0 0 20px 0}.tour-content ul li{display:flex;align-items:flex-start;gap:10px;line-height:1.5;color:#444;font-size:0.95rem}.tour-content ul li i.fa-circle-check{color:#2E7D32;font-size:1.2rem;margin-top:2px;flex-shrink:0}.calc-modal-overlay{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.65);z-index:9999;display:flex;align-items:center;justify-content:center;padding:20px;backdrop-filter:blur(4px)}.calc-modal-content{background:white;width:100%;max-width:520px;padding:30px;border-radius:16px;box-shadow:0 20px 40px rgba(0,0,0,0.3);position:relative;max-height:90vh;overflow-y:auto}.calc-modal-close{position:absolute;top:15px;right:20px;background:transparent;border:none;font-size:2rem;cursor:pointer;color:#666;line-height:1;transition:color 0.2s}.calc-modal-close:hover{color:#000}@media (max-width:600px){.tours-grid{grid-template-columns:1fr;padding:0 15px}.tour-meta{justify-content:flex-start}}.testimonial-section{padding:4rem 1.5rem 5rem;background:#ffffff}.testimonial-slider-wrapper{max-width:800px;margin:4.5rem auto 1.5rem auto;position:relative;display:flex;align-items:center;padding:0 15px}.testimonial-slider{width:100%;overflow:visible;position:relative;min-height:320px}.testimonial-card{background:#ffffff;border-radius:16px;box-shadow:0 10px 30px rgba(0,0,0,0.12);padding:3.2rem 2.5rem 2.5rem;position:absolute;top:0;left:0;width:100%;opacity:0;visibility:hidden;transition:opacity 0.5s ease,transform 0.5s ease;text-align:center;border-top:4px solid var(--primary);box-sizing:border-box;transform:scale(0.95);z-index:1}.testimonial-card.active{opacity:1;visibility:visible;transform:scale(1);position:relative;z-index:2;box-shadow:0 12px 35px rgba(0,0,0,0.15)}.testimonial-card::before{content:"\201C";position:absolute;top:6px;left:22px;font-family:Georgia,serif;font-size:5rem;line-height:1;color:rgba(255,193,7,0.28);pointer-events:none}.testimonial-arrow{position:absolute;top:50%;transform:translateY(-50%);background:var(--primary);color:white;border:none;width:45px;height:45px;border-radius:50%;cursor:pointer;font-size:1.2rem;display:flex;align-items:center;justify-content:center;z-index:10;box-shadow:0 4px 10px rgba(0,0,0,0.15);transition:background 0.3s,transform 0.2s}.testimonial-arrow:hover{background:#1b4332;transform:translateY(-50%) scale(1.08)}.testimonial-arrow.prev{left:-10px}.testimonial-arrow.next{right:-10px}.testimonial-dots{display:flex;justify-content:center;gap:10px;margin-top:1.5rem}.testimonial-dots .dot{width:12px;height:12px;border-radius:50%;background:#ccc;cursor:pointer;transition:background 0.3s,transform 0.2s}.testimonial-dots .dot.active{background:var(--accent);width:28px;border-radius:999px}.testimonial-avatar{width:75px;height:75px;border-radius:50%;background:#e8e8e8;position:absolute;top:-37.5px;left:50%;transform:translateX(-50%);border:4px solid var(--accent);box-shadow:0 4px 10px rgba(0,0,0,0.15);overflow:hidden}.testimonial-avatar img{width:100%;height:100%;object-fit:cover}.testimonial-stars{color:#FFC107;font-size:1.1rem;margin-bottom:1rem;letter-spacing:2px}.testimonial-text{font-size:0.95rem;color:#555;line-height:1.6;margin-bottom:1.5rem;font-style:italic}.testimonial-name{font-size:1.1rem;font-weight:700;color:var(--dark);margin-bottom:0.2rem}.testimonial-role{font-size:0.85rem;color:#222222}.sticky-action-bar{display:none}@media (max-width:768px){.site-footer{padding-bottom:104px}.sticky-action-bar{display:block;position:fixed;left:50%;transform:translateX(-50%);width:min(62%,330px);bottom:calc(12px + env(safe-area-inset-bottom));z-index:900}.sticky-quote{display:flex;align-items:center;gap:10px;width:100%;text-align:left;font-family:inherit;background:rgba(255,255,255,0.97);backdrop-filter:blur(8px);-webkit-backdrop-filter:blur(8px);border:1px solid #ececec;border-radius:20px;box-shadow:0 12px 30px rgba(0,0,0,0.18);padding:10px 12px;cursor:pointer}.sticky-quote-icon{width:40px;height:40px;flex-shrink:0;border-radius:13px;background:linear-gradient(135deg,#FFC107,#FFB300);display:inline-flex;align-items:center;justify-content:center}.sticky-quote-icon svg{width:20px;height:20px;color:#1a1a1a}.sticky-quote-text{flex:1;display:flex;flex-direction:column;gap:0;color:var(--dark);min-width:0}.sticky-quote-text strong{font-size:0.85rem;white-space:nowrap}.sticky-quote-text small{font-size:0.7rem;color:#666666;white-space:nowrap}.sticky-quote-arrow{width:34px;height:34px;flex-shrink:0;border-radius:50%;background:#1b4332;color:#ffffff;display:inline-flex;align-items:center;justify-content:center;font-size:1rem;font-weight:800}.sticky-quote-close{position:absolute;top:-10px;right:-6px;width:26px;height:26px;border-radius:50%;border:1px solid #e0e0e0;background:#ffffff;color:#888888;font-size:0.95rem;line-height:1;cursor:pointer;box-shadow:0 2px 8px rgba(0,0,0,0.15)}.float-contact-buttons{left:12px;right:auto;bottom:100px}#backToTopBtn{bottom:12px;right:12px}}.float-contact-buttons{position:fixed;left:20px;bottom:30px;z-index:99;display:flex;flex-direction:column;gap:15px}.float-contact-btn{display:flex;align-items:center;justify-content:center;width:55px;height:55px;border-radius:50%;color:white;font-size:1.6rem;text-decoration:none;box-shadow:0 4px 15px rgba(0,0,0,0.35);transition:transform 0.3s ease,box-shadow 0.3s ease;position:relative}.float-contact-btn.whatsapp{background-color:#25D366}.float-contact-btn.whatsapp::before{content:"";position:absolute;inset:0;border-radius:50%;border:2px solid #25D366;animation:floatPing 2.6s ease-out 3;pointer-events:none}@keyframes floatPing{0%{transform:scale(1);opacity:0.8}100%{transform:scale(1.55);opacity:0}}.float-contact-btn.phone{background:linear-gradient(135deg,#FFC107,#FFB300);color:#1a1a1a}.float-contact-btn:hover{transform:translateY(-3px) scale(1.06);box-shadow:0 8px 22px rgba(0,0,0,0.45)}.float-contact-btn .tooltip{visibility:hidden;width:110px;background-color:#ffffff;color:#030303;text-align:center;border-radius:10px;padding:5px 9px;position:absolute;left:100%;top:50%;transform:translateY(-50%) translateX(10px);opacity:0;transition:all 0.3s ease;white-space:nowrap;z-index:1000;font-size:14px;font-weight:600;box-shadow:0 2px 8px rgba(0,0,0,0.3)}.float-contact-btn .tooltip::after{content:"";position:absolute;top:50%;right:100%;margin-top:-5px;border-width:5px;border-style:solid;border-color:transparent #fff transparent transparent}.float-contact-btn:hover .tooltip{visibility:visible;opacity:1;transform:translateY(-50%) translateX(0)}@media (max-width:768px){.float-contact-btn{width:50px;height:50px;font-size:20px}.float-contact-btn .tooltip{display:none}}#backToTopBtn{display:flex;position:fixed;bottom:20px;right:20px;z-index:99;border:none;outline:none;background:linear-gradient(135deg,#2E7D32,#1b5e20);color:white;cursor:pointer;width:46px;height:46px;padding:0;align-items:center;justify-content:center;border-radius:50%;font-size:18px;box-shadow:0 4px 12px rgba(27,67,50,0.4);opacity:0;visibility:hidden;pointer-events:none;transform:translateY(10px);transition:opacity 0.3s ease,visibility 0.3s ease,transform 0.3s ease,box-shadow 0.3s ease}#backToTopBtn.show{opacity:1;visibility:visible;pointer-events:auto;transform:none}#backToTopBtn:hover{transform:translateY(-3px);box-shadow:0 8px 18px rgba(27,67,50,0.5)}.trust-section{background:linear-gradient(180deg,rgba(255,255,255,0.03) 0%,transparent 100%);border-top:1px solid rgba(255,255,255,0.1);border-bottom:1px solid rgba(255,255,255,0.1);padding:40px 0;margin:0 0 30px 0}.trust-container{max-width:1200px;margin:0 auto;padding:0 20px;display:grid;grid-template-columns:repeat(auto-fit,minmax(170px,1fr));gap:20px;place-items:center}.trust-card{display:flex;flex-direction:column;align-items:center;justify-content:center;gap:12px;padding:24px 16px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.1);border-radius:12px;text-align:center;transition:all 0.3s cubic-bezier(0.4,0,0.2,1);cursor:default;min-height:140px;justify-content:space-between}.trust-card:hover{background:rgba(255,255,255,0.08);border-color:rgba(255,255,255,0.2);transform:translateY(-4px);box-shadow:0 8px 24px rgba(0,0,0,0.15)}.trust-card:active{transform:translateY(-2px)}.trust-card__icon{font-size:40px;line-height:1;display:flex;align-items:center;justify-content:center;width:60px;height:60px;background:rgba(255,255,255,0.05);border-radius:50%;transition:transform 0.3s ease}.trust-card:hover .trust-card__icon{transform:scale(1.1)}.trust-card__content{display:flex;flex-direction:column;gap:4px}.trust-card__title{margin:0;font-size:15px;font-weight:600;color:rgba(255,255,255,0.95);line-height:1.3}.trust-card__subtitle{margin:0;font-size:12px;color:rgba(255,255,255,0.65);line-height:1.3;letter-spacing:0.3px}.footer-content{text-align:center;padding:20px 20px;max-width:1200px;margin:0 auto}.footer-content p{margin:8px 0;font-size:13px;color:rgba(255,255,255,0.7);line-height:1.6}.footer-content a{color:rgba(255,255,255,0.85);text-decoration:none;transition:color 0.3s ease}.footer-content a:hover{color:var(--accent);text-decoration:underline}.trust-card__icon svg{width:26px;height:26px;color:var(--accent)}.footer-grid{max-width:1200px;margin:0 auto;padding:40px 20px 8px;display:grid;grid-template-columns:1.2fr 1fr 1fr;gap:32px;text-align:left}.footer-brand{font-family:var(--font-head);font-size:1.25rem;font-weight:800;color:#ffffff;margin-bottom:10px}.footer-brand span{color:var(--accent)}.footer-col p{font-size:0.88rem;color:rgba(255,255,255,0.65);line-height:1.7;margin:0}.footer-heading{font-size:0.8rem;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:var(--accent);margin-bottom:14px}.footer-links{list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:10px}.footer-links a{color:rgba(255,255,255,0.7);text-decoration:none;font-size:0.9rem;transition:color 0.25s ease,padding-left 0.25s ease}.footer-links a:hover{color:var(--accent);padding-left:4px}.footer-contact{list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:10px}.footer-contact a{display:inline-flex;align-items:center;gap:8px;color:rgba(255,255,255,0.7);text-decoration:none;font-size:0.9rem;transition:color 0.25s ease}.footer-contact a:hover{color:var(--accent)}.footer-contact svg{width:15px;height:15px;flex-shrink:0}.footer-bottom{max-width:1200px;margin:24px auto 0;padding:18px 20px 8px;border-top:1px solid rgba(255,255,255,0.12);display:flex;justify-content:space-between;align-items:center;gap:12px;flex-wrap:wrap}.footer-bottom p{margin:0;font-size:13px;color:rgba(255,255,255,0.55)}.footer-bottom a{color:rgba(255,255,255,0.85);text-decoration:none;transition:color 0.3s ease}.footer-bottom a:hover{color:var(--accent);text-decoration:underline}@media (max-width:768px){.footer-grid{grid-template-columns:1fr;gap:26px;padding:32px 20px 4px}.footer-bottom{flex-direction:column;text-align:center}}.final-cta-container{max-width:1100px;margin:0 auto;background:linear-gradient(135deg,#1b5e20 0%,#2e7d32 50%,#388e3c 100%);color:#ffffff;padding:4rem 2.5rem;border-radius:20px;border:1px solid rgba(255,193,7,0.45);box-shadow:0 15px 40px rgba(46,125,50,0.3),0 0 0 4px rgba(255,193,7,0.12);text-align:center}.final-cta-container h2{color:#ffffff;margin-bottom:1.2rem;line-height:1.3;font-size:2.2rem}.final-cta-container p{color:#f1f8e9 !important;font-size:1.1rem;line-height:1.7;max-width:900px;margin:0 auto 2.5rem auto !important}@media (max-width:768px){.trust-container{grid-template-columns:repeat(auto-fit,minmax(150px,1fr));gap:16px}.trust-card{padding:20px 12px;min-height:130px}.trust-card__icon{font-size:32px;width:52px;height:52px}.trust-card__title{font-size:14px}.trust-card__subtitle{font-size:11px}.trust-section{padding:30px 0;margin:0 0 20px 0}}@media (max-width:480px){.trust-container{grid-template-columns:repeat(2,1fr);gap:12px}.trust-card{padding:16px 10px;min-height:120px;gap:10px}.trust-card__icon{font-size:28px;width:48px;height:48px}.trust-card__title{font-size:13px;font-weight:600}.trust-card__subtitle{font-size:10px}.trust-section{padding:24px 0;margin:0 0 16px 0}.footer-content p{font-size:12px}}@media (prefers-color-scheme:dark){.trust-card{background:rgba(255,255,255,0.04);border-color:rgba(255,255,255,0.1)}.trust-card:hover{background:rgba(255,255,255,0.08);border-color:rgba(255,255,255,0.2)}.trust-card__icon{background:rgba(255,255,255,0.05)}}@keyframes bouncePulse{0%,100%{transform:translateY(0) scale(1)}50%{transform:translateY(0) scale(1.15)}}</style>
</head>

<body>
    <!-- TOP UTILITY STRIP (desktop only) -->
    <div class="top-strip">
        <div class="top-strip-inner">
            <a href="tel:+919317324669"><svg
                    style="width:12px;height:12px;fill:currentColor;vertical-align:middle;"
                    viewBox="0 0 512 512">
                    <path
                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 333.4 178.6 277.7 144 207.3L193.3 167c13.7-11.1 18.4-30 11.6-46.3l-40-96z" />
                </svg> +91 93173 24669</a>
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
                <a href="#routes"><svg class="nav-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="6" cy="19" r="2.2" />
                        <circle cx="18" cy="5" r="2.2" />
                        <path d="M8.2 19H15a3 3 0 0 0 0-6H9a3 3 0 0 1 0-6h4.8" stroke-dasharray="2.5 2.5" />
                    </svg>Routes</a>
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
                <a href="#taxiForm" class="nav-cta nav-cta-menu">Book Your Taxi Now</a>
                <a href="tel:+919317324669" class="mobile-menu-call"><svg class="nav-ico" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <path
                            d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.4 2.1L8.1 9.7a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.4c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.9 2z" />
                    </svg>+91 93173 24669</a>
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
            <img class="hero-bg" src="/Images/hero-bg.jpg" alt="Himalayan mountains in Himachal Pradesh"
                fetchpriority="high" loading="eager">
            <div class="hero-overlay" aria-hidden="true"></div>
            <div class="hero-inner">
                <div class="hero-copy">
                    <p class="hero-eyebrow"><span class="hero-eyebrow-dot"></span>Trusted Himachal Taxi Service ·
                        4.8★ Rated</p>
                    <h1>Himachal Taxi Service for <span>Transfers, Sightseeing &amp; Tours</span></h1>
                    <p class="hero-sub">
                        Himachal Cabs Online is a local taxi service for private travel across Himachal Pradesh. Book
                        one-way transfers, sightseeing cabs or multi-day taxi trips with experienced local drivers and
                        choose from sedans, SUVs and larger vehicles for your journey.
                    </p>
                    <div class="hero-stats">
                        <div class="hero-stat"><strong>5,000+</strong><span>Happy Travelers</span></div>
                        <div class="hero-stat"><strong>8+ Years</strong><span>Hill Driving Experience</span></div>
                        <div class="hero-stat"><strong>24/7</strong><span>On-trip Support</span></div>
                    </div>
                    <div class="hero-actions">
                        <a class="hero-btn hero-btn-call" href="tel:+919317324669"><svg viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path
                                    d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.4 2.1L8.1 9.7a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.4c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.9 2z" />
                            </svg>Call +91 93173 24669</a>
                        <a class="hero-btn hero-btn-wa" href="https://wa.me/919317324669" target="_blank"
                            rel="noopener"><svg viewBox="0 0 448 512" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.8 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                            </svg>WhatsApp Us</a>
                    </div>
                    <div class="hero-chips">
                        <span class="hero-chips-label">Popular:</span>
                        <button type="button" class="hero-chip" data-dest="Shimla">Shimla</button>
                        <button type="button" class="hero-chip" data-dest="Manali">Manali</button>
                        <button type="button" class="hero-chip" data-dest="Dharamshala">Dharamshala</button>
                        <button type="button" class="hero-chip" data-dest="Dalhousie">Dalhousie</button>
                        <button type="button" class="hero-chip" data-dest="Kasol">Kasol</button>
                        <button type="button" class="hero-chip" data-dest="Spiti">Spiti</button>
                    </div>
                </div>
                <div class="hero-form-card">
                    <h2>Get Your Free Quote</h2>
                    <p>Transparent pricing · No hidden charges</p>
                    <form id="taxiForm" class="booking-form" action="api/submit.php" method="POST">
                        <input type="hidden" name="bot-field">

                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" placeholder="Your Name" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="Your Phone Number (10-12 digits)"
                                inputmode="numeric" pattern="[0-9]{10,12}" minlength="10" maxlength="12"
                                title="Enter 10-12 digits" required>
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
                                <option value="Not Sure">Not Sure</option>
                            </select>
                        </div>

                        <button type="submit" class="cta-btn" id="submitBtn">Get Free Quote Now</button>
                    </form>
                    <p class="hero-form-note">Your details are safe with us and used only for your tour planning.
                    </p>
                </div>
            </div>
        </header>

        <!-- WHY CHOOSE US -->
        <section class="trust-section" id="why-us">
            <div class="section-title">
                <p class="why-kicker">Why ride with us</p>
                <h2>Why Travelers Trust Himachal Cabs Online</h2>
                <p>Looking for a dependable taxi service in Himachal Pradesh? Our experienced local drivers and flexible
                    travel options make every journey comfortable and hassle-free — from Shimla and Manali to
                    Dharamshala, Dalhousie, and beyond.</p>
            </div>
            <div class="why-us-grid">
                <div class="why-card">
                    <div class="why-card-top">
                        <span class="why-icon-tile"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M3 20 9.5 5l4.5 8.5L16.5 10 21 20H3z" />
                            </svg></span>
                        <span class="why-num">01</span>
                    </div>
                    <h3>Mountain Experts</h3>
                    <p>Our experienced drivers know Himachal Pradesh’s winding roads, steep ghats, and challenging
                        mountain routes, helping you travel safely and comfortably.</p>
                </div>
                <div class="why-card">
                    <div class="why-card-top">
                        <span class="why-icon-tile"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 3l7 2.8v5.4c0 4.4-2.9 8.3-7 9.8-4.1-1.5-7-5.4-7-9.8V5.8z" />
                                <path d="M9.3 11.8l2 2 3.4-3.8" />
                            </svg></span>
                        <span class="why-num">02</span>
                    </div>
                    <h3>Safety First</h3>
                    <p>Our taxis are well-maintained, AC-checked, and equipped with essential safety and travel
                        amenities, including first-aid kits.</p>
                </div>
                <div class="why-card">
                    <div class="why-card-top">
                        <span class="why-icon-tile"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M3.5 12V4.5A1.5 1.5 0 0 1 5 3h7.5L21 11.5 12.5 20z" />
                                <circle cx="8.5" cy="8.5" r="1.6" />
                            </svg></span>
                        <span class="why-num">03</span>
                    </div>
                    <h3>No Hidden Costs</h3>
                    <p>Get clear, upfront pricing with no hidden charges. Any applicable tolls, parking fees, or other
                        additional costs are communicated clearly.</p>
                </div>
                <div class="why-card">
                    <div class="why-card-top">
                        <span class="why-icon-tile"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M4 13a8 8 0 0 1 16 0" />
                                <rect x="2.5" y="13" width="4.5" height="7" rx="2" />
                                <rect x="17" y="13" width="4.5" height="7" rx="2" />
                                <path d="M19.5 20a4.5 4.5 0 0 1-4.5 3.5H12" />
                            </svg></span>
                        <span class="why-num">04</span>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Need assistance during your journey? Our support team is available 24/7, and in case of a vehicle
                        breakdown, we work to arrange a replacement swiftly.</p>
                </div>
            </div>
        </section>

        <!-- FLEET & PRICING -->
        <section class="fleet-section" id="fleet">
            <div class="section-title">
                <p class="section-kicker">Our fleet</p>
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
                        <img src="/Images/Dzire.jpg" alt="Swift Dzire Taxi" width="300" height="250" loading="lazy">
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
                        <img src="/Images/ertiga.jpg" alt="Suzuki Ertiga Taxi" width="300" height="250" loading="lazy">
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
                        <img src="/Images/Traveller 17 Seater.jpg" alt="Traveller 17 Seater" width="300" height="250"
                            loading="lazy">
                        <span class="fleet-badge">Large Group</span>
                    </div>
                    <div class="fleet-details">
                        <h3 class="fleet-name">Traveller 16-Seater</h3>
                        <div class="fleet-specs">
                            <span>👥 16+1 Seats</span>
                            <span>💺 Relaxed</span>
                            <span>⛽ Diesel</span>
                        </div>
                        <div class="fleet-price">₹7500/day <small>or ₹38/km</small></div>
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
                        <img src="/Images/Urbania.jpg" alt="Urbania 17 Seater" width="300" height="250" loading="lazy">
                        <span class="fleet-badge">Luxury</span>
                    </div>
                    <div class="fleet-details">
                        <h3 class="fleet-name">Urbania 16-Seater</h3>
                        <div class="fleet-specs">
                            <span>👥 16+1 Seats</span>
                            <span>❄️ Fully AC</span>
                            <span>⛽ Diesel</span>
                        </div>
                        <div class="fleet-price">₹10000/day <small>or ₹70/km</small></div>
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

        <!-- POPULAR ROUTES -->
        <section class="routes-section" id="routes">
            <div class="section-title">
                <p class="section-kicker">Popular routes</p>
                <h2>Taxi Routes Travelers Love</h2>
                <p>One-way &amp; round trips on our most-booked routes. Tap any route for a fixed quote — no hidden
                    charges.</p>
            </div>
            <div class="routes-grid">
                <div class="route-card">
                    <div class="route-path"><span>Delhi</span><span class="route-arrow">→</span><span>Shimla</span>
                    </div>
                    <p class="route-meta">One-way &amp; round trip · Sedan · SUV · Traveller</p>
                    <button class="route-btn js-quote-open" data-dest="Shimla" data-interest="Route: Delhi - Shimla">Get
                        Fixed Price</button>
                </div>
                <div class="route-card">
                    <div class="route-path"><span>Chandigarh</span><span class="route-arrow">→</span><span>Manali</span>
                    </div>
                    <p class="route-meta">One-way &amp; round trip · Sedan · SUV · Traveller</p>
                    <button class="route-btn js-quote-open" data-dest="Manali"
                        data-interest="Route: Chandigarh - Manali">Get Fixed Price</button>
                </div>
                <div class="route-card">
                    <div class="route-path"><span>Delhi</span><span class="route-arrow">→</span><span>Manali</span>
                    </div>
                    <p class="route-meta">One-way &amp; round trip · Sedan · SUV · Traveller</p>
                    <button class="route-btn js-quote-open" data-dest="Manali" data-interest="Route: Delhi - Manali">Get
                        Fixed Price</button>
                </div>
                <div class="route-card">
                    <div class="route-path"><span>Chandigarh</span><span class="route-arrow">→</span><span>Shimla</span>
                    </div>
                    <p class="route-meta">One-way &amp; round trip · Sedan · SUV · Traveller</p>
                    <button class="route-btn js-quote-open" data-dest="Shimla"
                        data-interest="Route: Chandigarh - Shimla">Get Fixed Price</button>
                </div>
                <div class="route-card">
                    <div class="route-path"><span>Amritsar</span><span
                            class="route-arrow">→</span><span>Dharamshala</span>
                    </div>
                    <p class="route-meta">One-way &amp; round trip · Sedan · SUV · Traveller</p>
                    <button class="route-btn js-quote-open" data-dest="Dharamshala"
                        data-interest="Route: Amritsar - Dharamshala">Get Fixed Price</button>
                </div>
                <div class="route-card">
                    <div class="route-path"><span>Chandigarh</span><span
                            class="route-arrow">→</span><span>Dalhousie</span>
                    </div>
                    <p class="route-meta">One-way &amp; round trip · Sedan · SUV · Traveller</p>
                    <button class="route-btn js-quote-open" data-dest="Dalhousie"
                        data-interest="Route: Chandigarh - Dalhousie">Get Fixed Price</button>
                </div>
                <div class="route-card">
                    <div class="route-path"><span>Shimla</span><span class="route-arrow">→</span><span>Manali</span>
                    </div>
                    <p class="route-meta">One-way &amp; round trip · Sedan · SUV · Traveller</p>
                    <button class="route-btn js-quote-open" data-dest="Manali"
                        data-interest="Route: Shimla - Manali">Get Fixed Price</button>
                </div>
                <div class="route-card">
                    <div class="route-path"><span>Chandigarh</span><span
                            class="route-arrow">→</span><span>Dharamshala</span>
                    </div>
                    <p class="route-meta">One-way &amp; round trip · Sedan · SUV · Traveller</p>
                    <button class="route-btn js-quote-open" data-dest="Dharamshala"
                        data-interest="Route: Chandigarh - Dharamshala">Get Fixed Price</button>
                </div>
                <div class="route-card">
                    <div class="route-path"><span>Chandigarh</span><span class="route-arrow">→</span><span>Jibhi</span>
                    </div>
                    <p class="route-meta">One-way &amp; round trip · Sedan · SUV · Traveller</p>
                    <button class="route-btn js-quote-open" data-dest="Jibhi"
                        data-interest="Route: Chandigarh - Jibhi">Get Fixed Price</button>
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
                        <input type="tel" id="calc-phone" placeholder="Your Phone Number (10-12 digits, e.g. 9317324669)"
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


        <!-- TOUR PACKAGES SECTION -->
        <section class="tours-section" id="tours">
            <div class="section-title">
                <p class="section-kicker">Tour packages</p>
                <h2>Popular Himachal Tour Packages</h2>
                <p>Checkout our pre-planned taxi tour itineraries of Himachal. These itineraries are fully customizable.
                </p>
            </div>

            <!-- This grid will be populated by JS -->
            <div class="tours-grid" id="toursContainer">
                <!-- Cards will be injected here automatically -->
            </div>
        </section>

        <!-- TESTIMONIAL SECTION -->
        <section class="testimonial-section" id="reviews">
            <div class="section-title">
                <p class="section-kicker">Reviews</p>
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


        <!-- FAQ SECTION -->
        <section class="faq-section" id="faq">
            <div class="section-title">
                <p class="section-kicker">FAQ</p>
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

        <!-- Sticky mobile quote bubble -->
        <div class="sticky-action-bar" id="stickyQuote">
            <button class="sticky-quote js-quote-open" data-interest="Sticky bubble" type="button">
                <span class="sticky-quote-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M3.5 12V4.5A1.5 1.5 0 0 1 5 3h7.5L21 11.5 12.5 20z" />
                        <circle cx="8.5" cy="8.5" r="1.6" />
                    </svg></span>
                <span class="sticky-quote-text"><strong>Get Free Quote</strong><small>Himachal taxi ·
                        30 sec</small></span>
                <span class="sticky-quote-arrow">→</span>
            </button>
            <button class="sticky-quote-close" id="stickyQuoteClose" aria-label="Dismiss">×</button>
        </div>

        <!-- Floating Left Contact Buttons -->
        <div class="float-contact-buttons">
            <a href="https://wa.me/919317324669" class="float-contact-btn whatsapp" target="_blank"
                aria-label="Chat on WhatsApp">
                <svg style="width:26px;height:26px;fill:currentColor;" viewBox="0 0 448 512">
                    <path
                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.8 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                </svg>
                <span class="tooltip">WhatsApp</span>
            </a>
            <a href="tel:+919317324669" class="float-contact-btn phone" aria-label="Call Us">
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
                <p class="section-kicker">Shimla · Manali · Dharamshala · Dalhousie · Spiti</p>
                <h2>More Than <span style="color:var(--accent);">5,000</span> People Have Explored Himachal With Us</h2>
                <p class="final-cta-stars"><span class="stars">★★★★★</span>4.8 rated · 200+ Google reviews</p>
                <p>
                    Planning a trip to Himachal? We're a complete Himachal taxi service providers covering all your
                    transportation needs — including our popular Shimla taxi service and Manali taxi service, plus
                    reliable cabs to Dharamshala, Dalhousie, and Spiti Valley. Over the past 8 years, we've safely
                    carried more than 5,000 satisfied travelers across the mountains, backed by our satisfaction
                    guarantee. Join the thousands of happy travelers who've explored Himachal with us.
                </p>
                <div class="final-cta-buttons">
                    <a href="#home" class="cta-btn js-quote-open" data-interest="Final CTA">Book Your Taxi Now</a>
                    <a href="tel:+919317324669" class="cta-btn final-cta-call"><svg viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            aria-hidden="true">
                            <path
                                d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.4 2.1L8.1 9.7a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.4c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.9 2z" />
                        </svg>+91 93173 24669</a>
                </div>
                <div class="final-cta-points">
                    <span><span class="tick">✓</span>Experienced hill drivers</span>
                    <span><span class="tick">✓</span>Sedans, SUVs &amp; Travellers</span>
                    <span><span class="tick">✓</span>Upfront fixed pricing</span>
                </div>
            </div>

        </section>

        <!-- QUOTE POPUP MODAL (reuses hero form fields) -->
        <div id="quoteModal" class="quote-modal-overlay" role="dialog" aria-modal="true"
            aria-labelledby="quoteModalTitle">
            <div class="quote-modal-content">
                <button class="quote-modal-close" id="closeQuoteModal" aria-label="Close">&times;</button>
                <h2 id="quoteModalTitle">Get Your Free Quote</h2>
                <p class="quote-modal-sub">Fill in your details and we'll call you back with the best price.</p>
                <form id="taxiFormModal" class="booking-form" action="api/submit.php" method="POST">
                    <input type="hidden" name="bot-field">
                    <input type="hidden" name="interest" id="q-interest" value="">

                    <div class="form-group">
                        <label for="q-name">Your Name</label>
                        <input type="text" id="q-name" name="name" placeholder="Your Name" required>
                    </div>

                    <div class="form-group">
                        <label for="q-phone">Phone Number</label>
                        <input type="tel" id="q-phone" name="phone" placeholder="Your Phone Number (10-12 digits)"
                            inputmode="numeric" pattern="[0-9]{10,12}" minlength="10" maxlength="12"
                            title="Enter 10-12 digits" required>
                    </div>

                    <div class="form-group">
                        <label for="q-email">Email Address (Optional)</label>
                        <input type="email" id="q-email" name="email" placeholder="Your Email Address">
                    </div>

                    <div class="form-group">
                        <label for="q-destination">Where are you going?</label>
                        <select id="q-destination" name="destination" required>
                            <option value="" disabled selected>Select Destination</option>
                            <option value="Shimla">Shimla</option>
                            <option value="Manali">Manali</option>
                            <option value="Dharamshala">Dharamshala</option>
                            <option value="Dalhousie">Dalhousie</option>
                            <option value="Kasol">Kasol</option>
                            <option value="Spiti">Spiti</option>
                            <option value="Kinnaur">Kinnaur</option>
                            <option value="Jibhi">Jibhi (Tirthan Valley)</option>
                            <option value="Other">Other (Custom Tour)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="q-vehicle">Select Vehicle</label>
                        <select id="q-vehicle" name="vehicle-type" required>
                            <option value="" disabled selected>Select Vehicle Type</option>
                            <option value="Sedan">Sedan (2-4 seater)</option>
                            <option value="SUV">SUV (4-7 seater)</option>
                            <option value="Traveller">Traveller 8+ Seater</option>
                            <option value="Not Sure">Not Sure</option>
                        </select>
                    </div>

                    <button type="submit" class="cta-btn" id="quoteSubmitBtn">Get Free Quote Now</button>
                </form>
            </div>
        </div>

    </main>

    <!-- FOOTER -->
    <footer class="site-footer">
        <!-- Trust Badges Section -->
        <div class="trust-section">
            <div class="trust-container">
                <!-- Badge 1: Himachal Tourism -->
                <div class="trust-card">
                    <div class="trust-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M3 9.5 12 4l9 5.5" />
                            <path d="M5 10v9M19 10v9M9 13.5V17M12 13.5V17M15 13.5V17M2.5 20.5h19" />
                        </svg></div>
                    <div class="trust-card__content">
                        <h3 class="trust-card__title">Himachal Tourism</h3>
                        <p class="trust-card__subtitle">Registered Transporters</p>
                    </div>
                </div>

                <!-- Badge 3: Google Reviews -->
                <div class="trust-card">
                    <div class="trust-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 3.6l2.6 5.2 5.7.8-4.1 4 1 5.7-5.2-2.7-5.2 2.7 1-5.7-4.1-4 5.7-.8z" />
                        </svg></div>
                    <div class="trust-card__content">
                        <h3 class="trust-card__title">200+ Reviews</h3>
                        <p class="trust-card__subtitle">4.8★ Positive Rating</p>
                    </div>
                </div>

                <!-- Badge 4: Years in Business -->
                <div class="trust-card">
                    <div class="trust-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="3.5" y="5" width="17" height="15.5" rx="2" />
                            <path d="M3.5 10h17M8 3v4M16 3v4" />
                        </svg></div>
                    <div class="trust-card__content">
                        <h3 class="trust-card__title">8+ Years in Market</h3>
                        <p class="trust-card__subtitle">Proven Track Record</p>
                    </div>
                </div>

                <!-- Badge 5: Happy Travelers -->
                <div class="trust-card">
                    <div class="trust-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="9" cy="8" r="3.2" />
                            <path d="M3 20c0-3.3 2.7-5.5 6-5.5s6 2.2 6 5.5" />
                            <circle cx="16.8" cy="9" r="2.5" />
                            <path d="M16.4 14.6c2.5.6 4.6 2.4 4.6 5.4" />
                        </svg></div>
                    <div class="trust-card__content">
                        <h3 class="trust-card__title">5,000+</h3>
                        <p class="trust-card__subtitle">Community of Explorers</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Columns -->
        <div class="footer-grid">
            <div class="footer-col">
                <div class="footer-brand">Himachal Cabs <span>Online</span></div>
                <p>Local taxi service for private travel across Himachal Pradesh — one-way transfers, sightseeing cabs
                    and multi-day trips with experienced hill drivers.</p>
            </div>
            <div class="footer-col">
                <div class="footer-heading">Explore</div>
                <ul class="footer-links">
                    <li>→ <a href="#why-us">Why Us</a></li>
                    <li>→ <a href="#fleet">Our Fleet</a></li>
                    <li>→ <a href="#routes">Popular Routes</a></li>
                    <li>→ <a href="#tours">Tour Packages</a></li>
                    <li>→ <a href="#reviews">Reviews</a></li>
                    <li>→ <a href="#faq">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <div class="footer-heading">Contact</div>
                <ul class="footer-contact">
                    <li><a href="tel:+919317324669"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path
                                    d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.4 2.1L8.1 9.7a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.4c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.9 2z" />
                            </svg>+91 93173 24669</a></li>
                    <li><a href="mailto:himachalcabsonline01@gmail.com"><svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                aria-hidden="true">
                                <rect x="3" y="5" width="18" height="14" rx="2" />
                                <path d="M3.5 7l8.5 6 8.5-6" />
                            </svg>himachalcabsonline01@gmail.com</a></li>
                    <li><a href="https://wa.me/919317324669" target="_blank" rel="noopener"><svg viewBox="0 0 448 512"
                                fill="currentColor" aria-hidden="true">
                                <path
                                    d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157z" />
                            </svg>Chat on WhatsApp</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom">
            <p>&copy; <span id="current-year"></span> Himachal Cabs Online - A Unit of <a
                    href="https://uranoteholidays.com" target="_blank"
                    style="text-decoration: none; font-weight: bold; color: var(--accent);">Uranote Holidays.</a> All
                rights reserved.</p>
            <p><a href="/privacy-policy.html">Privacy Policy</a></p>
        </div>
    </footer>

    <script src="main.js?v=3.2" defer></script>

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