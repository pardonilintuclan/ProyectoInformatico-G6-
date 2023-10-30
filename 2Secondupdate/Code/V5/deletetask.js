function deletetask(id) {
    // Post task on database
    fetch('deletetask.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ id: id })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Task deleted successfully, refresh interface
            document.getElementById("task").value = "";
            
        } else {
            // Handle the case where the task could not be deleted
            console.error('Error trying delete task:', data.error);
        }
    })
    .catch(error => console.error('Error:', error));
}

