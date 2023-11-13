<!DOCTYPE html>
<html>
<head>
    <title>Slider Form</title>
</head>
<body>

<form>
    <label for="slider">Selecciona un valor:</label>
    <input type="range" id="slider" name="slider" min="1" max="100" step="1" value="50">
    <output for="slider" id="sliderValue">50</output>
</form>

<script>
    // Actualiza el valor del slider en tiempo real
    const slider = document.getElementById('slider');
    const sliderValue = document.getElementById('sliderValue');

    slider.addEventListener('input', function() {
        sliderValue.textContent = slider.value;
    });
</script>

</body>
</html>