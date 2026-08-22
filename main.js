// 1. Car Selection Logic
const fleetButtons = document.querySelectorAll('.fleet-cta');
fleetButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
        const carName = btn.getAttribute('data-car');
        const formSection = document.getElementById('booking-form');

        if (formSection) {
            formSection.scrollIntoView({ behavior: 'smooth' });

            const calcCar = document.getElementById('calc-car');
            if (calcCar) {
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

// 2. Price Calculator Logic
const calcBtn = document.getElementById('calcBtn');
if (calcBtn) {
    calcBtn.addEventListener('click', async () => {
        const carSelect = document.getElementById('calc-car');
        const carRate = parseFloat(carSelect.value);
        const carName = carSelect.options[carSelect.selectedIndex].text;
        const pickup = document.getElementById('calc-pickup').value.trim();
        const drop = document.getElementById('calc-drop').value.trim();
        const km = parseFloat(document.getElementById('calc-km').value);
        const days = parseFloat(document.getElementById('calc-days').value) || 1;
        const phoneInput = document.getElementById('calc-phone');
        const phone = phoneInput ? phoneInput.value.trim() : '';
        const resultDiv = document.getElementById('calc-result');

        if (!pickup || !drop) {
            resultDiv.style.display = 'block';
            resultDiv.style.background = '#ffebee';
            resultDiv.style.color = '#c62828';
            resultDiv.innerHTML = "⚠️ Please enter both Pickup and Drop locations.";
            resultDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            return;
        }

        if (!km || km <= 0) {
            resultDiv.style.display = 'block';
            resultDiv.style.background = '#ffebee';
            resultDiv.style.color = '#c62828';
            resultDiv.innerHTML = "⚠️ Please enter a valid distance.";
            resultDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            return;
        }

        if (!phone) {
            resultDiv.style.display = 'block';
            resultDiv.style.background = '#ffebee';
            resultDiv.style.color = '#c62828';
            resultDiv.innerHTML = "⚠️ Please enter your phone number.";
            resultDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            return;
        }

        const driverAllowance = 500;
        const total = (carRate * km) + (driverAllowance * days);

        const formattedTotal = new Intl.NumberFormat('en-IN', {
            style: 'currency',
            currency: 'INR',
            maximumFractionDigits: 0
        }).format(total);

        resultDiv.style.display = 'block';
        resultDiv.style.background = '#e8f5e9';
        resultDiv.style.color = '#2e7d32';
        resultDiv.innerHTML = `
            <div style="font-size: 1.2rem; margin-bottom: 5px;">Estimated Cost:</div>
            <div style="font-size: 2rem; font-weight: 800; margin-bottom: 5px;">${formattedTotal}</div>
            <div style="font-size: 0.85rem; margin-bottom: 15px; color: #555;">
                Car: ${carName} | From: ${pickup} To: ${drop}<br>
                Distance: ${km} km | Day/s: ${days}<br>
                *Includes DA. Taxes, Tolls & Parking extra. <a href="tel:9805753890" style="color: #dfce13; text-decoration:none; font-size:1.2rem;">Call Us</a> for more details.
            </div>
            
            <div style="text-align: center; font-size: 0.75rem; color: #666; margin-top: 10px; line-height: 1.4;">
            *The displayed fare is an estimate and may vary based on the travel date, season, time of day or night, traffic conditions, route, and other applicable charges. The final fare will be confirmed at the time of booking.
            </div>
            <div style="margin-top: 10px; font-weight: 600; color: #2e7d32;">Sending your quote request...</div>
        `;

        resultDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });

        const formData = new FormData();
        formData.append("car", carName);
        formData.append("pickup", pickup);
        formData.append("drop", drop);
        formData.append("distance", km + " km");
        formData.append("days", days);
        formData.append("estimated_cost", formattedTotal);
        formData.append("phone", phone);
        formData.append("name", "Website Visitor");

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
            }
        } catch (error) {
            console.error("Submission error:", error);
            alert("Network error or server misconfiguration. Please call us directly at +91 98057 53890.");
        }
    });
}

// Restrict phone input to numbers only
const calcPhoneInput = document.getElementById('calc-phone');
if (calcPhoneInput) {
    calcPhoneInput.addEventListener('input', () => {
        calcPhoneInput.value = calcPhoneInput.value.replace(/\D/g, '');
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

// Restrict hero phone input to numbers only
const heroPhoneInput = document.getElementById('phone');
if (heroPhoneInput) {
    heroPhoneInput.addEventListener('input', () => {
        heroPhoneInput.value = heroPhoneInput.value.replace(/\D/g, '');
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


