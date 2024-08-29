// JavaScript для параллакса
document.addEventListener('DOMContentLoaded', function() {
    const body = document.querySelector('body');
    const backgroundImage = 'url(/images/background.jpeg)'; // Путь к вашему изображению фона

    // Устанавливаем начальный фон
    body.style.backgroundImage = backgroundImage;

    window.addEventListener('scroll', function() {
        const scrollPosition = window.scrollY;
        // Настройте скорость параллакса, изменив коэффициент. Здесь 0.5 замедляет фон.
        const parallaxSpeed = 0.09;
        const backgroundPosition = `center ${scrollPosition * parallaxSpeed}px`;
        body.style.backgroundPosition = backgroundPosition;
    });
});