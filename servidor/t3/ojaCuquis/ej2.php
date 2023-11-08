<?php

 

?>





<!DOCTYPE html>
<html>
<head>
    <title>Periódico</title>
</head>
<body>
    <h1>Seleccione el tipo de titular:</h1>
    <form>
        <input type="radio" id="noticia-politica" name="titular" value="Noticia Política">
        <label for="noticia-politica">Noticia Política</label><br>

        <input type="radio" id="noticia-economica" name="titular" value="Noticia Económica">
        <label for="noticia-economica">Noticia Económica</label><br>

        <input type="radio" id="noticia-deportiva" name="titular" value="Noticia Deportiva">
        <label for="noticia-deportiva">Noticia Deportiva</label><br>

        <input type="button" value="Mostrar Titular" onclick="mostrarTitular()">
    </form>

    <div id="titular" style="display: none;">
        <h2>Titular:</h2>
        <p id="titular-text"></p>
    </div>

    <script>
        function mostrarTitular() {
            var selectedTitular = document.querySelector('input[name="titular"]:checked').value;

            document.getElementById("titular").style.display = "block";
            document.getElementById("titular-text").innerText = selectedTitular;

            var d = new Date();
            d.setTime(d.getTime() + (30 * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = "selectedTitular=" + selectedTitular + "; " + expires;
        }

        function checkCookie() {
            var cookieValue = getCookie("selectedTitular");
            if (cookieValue !== "") {
                document.getElementById("titular").style.display = "block";
                document.getElementById("titular-text").innerText = cookieValue;
            }
        }

        function getCookie(cookieName) {
            var name = cookieName + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var cookieArray = decodedCookie.split(';');
            for (var i = 0; i < cookieArray.length; i++) {
                var c = cookieArray[i];
                while (c.charAt(0) === ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) === 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        window.onload = checkCookie;
    </script>
</body>
</html>