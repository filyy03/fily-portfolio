window.addEventListener('DOMContentLoaded', () => {
  // Menu burger mobile
  const menu = document.getElementById('menu');
  const links = document.querySelector('.links');

  if (menu && links) {
    menu.addEventListener('click', () => {
      links.classList.toggle('active');
    });
  }
});


//modifier l'url après soumission du formulaire de contact

window.addEventListener('load', () => {
    const msg = document.getElementById('flash-message');
    if (msg) {
        // Supprime le hash de l'URL
        if (window.location.hash === "#contact") {
            history.replaceState(null, '', window.location.pathname);
        }

        // Fais disparaître le message
        setTimeout(() => {
            msg.style.transition = "opacity 0.5s";
            msg.style.opacity = 0;
            setTimeout(() => msg.remove(), 500);
        }, 3000);
    }
});
