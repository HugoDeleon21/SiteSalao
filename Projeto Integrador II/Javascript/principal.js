// Função para abrir um modal específico
function showModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.add("show-modal");
  }
}

// Função para fechar um modal específico
function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.remove("show-modal");
  }
}

// Event listener para fechar o modal ao clicar fora dele
window.onclick = function (event) {
  const modals = document.querySelectorAll(".modal");
  modals.forEach((modal) => {
    if (event.target === modal) {
      modal.classList.remove("show-modal");
    }
  });
};