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
                *Includes DA. Taxes, Tolls & Parking extra. <a href="tel:9805753890" style="color: #dfce13; text-decoration:none;">CALL US</a> for more details.
            </div>
            
            <div class="form-group" style="text-align: left; margin-bottom: 15px;">
                 <label for="calc-phone" style="font-size: 0.9rem; font-weight: 600; color: #333; display: block; margin-bottom: 5px; text-align: center;">Enter Your Phone Number to Book:</label>
                 <!-- Centered Input: Added text-align:center to the container or flex center -->
           <div style="width: 50%; margin: 0 auto; text-align: center;"> 
                <input type="tel" id="calc-phone" placeholder="Your Phone No." style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; text-align: center;" required>
            </div>
            </div>

            <!-- Button: Width set to 70% -->
            <button id="bookEstimateBtn" class="cta-btn" style="background:#2E7D32; color:white; border:none; padding:12px 20px; border-radius:4px; cursor:pointer; width: 70%; margin: 0 auto; opacity:0.9;" disabled>
            Book This Price
            </button>
        `;

        const calcPhoneInput = document.getElementById('calc-phone');
        const bookBtn = document.getElementById('bookEstimateBtn');

        if (bookBtn) {
            bookBtn.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }

        if (calcPhoneInput && bookBtn) {
            calcPhoneInput.addEventListener('input', () => {
                if (calcPhoneInput.value.trim().length > 0) {
                    bookBtn.disabled = false;
                    bookBtn.style.opacity = '1';
                } else {
                    bookBtn.disabled = true;
                    bookBtn.style.opacity = '0.5';
                }
            });

            bookBtn.addEventListener('click', async () => {
                const phone = calcPhoneInput.value.trim();
                if (!phone) {
                    alert("Please enter your phone number to book this price.");
                    return;
                }

                const originalText = bookBtn.innerText;
                bookBtn.innerText = "Sending Quote Request...";
                bookBtn.disabled = true;

                // Get all calculated values safely
                const carSelect = document.getElementById('calc-car');
                const carRate = carSelect ? parseFloat(carSelect.value) : 17;
                const carName = carSelect ? carSelect.options[carSelect.selectedIndex].text : "Standard Car";
                const pickup = document.getElementById('calc-pickup').value.trim();
                const drop = document.getElementById('calc-drop').value.trim();
                const km = parseFloat(document.getElementById('calc-km').value) || 0;
                const days = parseFloat(document.getElementById('calc-days').value) || 1;
                
                const driverAllowance = 500;
                const total = (carRate * km) + (driverAllowance * days);
                const formattedTotal = new Intl.NumberFormat('en-IN', {
                    style: 'currency',
                    currency: 'INR',
                    maximumFractionDigits: 0
                }).format(total);

                // Formspree Endpoint
                const formspreeUrl = "https://formspree.io/f/xljrbvgw";

                // Prepare FormData
                const formData = new FormData();
                formData.append("car", carName);
                formData.append("pickup", pickup);
                formData.append("drop", drop);
                formData.append("distance", km + " km");
                formData.append("days", days);
                formData.append("estimated_cost", formattedTotal);
                formData.append("phone", phone);
                formData.append("name", "Website Visitor");
                formData.append("email", "no-reply@himachaltaxiservice.com"); // Formspree fallback email

                try {
                    // Send to Formspree
                    const response = await fetch(formspreeUrl, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'Accept': 'application/json'
                        }
                    });

                    if (response.ok) {
                        alert("✅ Quote request sent successfully! We will call you shortly.");
                        
                        // Clear the result section and form fields
                        document.getElementById('calc-result').style.display = 'none';
                        document.getElementById('calc-pickup').value = '';
                        document.getElementById('calc-drop').value = '';
                        document.getElementById('calc-km').value = '';
                        document.getElementById('calc-days').value = '1';
                        document.getElementById('calc-phone').value = '';
                        
                        // Reset button state
                        bookBtn.innerText = "Book This Price";
                        bookBtn.disabled = false;
                    } else {
                        let errorMsg = "Please call us directly at +91 98057 53890.";
                        try {
                            const data = await response.json();
                            if (data.errors) {
                                errorMsg = data.errors.map(e => e.message).join(", ");
                            }
                        } catch (parseErr) {
                            // Fallback if response isn't JSON
                        }
                        alert("Error: " + errorMsg);
                        bookBtn.innerText = originalText;
                        bookBtn.disabled = false;
                    }
                } catch (error) {
                    console.error("Network error:", error);
                    alert("Network error. Please try again or call us at +91 98057 53890.");
                    bookBtn.innerText = originalText;
                    bookBtn.disabled = false;
                }
            });
        }
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

// 4. FORM SUBMISSION (With Safety Check)
const form = document.getElementById('taxiForm');
if (form) {
    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        // SAFETY CHECK: Ensure button exists
        const submitBtn = document.getElementById('submitBtn');
        if (!submitBtn) {
            console.error("Submit button not found!");
            alert("Error: Form button missing. Please refresh.");
            return;
        }

        const originalText = submitBtn.innerText;
        submitBtn.innerText = "Sending...";
        submitBtn.disabled = true;

        const formData = new FormData(form);
        const formName = form.querySelector('input[name="form-name"]').value;

        try {
            const response = await fetch("/", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "X-Netlify-Form-Name": formName
                },
                body: new URLSearchParams(formData).toString()
            });

            if (response.ok) {
                console.log("Form submitted successfully!");
                window.location.href = "/success.html";
            } else {
                console.error("Error submitting form:", response.status);
                alert("Oops! Something went wrong. Please call us directly.");
                submitBtn.innerText = originalText;
                submitBtn.disabled = false;
            }
        } catch (error) {
            console.error("Network error:", error);
            alert("Network error. Please try again.");
            submitBtn.innerText = originalText;
            submitBtn.disabled = false;
        }
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
  window.onscroll = function() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
      backToTopBtn.style.display = "block";
    } else {
      backToTopBtn.style.display = "none";
    }
  };

  // Scroll to top when clicked
  backToTopBtn.addEventListener("click", function() {
    window.scrollTo({
      top: 0,
      behavior: "smooth" // Uses the smooth scrolling you already set in CSS
    });
  });


