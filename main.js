    // 1. Select a car from the fleet grid and scroll to the form
    function selectCar(carName) {
        // Find the destination dropdown in the hero form
        // Note: We are using the ID 'destination' from the hero form
        const destinationSelect = document.getElementById('destination');
        
        // If the user selected "Other", we might want to change it, 
        // but since 'carName' is a vehicle, we should probably add a hidden field 
        // or just scroll down and let them type it in the 'type' or a new field.
        
        // BETTER APPROACH: Since this is a "Taxi" site, selecting a car 
        // should ideally populate a "Preferred Vehicle" field. 
        // But for now, let's just scroll to the form and alert them.
        
        // Scroll smoothly to the calculator/form section
        const formSection = document.getElementById('booking-form');
        if (formSection) {
            formSection.scrollIntoView({ behavior: 'smooth' });
            
            // Optional: Pre-fill the car selection in the calculator if it exists
            const calcCar = document.getElementById('calc-car');
            if (calcCar) {
                // Map car names to values (simplified)
                if(carName.includes('Swift')) calcCar.value = "14";
                else if(carName.includes('Etios')) calcCar.value = "18";
                else if(carName.includes('Bolero')) calcCar.value = "24";
                else if(carName.includes('Innova')) calcCar.value = "28";
            }
            
            // Highlight the "Get Quote" button to draw attention
            const ctaBtn = document.querySelector('.calc-wrapper .cta-btn');
            if(ctaBtn) {
                ctaBtn.style.transform = "scale(1.05)";
                setTimeout(() => ctaBtn.style.transform = "scale(1)", 300);
            }
        }
    }

    // 2. Price Calculator Logic
    function calculatePrice() {
        const carRate = parseFloat(document.getElementById('calc-car').value);
        const km = parseFloat(document.getElementById('calc-km').value);
        const days = parseFloat(document.getElementById('calc-days').value);
        const resultDiv = document.getElementById('calc-result');

        // Validation
        if (!km || km <= 0) {
            resultDiv.style.display = 'block';
            resultDiv.style.background = '#ffebee';
            resultDiv.style.color = '#c62828';
            resultDiv.innerHTML = "⚠️ Please enter a valid distance.";
            return;
        }

        // Logic: (Rate * KM) + (Driver Allowance * Days) + Buffer
        // Driver allowance assumed ₹300/day
        const driverAllowance = 300;
        const total = (carRate * km) + (driverAllowance * days);
        
        // Format currency
        const formattedTotal = new Intl.NumberFormat('en-IN', {
            style: 'currency',
            currency: 'INR',
            maximumFractionDigits: 0
        }).format(total);

        // Display Result
        resultDiv.style.display = 'block';
        resultDiv.style.background = '#e8f5e9';
        resultDiv.style.color = '#2e7d32';
        
        resultDiv.innerHTML = `
            <div style="font-size: 1.2rem; margin-bottom: 5px;">Estimated Cost:</div>
            <div style="font-size: 2rem; font-weight: 800;">${formattedTotal}</div>
            <div style="font-size: 0.85rem; margin-top: 5px; color: #555;">
                *Includes driver allowance. Tolls & Parking extra.
            </div>
            <button onclick="document.getElementById('booking-form').scrollIntoView({behavior:'smooth'})" 
                    style="margin-top:10px; background:#2e7d32; color:white; border:none; padding:8px 16px; border-radius:4px; cursor:pointer;">
                Book This Price
            </button>
        `;
    }

    // 3. FAQ Accordion Logic
    document.querySelectorAll('.faq-question').forEach(item => {
        item.addEventListener('click', event => {
            const parent = item.parentElement;
            
            // Close other open items
            document.querySelectorAll('.faq-item').forEach(child => {
                if (child !== parent) {
                    child.classList.remove('active');
                }
            });

            // Toggle current
            parent.classList.toggle('active');
        });
    });