document.getElementById('result-button').addEventListener('click', determineShape);

function determineShape(event) {
    event.preventDefault(); // Предотвращение стандартного поведения отправки формы

    const shouldersInput = document.getElementById('shoulders');
    const bustInput = document.getElementById('bust');
    const waistInput = document.getElementById('waist');
    const hipsInput = document.getElementById('hips');

    function showError(input, message) {
        input.classList.add('error-placeholder');
        input.value = '';
        input.placeholder = message;
        input.style.color = 'red';
    }

    function removeError(input) {
        input.classList.remove('error-placeholder');
        input.style.color = ''; // Убираем стилизацию текста
    }

    function validateInput(input) {
        const value = parseInt(input.value.trim());
        if (isNaN(value) || value < 45 || value > 350) {
            return 'Out of range';
        }
        return '';
    }

    const inputs = [shouldersInput, bustInput, waistInput, hipsInput];
    let hasError = false;

    for (const input of inputs) {
        const errorMessage = validateInput(input);
        if (input.value.trim() === '') {
            showError(input, 'Enter a number');
            hasError = true;
        } else if (errorMessage) {
            showError(input, errorMessage);
            hasError = true;
        } else {
            removeError(input);
        }
    }

    if (!hasError) {
        const shouldersValue = parseInt(shouldersInput.value.trim());
        const waistValue = parseInt(waistInput.value.trim());
        const hipsValue = parseInt(hipsInput.value.trim());

        let shapeResult;

        if (hipsValue > shouldersValue && waistValue < shouldersValue) {
            shapeResult = 'triangle.';
        } else if (shouldersValue > hipsValue && waistValue < hipsValue) {
            shapeResult = 'inverted triangle.';
        } else if (shouldersValue > hipsValue && waistValue > hipsValue) {
            shapeResult = 'apple.';
        } else if (Math.abs(shouldersValue - waistValue) < 10 && Math.abs(waistValue - hipsValue) < 10) {
            shapeResult = 'rectangle.';
        } else if (Math.abs(shouldersValue - hipsValue) < 10 && waistValue < shouldersValue) {
            shapeResult = 'hourglass.';
        } else {
            shapeResult = 'unable to determine shape.';
        }

        const resultTextElement = document.getElementById('result-text');
        resultTextElement.innerText = shapeResult;
        resultTextElement.style.display = 'block';

        const resultButton = document.getElementById('result-button');
        resultButton.innerText = shapeResult;
        resultButton.style.display = 'none';
    }
}

