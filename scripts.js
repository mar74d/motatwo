// Ouvrir/fermer le menu burger
document.addEventListener("DOMContentLoaded", function() {
    const menuToggle = document.querySelector("#menu-toggle"); // Sélectionner le burger
    const nav = document.querySelector(".main-navigation"); // Sélectionner le menu principal

    menuToggle.addEventListener("click", function() {
        nav.classList.toggle("open"); // Afficher/masquer le menu
        menuToggle.classList.toggle("open"); // Activer/désactiver la transformation du burger
    });
});

// Ouvrir/fermer la modale de contact
document.addEventListener('DOMContentLoaded', function() {
    const contactLink = document.getElementById('menu-item-87');
    const modalOverlay = document.querySelector('.contact-popup-overlay');
    const closeModal = document.querySelector('.popup-close');
    const nav = document.querySelector(".main-navigation"); // Sélectionner le menu principal
    const menuToggle = document.querySelector("#menu-toggle"); // Sélectionner le burger
console.log(menuToggle)

    // Quand le lien est cliqué, ouvrir la modale et fermer le menu burger
    if (contactLink && modalOverlay) {
        contactLink.addEventListener('click', function(e) {
            e.preventDefault(); // Empêcher le lien de naviguer
            console.log('Lien contact bien cliqué !');

            // Fermer le menu burger si ouvert
            if (nav.classList.contains('open')) {
                nav.classList.remove('open');
                menuToggle.classList.remove('open');
            }

            // Attendre un court délai avant d'ouvrir la modale pour éviter que ça se fasse en même temps
            setTimeout(function() {
                modalOverlay.classList.add('show');
            }, 100); // délai de 100ms pour l'animation du menu burger
        });

        // Quand on clique sur la croix, fermer la modale
        if (closeModal) {
            closeModal.addEventListener('click', function() {
                console.log('Fermeture modale !');
                modalOverlay.classList.remove('show'); // Masquer la modale
            });
        }

        // Quand on clique à l'extérieur de la modale, la fermer
        modalOverlay.addEventListener('click', function(e) {
            if (e.target === modalOverlay) {  // Vérifie si le clic est sur l'overlay (en dehors de la modale)
                console.log('Clic extérieur modale!');
                modalOverlay.classList.remove('show'); // Masquer la modale
            }
        });
    }
});
