// script.js
document.addEventListener('DOMContentLoaded', function () {
    const elements = [
        { id: 'title', text: "Hi, I'm Fannich Salma" },
        { id: 'subtitle', text: "Data & Software Engineering Student" },
         
    ];

    elements.forEach(element => typeWriter(element.id, element.text, 50));
});

function typeWriter(id, text, speed) {
    let i = 0;
    const element = document.getElementById(id);
    
    function type() {
        if (i < text.length) {
            element.textContent += text.charAt(i);
            i++;
            setTimeout(type, speed);
        }
    }

    type();
}
