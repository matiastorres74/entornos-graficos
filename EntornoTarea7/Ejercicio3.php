<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 | Formulario con Cookie</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        input, button {
            padding: 10px;
            margin: 5px;
        }
    </style>
</head>
<body>

    <h1>Bienvenido</h1>

    <form id="userForm" onsubmit="saveUser(event)">
        <label for="username">Ingrese nombre de usuario:</label><br>
        <input type="text" id="username" name="username" required><br>
        <button type="submit">Guardar Nombre</button>
    </form>

    <p id="lastUser"></p>

    <script>
        function setCookie(name, value, days) {
            const d = new Date();
            d.setTime(d.getTime() + (days*24*60*60*1000));
            let expires = "expires=" + d.toUTCString();
            document.cookie = name + "=" + encodeURIComponent(value) + ";" + expires + ";path=/";
        }

        function getCookie(name) {
            let cname = name + "=";
            let decodedCookie = decodeURIComponent(document.cookie);
            let ca = decodedCookie.split(';');
            for(let i = 0; i < ca.length; i++) {
                let c = ca[i].trim();
                if (c.indexOf(cname) == 0) {
                    return c.substring(cname.length, c.length);
                }
            }
            return "";
        }

        window.onload = function() {
            const lastUser = getCookie("username");
            if (lastUser != "") {
                document.getElementById("username").value = lastUser;
                document.getElementById("lastUser").innerText = "Último usuario ingresado: " + lastUser;
            }
        }

        function saveUser(event) {
            event.preventDefault(); 
            const username = document.getElementById("username").value;
            setCookie("username", username, 365); 
            document.getElementById("lastUser").innerText = "Último usuario ingresado: " + username;
            alert("Usuario guardado correctamente.");
        }
    </script>

</body>
</html>