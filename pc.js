document.addEventListener("DOMContentLoaded", function() {
    const productCards = document.querySelectorAll('.product-card');
    productCards.forEach(card => {
        card.style.opacity = 0;
        setTimeout(() => {
            card.style.transition = 'opacity 0.5s';
            card.style.opacity = 1;
        }, 100);
    });
});
