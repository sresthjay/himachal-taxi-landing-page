// 1. Car Selection Logic (Fleet Cards)
const fleetButtons = document.querySelectorAll('.fleet-cta');
fleetButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault(); 
        const carName = btn.getAttribute('data-car'); // Get value
        
        // SAFETY CHECK: If data-car is missing, stop
        if (!carName) {
            console.error("Missing data-car attribute on fleet button");
            return;
        }

        const formSection = document.getElementById('booking-form');
        
        if (formSection) {
            formSection.scrollIntoView({ behavior: 'smooth' });
            
            const calcCar = document.getElementById('calc-car');
            if (calcCar) {
                // Use includes safely
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
        const carRate = parseFloat(document.getElementById('calc-car').value);
        const km = parseFloat(document.getElementById('calc-km').value);
        const days = parseFloat(document.getElementById('calc-days').value);
        const resultDiv = document.getElementById('calc-result');

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
        
        // Generate the button WITHOUT inline onclick
        resultDiv.innerHTML = `
            <div style="font-size: 1.2rem; margin-bottom: 5px;">Estimated Cost:</div>
            <div style="font-size: 2rem; font-weight: 800;">${formattedTotal}</div>
            <div style="font-size: 0.85rem; margin-top: 5px; color: #555;">
                *Includes driver allowance. Tolls & Parking extra.
            </div>
            <button id="bookEstimateBtn" style="margin-top:10px; background:#2e7d32; color:white; border:none; padding:8px 16px; border-radius:4px; cursor:pointer;">
                Book This Price
            </button>
        `;
        
        // Add event listener to the NEWLY created button
        const bookBtn = document.getElementById('bookEstimateBtn');
        if (bookBtn) {
            bookBtn.addEventListener('click', () => {
                document.getElementById('booking-form').scrollIntoView({behavior:'smooth'});
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