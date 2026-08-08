// 1. Car Selection Logic (Fleet Cards)
const fleetButtons = document.querySelectorAll('.fleet-cta');
fleetButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault(); // Prevent default anchor jump
        const carName = btn.getAttribute('data-car'); // Get car name from data attribute

        // Scroll to form
        const formSection = document.getElementById('booking-form');
        if (formSection) {
            formSection.scrollIntoView({ behavior: 'smooth' });

            // Pre-select in calculator
            const calcCar = document.getElementById('calc-car');
            if (calcCar) {
                if (carName.includes('Swift')) calcCar.value = "14";
                else if (carName.includes('Etios')) calcCar.value = "18";
                else if (carName.includes('Bolero')) calcCar.value = "24";
                else if (carName.includes('Innova')) calcCar.value = "28";
            }

            // Highlight the "Calculate" button to draw attention
            const calcBtn = document.getElementById('calcBtn');
            if (calcBtn) {
                calcBtn.style.transform = "scale(1.05)";
                setTimeout(() => calcBtn.style.transform = "scale(1)", 300);
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

        resultDiv.innerHTML = `
            <div style="font-size: 1.2rem; margin-bottom: 5px;">Estimated Cost:</div>
            <div style