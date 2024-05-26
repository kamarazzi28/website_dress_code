const triangleBtn = document.getElementById('triangleBtn');
const invertedTriangleBtn = document.getElementById('invertedTriangleBtn');
const appleBtn = document.getElementById('appleBtn');
const rectangleBtn = document.getElementById('rectangleBtn');
const hourglassBtn = document.getElementById('hourglassBtn');

const triangleSection = document.getElementById('triangle');
const invertedTriangleSection = document.getElementById('inverted-triangle');
const appleSection = document.getElementById('apple');
const rectangleSection = document.getElementById('rectangle');
const hourglassSection = document.getElementById('hourglass');

function scrollToTriangle() {
    if (triangleSection) {
        triangleSection.scrollIntoView({ behavior: 'smooth' });
    }
}

function scrollToInvertedTriangle() {
    if (invertedTriangleSection) {
        invertedTriangleSection.scrollIntoView({ behavior: 'smooth' });
    }
}

function scrollToApple() {
    if (appleSection) {
        appleSection.scrollIntoView({ behavior: 'smooth' });
    }
}

function scrollToRectangle() {
    if (rectangleSection) {
        rectangleSection.scrollIntoView({ behavior: 'smooth' });
    }
}

function scrollToHourglass() {
    if (hourglassSection) {
        hourglassSection.scrollIntoView({ behavior: 'smooth' });
    }
}

triangleBtn.addEventListener('click', scrollToTriangle);
invertedTriangleBtn.addEventListener('click', scrollToInvertedTriangle);
appleBtn.addEventListener('click', scrollToApple);
rectangleBtn.addEventListener('click', scrollToRectangle);
hourglassBtn.addEventListener('click', scrollToHourglass);
