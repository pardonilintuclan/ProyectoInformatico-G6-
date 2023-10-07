document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("Login");
    const message = document.getElementById("message");

    loginForm.addEventListener("submit", function (e) {
        e.preventDefault();
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        // Realizar una solicitud AJAX al servidor para verificar las credenciales
        fetch("check_login.php", {
            method: "POST",
            body: JSON.stringify({ username, password }),
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.success) {
                    message.textContent = "Inicio de sesión exitoso.";
                    // Redirigir al usuario a su página de inicio
                    window.location.href = "inicio.html";
                } else {
                    message.textContent = "Credenciales incorrectas. Inténtalo de nuevo.";
                }
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    });
});
