const taskForm = document.querySelector(".detailForm");
const adminSec = document.querySelector(".Container");

function showForm() {
    taskForm.classList.add("fixed", "flex", "justify-center", "items-center");
    adminSec.style.webkitFilter = "blur(5px)"
    taskForm.classList.remove("hidden");
}

function closeForm() {
    taskForm.classList.remove("fixed", "flex", "justify-center", "items-center");
    adminSec.style.webkitFilter = "blur(0px)"
    taskForm.classList.add("hidden");
}