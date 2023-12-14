document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("login-form");
    loginForm.addEventListener("submit", function (event) {
      event.preventDefault();
  
      const username = document.getElementById("username").value;
      const password = document.getElementById("password").value;
  
      // Realizar una solicitud AJAX a verificar_login.php
      const xhr = new XMLHttpRequest();
      xhr.open("POST", "verificar_login.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          const response = xhr.responseText;
          if (response === "true") {
            // Inicio de sesión exitoso
            alert("Inicio de sesión exitoso");
            // Puedes redirigir al usuario a otra página aquí si es necesario
          } else {
            // Credenciales incorrectas
            alert("Credenciales incorrectas. Por favor, inténtalo de nuevo.");
          }
        }
      };
      xhr.send(`username=${username}&password=${password}`);
    });
  });