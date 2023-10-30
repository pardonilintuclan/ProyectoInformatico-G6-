document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("login");
    const message = document.getElementById("message");

    loginForm.addEventListener("submit", function (e) {
        e.preventDefault();
        const username = document.getElementById("inputusr").value;
        const password = document.getElementById("inputpassword").value;

        // Make an AJAX request to the server to verify credentials
        fetch("login.php", {
            method: "POST",
            body: JSON.stringify({ username, password }),
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.success) {
                    message.textContent = "Sign in succesfull.";
                    // Redirect to taskmanager
                    
                    window.location.href = "tasklog.html";
                } else {
                    message.textContent = "Incorrect credentials. Please try again.";
                }
            })
            .catch((error) => {
                alert ("Conection error");
            });
    });
});

