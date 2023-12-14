document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita que el formulario se envíe de forma predeterminada.

    // Obtiene los valores de los campos de entrada.
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Realiza la validación de las credenciales (puedes usar una API o base de datos para esto).
    if (username === "Marco" && password === "123") {
        alert("Inicio de sesión exitoso");
        

        // Redirige al usuario a una página de inicio, por ejemplo: window.location.href = "pagina-de-inicio.html";
    } else {
        alert("Nombre de usuario o contraseña incorrectos");
    }
});




