function loadtask() {
    // Reload list task and clean
    document.getElementById("listtasks").innerHTML = "";

    // Load tasks from database
    fetch('loadtasks.php')
    .then(response => response.json())
    .then(data => {
        data.tasks.forEach(task => {
            var li = document.createElement("li");
            li.className = "list-group-item";
            li.innerText = task.task;

            // Delete task button
            var btndelete = document.createElement("button");
            btndelete.className = "btn btn-danger btn-sm float-right";
            btndelete.innerText = "delete";
            btndelete.onclick = function() { deletetask(task.id); };

            li.appendChild(btndelete);
            document.getElementById("listtasks").appendChild(li);
        });
    })
    .catch(error => console.error('Error:', error));
}