function addtask() {
    var task = document.getElementById("task").value;

    // Post task to database
    fetch('addtask.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ task: task })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Succesfull adding task
            
            document.getElementById("task").value = ""; // clean textbox
        } else {
            // Fail adding task
            console.error('Error adding new task:', data.error);
        }
    })
    .catch(error => console.error('Error:', error));
}
