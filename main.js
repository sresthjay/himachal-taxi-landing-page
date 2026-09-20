// 1. Car Selection Logic & Calculator Modal
const fleetButtons = document.querySelectorAll('.fleet-cta');
const calcModal = document.getElementById('calcModal');
const closeCalcModal = document.getElementById('closeCalcModal');
const calcFormStep = document.getElementById('calcFormStep');
const calcResultStep = document.getElementById('calcResultStep');
const backToCalcBtn = document.getElementById('backToCalcBtn');

fleetButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
        const carName = btn.getAttribute('data-car');
        if (calcModal) {
            calcModal.style.display = 'flex';
            if (calcFormStep) calcFormStep.style.display = 'block';
            if (calcResultStep) calcResultStep.style.display = 'none';

            const calcCar = document.getElementById('calc-car');
            if (calcCar && carName) {
                if (carName.includes('Alto')) calcCar.value = "14";
                else if (carName.includes('Dzire')) calcCar.value = "17";
                else if (carName.includes('Etios')) calcCar.value = "18";
                else if (carName.includes('Ertiga')) calcCar.value = "24";
                else if (carName.includes('Toyota')) calcCar.value = "26";
                else if (carName.includes('Crysta')) calcCar.value = "29";
                else if (carName.includes('Traveller 12-Seater')) calcCar.value = "40";
                else if (carName.includes('Traveller 17-Seater')) calcCar.value = "50";
                else if (carName.includes('Urbania 17-Seater')) calcCar.value = "70";
            }
        }
    });
});

if (closeCalcModal) {
    closeCalcModal.addEventListener('click', () => {
        if (calcModal) calcModal.style.display = 'none';
    });
}

if (calcModal) {
    calcModal.addEventListener('click', (e) => {
        if (e.target === calcModal) {
            calcModal.style.display = 'none';
        }
    });
}

if (backToCalcBtn) {
    backToCalcBtn.addEventListener('click', () => {
        if (calcFormStep) calcFormStep.style.display = 'block';
        if (calcResultStep) calcResultStep.style.display = 'none';
    });
}

// 2. Price Calculator Logic (Calculate Estimate)
const calcBtn = document.getElementById('calcBtn');
if (calcBtn) {
    calcBtn.addEventListener('click', () => {
        const carSelect = document.getElementById('calc-car');
        const carRate = parseFloat(carSelect.value);
        const carName = carSelect.options[carSelect.selectedIndex].text;
        const pickup = document.getElementById('calc-pickup').value.trim();
        const drop = document.getElementById('calc-drop').value.trim();
        const km = parseFloat(document.getElementById('calc-km').value);
        const days = parseFloat(document.getElementById('calc-days').value) || 1;
        const resultDiv = document.getElementById('calc-result');

        if (!pickup || !drop) {
            alert("⚠️ Please enter both Pickup and Drop locations.");
            return;
        }

        if (!km || km <= 0) {
            alert("⚠️ Please enter a valid distance in kilometers.");
            return;
        }

        const driverAllowance = 500;
        const total = (carRate * km) + (driverAllowance * days);

        const formattedTotal = new Intl.NumberFormat('en-IN', {
            style: 'currency',
            currency: 'INR',
            maximumFractionDigits: 0
        }).format(total);

        resultDiv.style.background = '#e8f5e9';
        resultDiv.style.color = '#2e7d32';
        resultDiv.innerHTML = `
            <div style="font-size: 1.05rem; margin-bottom: 3px; font-weight: 600; color: #1b4332;">Here is the estimated rate based on your journey details:</div>
            <div style="font-size: 2.2rem; font-weight: 800; margin-bottom: 8px; color: #2e7d32;">${formattedTotal}</div>
            <div style="font-size: 0.85rem; color: #555; line-height: 1.5; margin-bottom: 12px;">
                <strong>Car:</strong> ${carName}<br>
                <strong>Route:</strong> ${pickup} to ${drop} (${km} km, ${days} Day/s)<br>
                <em>*Includes DA. Taxes, Tolls & Parking extra.</em>
            </div>
            <div style="font-size: 0.75rem; color: #666; line-height: 1.4; border-top: 1px dashed #c8e6c9; padding-top: 10px; text-align: left;">
                *The displayed fare is an estimate and may vary based on the travel date, season, time of day or night, traffic conditions, route, and other applicable charges. The final fare will be confirmed at the time of booking.
            </div>
        `;

        if (calcFormStep) calcFormStep.style.display = 'none';
        if (calcResultStep) calcResultStep.style.display = 'block';
    });
}

// 3. Book Estimate / Submit Phone Number
const bookEstimateBtn = document.getElementById('bookEstimateBtn');
if (bookEstimateBtn) {
    bookEstimateBtn.addEventListener('click', async () => {
        const phoneInput = document.getElementById('calc-phone');
        const phone = phoneInput ? phoneInput.value.trim() : '';

        if (!/^[0-9]{10,12}$/.test(phone)) {
            alert("⚠️ Please enter a valid phone number (10-12 digits).");
            return;
        }

        const carSelect = document.getElementById('calc-car');
        const carRate = parseFloat(carSelect.value);
        const carName = carSelect.options[carSelect.selectedIndex].text;
        const pickup = document.getElementById('calc-pickup').value.trim();
        const drop = document.getElementById('calc-drop').value.trim();
        const km = parseFloat(document.getElementById('calc-km').value);
        const days = parseFloat(document.getElementById('calc-days').value) || 1;
        const driverAllowance = 500;
        const total = (carRate * km) + (driverAllowance * days);
        const formattedTotal = new Intl.NumberFormat('en-IN', {
            style: 'currency',
            currency: 'INR',
            maximumFractionDigits: 0
        }).format(total);

        bookEstimateBtn.innerText = "Sending Quote Request...";
        bookEstimateBtn.disabled = true;

        const formData = new FormData();
        formData.append("car", carName);
        formData.append("pickup", pickup);
        formData.append("drop", drop);
        formData.append("distance", km + " km");
        formData.append("days", days);
        formData.append("estimated_cost", formattedTotal);
        formData.append("phone", phone);
        formData.append("name", "Website Visitor (Calculator)");

        try {
            const response = await fetch("api/submit.php", {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            });
            const data = await response.json();
            if (response.ok && data.success) {
                window.location.href = "/success.html";
            } else {
                alert("Error: " + (data.message || "Failed to send email. Please check your SMTP settings or call us directly."));
                bookEstimateBtn.innerText = "Get Quote & Book Now";
                bookEstimateBtn.disabled = false;
            }
        } catch (error) {
            console.error("Submission error:", error);
            alert("Network error or server misconfiguration. Please call us directly at +91 98057 53890.");
            bookEstimateBtn.innerText = "Get Quote & Book Now";
            bookEstimateBtn.disabled = false;
        }
    });
}

// Restrict phone input to numbers only (max 12 digits)
const calcPhoneInput = document.getElementById('calc-phone');
if (calcPhoneInput) {
    calcPhoneInput.addEventListener('input', () => {
        calcPhoneInput.value = calcPhoneInput.value.replace(/\D/g, '').slice(0, 12);
    });
}

// 3. FAQ Accordion Logic
const faqQuestions = document.querySelectorAll('.faq-question');
faqQuestions.forEach(item => {
    item.addEventListener('click', () => {
        const parent = item.parentElement;
        document.querySelectorAll('.faq-item').forEach(child => {
            if (child !== parent) child.classList.remove('active');
        });
        parent.classList.toggle('active');
    });
});

// 4. FORM SUBMISSION
const form = document.getElementById('taxiForm');
if (form) {
    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        // SAFETY CHECK: Ensure button exists
        const submitBtn = document.getElementById('submitBtn');
        if (!submitBtn) {
            console.error("Submit button not found!");
            return;
        }

        const originalText = submitBtn.innerText;
        submitBtn.innerText = "Sending Quote Request...";
        submitBtn.disabled = true;

        const heroPhone = form.querySelector('#phone') ? form.querySelector('#phone').value.trim() : '';
        if (!/^[0-9]{10,12}$/.test(heroPhone)) {
            alert("⚠️ Please enter a valid phone number (10-12 digits).");
            submitBtn.innerText = originalText;
            submitBtn.disabled = false;
            return;
        }

        const formData = new FormData(form);

        try {
            const response = await fetch("api/submit.php", {
                method: "POST",
                body: formData,
                headers: {
                    "Accept": "application/json"
                }
            });
            const data = await response.json();
            if (response.ok && data.success) {
                window.location.href = "/success.html";
            } else {
                alert("Error: " + (data.message || "Failed to send email. Please check your SMTP settings or call us directly."));
                submitBtn.innerText = originalText;
                submitBtn.disabled = false;
            }
        } catch (error) {
            console.error("Submission error:", error);
            alert("Network error or server misconfiguration. Please call us directly at +91 98057 53890.");
            submitBtn.innerText = originalText;
            submitBtn.disabled = false;
        }
    });
}

// Restrict hero phone input to numbers only (max 12 digits)
const heroPhoneInput = document.getElementById('phone');
if (heroPhoneInput) {
    heroPhoneInput.addEventListener('input', () => {
        heroPhoneInput.value = heroPhoneInput.value.replace(/\D/g, '').slice(0, 12);
    });
}

// 5. Dynamic Year in Footer
const yearSpan = document.getElementById('current-year');
if (yearSpan) {
    yearSpan.innerText = new Date().getFullYear();
}

// 6. Get to top button
const backToTopBtn = document.getElementById("backToTopBtn");

// Show button when user scrolls down 200px
window.onscroll = function () {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        backToTopBtn.style.display = "block";
    } else {
        backToTopBtn.style.display = "none";
    }
};

// Scroll to top when clicked
backToTopBtn.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth" // Uses the smooth scrolling you already set in CSS
    });
});

// TOUR DATA
const toursData = [
  {
    id: 1,
    title: "Shimla Manali Taxi Tour",
    image: "/Images/tours/shimla.jpg",
    badge: "Best Seller",
    duration: "6 Days",
    bestFor: "Couples & Families",
    places: ["Shimla", "Manali", "Kullu", "Rohtang Pass", "Sissu", "Atal Tunnel"],
    features: [
      "Ex: Chandigarh/Delhi/Ambala/Shimla",
      "Taxi for complete 6 Days",
      "Driver Allowance Included",
      "Private AC Sedan/SUV/Traveller",
      "Toll/Fuel/Taxes Included",
    ],
    price: "From ₹20,000/-",
    ctaText: "Get Free Quote"
  },
  {
    id: 2,
    title: "Spiti Valley Circuit Tour",
    image: "/Images/tours/spiti-valley.jpg",
    badge: "Adventure",
    duration: "10 Days",
    bestFor: "Adventure Seekers",
    places: ["Shimla", "Kinnaur", "Kaza", "Tabo", "Chandratal", "Manali"],
    features: [
      "Ex: Chandigarh/Delhi/Ambala/Shimla",
      "Taxi for Complete 10 Days",
      "Driver Allowance Included",
      "Private AC SUV/Traveller",
      "Toll/Fuel/Taxes Included",
    ],
    price: "From ₹45,000/-",
    ctaText: "Get Free Quote"
  },
  {
    id: 3,
    title: "Dharamshala Dalhousie Tour",
    image: "/Images/tours/dharamshala.jpg",
    badge: "Peaceful",
    duration: "6 Days",
    bestFor: "Family & Couple",
    places: ["Dharamshala", "McLeod Ganj", "Dalhousie", "Khajjiar", "Amritsar"],
    features: [
      "Ex: Chandigarh/Pathankot/Amritsar",
      "Taxi for Complete 6 Days",
      "Driver Allowance Included",
      "Private AC Sedan/SUV/Traveller",
      "Toll/Fuel/Taxes Included",
    ],
    price: "From ₹18,000/-",
    ctaText: "Get Free Quote"
  },
  {
    id: 4,
    title: "Manali & Kasol Taxi Getaway",
    image: "/Images/tours/kasol.jpg",
    badge: "Relaxing",
    duration: "5 Days",
    bestFor: "Weekend Getaway",
    places: ["Manali", "Atal Tunnel", "Sissu", "Kullu", "Kasol", "Manikaran"],
    features: [
      "Ex: Chandigarh/Delhi/Ambala",
      "Taxi for Complete 5 Days",
      "Driver Allowance Included",
      "Private AC Sedan/SUV/Traveller",
      "Toll/Fuel/Taxes Included",
    ],
    price: "From ₹15,000/-",
    ctaText: "Get Free Quote"
  },
  {
    id: 5,
    title: "Complete Himachal Tour",
    image: "/Images/tours/himachal.jpg",
    badge: "Long Holidays",
    duration: "10 Days",
    bestFor: "Family & Couples",
    places: ["Shimla", "Manali", "Dharamshala", "Dalhousie", "Amritsar"],
    features: [
      "Ex: Chandigarh/Delhi/Ambala",
      "Taxi for Complete 10 Days",
      "Driver Allowance Included",
      "Private AC Sedan/SUV/Traveller",
      "Toll/Fuel/Taxes Included",
    ],
    price: "From ₹30,000/-",
    ctaText: "Get Free Quote"
  },
  {
    id: 6,
    title: "Kinnaur Spiti Adventure Trip",
    image: "/Images/tours/kinnaur.jpg",
    badge: "Off Beat",
    duration: "8 Days",
    bestFor: "Adventure & Off Beat",
    places: ["Narkanda", "Sangla", "Chitkul", "Kalpa", "Tabo", "Kaza"],
    features: [
      "Ex: Chandigarh/Delhi/Ambala",
      "Taxi for Complete 8 Days",
      "Driver Allowance Included",
      "Private AC Sedan/SUV/Traveller",
      "Toll/Fuel/Taxes Included",
    ],
    price: "From ₹27,000/-",
    ctaText: "Get Free Quote"
  }
];

// RENDER TOURS
const toursContainer = document.getElementById('toursContainer');

if (toursContainer) {
  toursData.forEach(tour => {
    // 1. Create Place Tags (Existing logic)
    const placesHtml = tour.places.map(place => 
      `<span class="place-tag"><svg style="width:11px;height:11px;fill:currentColor;vertical-align:middle;margin-right:3px;" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"/></svg>${place}</span>`
    ).join('');

    // 2. CREATE FEATURES LIST (New Logic)
    const featuresHtml = tour.features.map(feat => 
      `<li style="margin-bottom: 8px; font-size: 0.95rem; color: #444; display: flex; align-items: start; gap: 8px;">
         <svg style="width:16px;height:16px;fill:#2E7D32;flex-shrink:0;margin-top:3px;" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
         <span>${feat}</span>
       </li>`
    ).join('');

    // 3. Create Card HTML
    const cardHtml = `
      <div class="tour-card">
        <div style="position: relative;">
          <img src="${tour.image}" alt="${tour.title}" class="tour-image">
          <span class="tour-badge">${tour.badge}</span>
        </div>
        <div class="tour-content">
          <h3 class="tour-title">${tour.title}</h3>
          
          <div class="tour-meta">
            <div class="meta-item"><svg style="width:14px;height:14px;fill:currentColor;vertical-align:middle;margin-right:4px;" viewBox="0 0 512 512"><path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>${tour.duration}</div>
            <div class="meta-item"><svg style="width:14px;height:14px;fill:currentColor;vertical-align:middle;margin-right:4px;" viewBox="0 0 640 512"><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>${tour.bestFor}</div>
          </div>

          <div class="places-list">
            ${placesHtml}
          </div>

          <!-- CHANGE 2: Render List instead of Paragraph -->
          <ul style="list-style: none; padding: 0; margin: 0 0 20px 0;">
            ${featuresHtml}
          </ul>
          
          <div class="tour-price">${tour.price}</div>
          
          <button class="tour-cta" onclick="scrollToBooking('${tour.title}')">
            ${tour.ctaText}
          </button>
        </div>
      </div>
    `;

    toursContainer.innerHTML += cardHtml;
  });
}

// Scroll Function (Unchanged)
function scrollToBooking(tourName) {
  const bookingForm = document.getElementById('taxiForm');
  const calcSection = document.getElementById('booking-form');
  
  if (bookingForm) {
    bookingForm.scrollIntoView({ behavior: 'smooth', block: 'center' });
  } else if (calcSection) {
    calcSection.scrollIntoView({ behavior: 'smooth', block: 'center' });
  } else {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
}

// Testimonial Slider Logic
const testimonialCards = document.querySelectorAll('.testimonial-card');
const dots = document.querySelectorAll('.testimonial-dots .dot');
const prevBtn = document.getElementById('prevTestimonial');
const nextBtn = document.getElementById('nextTestimonial');
let currentTestimonial = 0;
let testimonialInterval;

function showTestimonial(index) {
    testimonialCards.forEach((card, i) => {
        card.classList.toggle('active', i === index);
    });
    dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === index);
    });
    currentTestimonial = index;
}

function nextTestimonial() {
    let nextIndex = (currentTestimonial + 1) % testimonialCards.length;
    showTestimonial(nextIndex);
}

function prevTestimonialFunc() {
    let prevIndex = (currentTestimonial - 1 + testimonialCards.length) % testimonialCards.length;
    showTestimonial(prevIndex);
}

if (nextBtn && prevBtn && testimonialCards.length > 0) {
    nextBtn.addEventListener('click', () => {
        nextTestimonial();
        resetInterval();
    });

    prevBtn.addEventListener('click', () => {
        prevTestimonialFunc();
        resetInterval();
    });

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            showTestimonial(index);
            resetInterval();
        });
    });

    function startInterval() {
        testimonialInterval = setInterval(nextTestimonial, 6000);
    }

    function resetInterval() {
        clearInterval(testimonialInterval);
        startInterval();
    }

    startInterval();
}

// 7. Mobile Navbar Menu
const navToggle = document.getElementById('navToggle');
const mainNav = document.getElementById('mainNav');

function closeMobileNav() {
    if (mainNav && mainNav.classList.contains('open')) {
        mainNav.classList.remove('open');
        if (navToggle) {
            navToggle.setAttribute('aria-expanded', 'false');
            navToggle.setAttribute('aria-label', 'Open menu');
        }
        const backdrop = document.getElementById('navBackdrop');
        if (backdrop) backdrop.classList.remove('show');
        document.body.style.overflow = '';
    }
}

if (navToggle && mainNav) {
    navToggle.addEventListener('click', (e) => {
        e.stopPropagation();
        const isOpen = mainNav.classList.toggle('open');
        navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        navToggle.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
        const backdrop = document.getElementById('navBackdrop');
        if (backdrop) backdrop.classList.toggle('show', isOpen);
        document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    // Close when a nav link is tapped
    mainNav.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', closeMobileNav);
    });

    // Close when tapping outside the menu
    document.addEventListener('click', (e) => {
        if (mainNav.classList.contains('open') &&
            !mainNav.contains(e.target) &&
            !navToggle.contains(e.target)) {
            closeMobileNav();
        }
    });

    // Close on Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeMobileNav();
    });

    // Close menu on resize to desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth > 900) closeMobileNav();
    });
}

// 8. Scrollspy: highlight active nav link while scrolling
const spySections = ['home', 'why-us', 'fleet', 'tours', 'reviews', 'faq']
    .map(id => document.getElementById(id))
    .filter(Boolean);

if (spySections.length && mainNav) {
    const navLinks = mainNav.querySelectorAll('a[href^="#"]');
    const spyObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navLinks.forEach(link => {
                    const target = link.getAttribute('href');
                    if (target === '#' + entry.target.id && !link.classList.contains('nav-cta')) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });
            }
        });
    }, { rootMargin: '-40% 0px -55% 0px' });

    spySections.forEach(section => spyObserver.observe(section));
}

// 9. Header "scrolled" state: shrink + elevate header after scrolling
const siteHeader = document.querySelector('.site-header');
if (siteHeader) {
    const updateHeaderState = () => {
        siteHeader.classList.toggle('scrolled', window.scrollY > 10);
    };
    window.addEventListener('scroll', updateHeaderState, { passive: true });
    updateHeaderState();
}
