import { Modal } from 'bootstrap';

const modal = new Modal(document.getElementById("delete-modal"));

document.querySelectorAll(".delete-btn").forEach(button => {
    button.addEventListener("click", () => {
        const title = button.dataset.taskTitle;

        document.getElementById('task-title').textContent = title;
    });
});

let formToDelete = null;

document.querySelectorAll('.delete-form').forEach(form => {
    form.addEventListener('submit', (event) => {
        event.preventDefault();

        formToDelete = form;

        modal.show();
    });
});

const confirmDeleteButton = document.getElementById("confirm-delete");

confirmDeleteButton.addEventListener('click', () => {
    formToDelete.submit();
});