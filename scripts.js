// Ouvrir/fermer le menu burger

document.addEventListener("DOMContentLoaded", function() {
    const menuToggle = document.querySelector("#menu-toggle"); // Sélectionner le burger
    const nav = document.querySelector(".main-navigation"); // Sélectionner le menu principal

    menuToggle.addEventListener("click", function() {
        nav.classList.toggle("open"); // Afficher/masquer le menu
        menuToggle.classList.toggle("open"); // Activer/désactiver la transformation du burger
    });
});
