document.addEventListener('DOMContentLoaded', function() {
    const colorInput = document.getElementById('colorInput');
    const widthInput = document.getElementById('widthInput');
    const textBox = document.getElementById('textBox');

    // Handle color input live
    colorInput.addEventListener('input', function() {
        const color = colorInput.value.trim();
        if (color) {
            textBox.style.color = color;
        }
    });

    // Handle border width input live
    widthInput.addEventListener('input', function() {
        let width = widthInput.value.trim();

        // If user types just a number, add "px" by default
        if (/^\d+$/.test(width)) {
            width += "px";
        }

        textBox.style.borderStyle = "solid";
        textBox.style.borderColor = "black";
        textBox.style.borderWidth = width;
    });
});

