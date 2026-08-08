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
                if(carName.includes('Swift')) calcCar.value = "14";
                else if(carName.includes('Etios')) calcCar.value = "18";
                else if(carName.includes('Bolero')) calcCar.value = "24";
                else if(carName.includes('Innova')) calcCar.value = "28";
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
            return;
        }

        if (!km || km <= 0) {
            resultDiv.style.display = 'block';
            resultDiv.style.background = '#ffebee';
            resultDiv.style.color = '#c62828';
            resultDiv.innerHTML = "⚠️ Please enter a valid distance.";
            return;
        }

        const driverAllowance = 300;
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
                Distance: ${km} km | Days: ${days}<br>
                *Includes driver allowance. Tolls & Parking extra.
            </div>
            
            <div class="form-group" style="text-align: left; margin-bottom: 15px;">
                <label for="calc-phone" style="font-size: 0.9rem; font-weight: 600; color: #333; display: block; margin-bottom: 5px;">Enter Phone Number to Book:</label>
                <input type="tel" id="calc-phone" placeholder="+91 98765 43210" style="width: 50%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;" required>
            </div>

            <button id="bookEstimateBtn" class="cta-btn" style="background:#1a1a1a; color:white; border:none; padding:12px 20px; border-radius:4px; cursor:pointer; width: 100%; opacity: 0.5;" disabled>
                Book This Price
            </button>
        `;
        
        const calcPhoneInput = document.getElementById('calc-phone');
        const bookBtn = document.getElementById('bookEstimateBtn');

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
                bookBtn.innerText = "Submitting Booking...";
                bookBtn.disabled = true;

                const formData = new URLSearchParams();
                formData.append("form-name", "estimate-booking");
                formData.append("car", carName);
                formData.append("pickup", pickup);
                formData.append("drop", drop);
                formData.append("distance", km + " km");
                formData.append("days", days);
                formData.append("estimated_cost", formattedTotal);
                formData.append("phone", phone);

                try {
                    const response = await fetch("/", {
                        method: "POST",
                        headers: { 
                            "Content-Type": "application/x-www-form-urlencoded"
                        },
                        body: formData.toString()
                    });

                    if (response.ok) {
                        alert("Booking request sent successfully! We will contact you shortly.");
                        resultDiv.style.display = 'none';
                        document.getElementById('calc-pickup').value = '';
                        document.getElementById('calc-drop').value = '';
                        document.getElementById('calc-km').value = '';
                        document.getElementById('calc-days').value = '1';
                    } else {
                        console.error("Error submitting booking:", response.status);
                        alert("Oops! Something went wrong. Please call us directly.");
                        bookBtn.innerText = originalText;
                        bookBtn.disabled = false;
                    }
                } catch (error) {
                    console.error("Network error:", error);
                    alert("Network error. Please try again.");
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

// Dynamic Year in Footer
const yearSpan = document.getElementById('current-year');
if (yearSpan) {
    yearSpan.innerText = new Date().getFullYear();
}