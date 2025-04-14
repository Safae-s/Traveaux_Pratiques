const taskForm = document.getElementById('taskForm');
const taskInput = document.getElementById('taskInput');
const taskList = document.getElementById('taskList');

// Lors de la soumission du formulaire
taskForm.addEventListener('submit', function(e) {
    e.preventDefault(); // Empêcher le rechargement

    const taskText = taskInput.value.trim();
    if (taskText !== "") {
        addTask(taskText);
        taskInput.value = ""; // Réinitialiser le champ
    }
});

// Fonction pour ajouter une tâche
function addTask(text) {
    const li = document.createElement('li');
    li.textContent = text;

    const buttonContainer = document.createElement('div');
    buttonContainer.className = "task-buttons";

    // Bouton terminer
    const doneBtn = document.createElement('button');
    doneBtn.textContent = "✅";
    doneBtn.className = "done-btn";
    doneBtn.addEventListener('click', function() {
        li.classList.toggle('done');
    });

    // Bouton supprimer
    const deleteBtn = document.createElement('button');
    deleteBtn.textContent = "❌";
    deleteBtn.addEventListener('click', function() {
        li.remove();
    });

    buttonContainer.appendChild(doneBtn);
    buttonContainer.appendChild(deleteBtn);

    li.appendChild(buttonContainer);
    taskList.appendChild(li);
}
