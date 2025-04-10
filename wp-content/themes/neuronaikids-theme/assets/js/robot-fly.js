document.addEventListener("DOMContentLoaded", function () {
    const robot = document.getElementById("flying-robot");
    const triggerElement = document.querySelector(".advantages");
    let hasAnimated = false;

    window.addEventListener("scroll", function () {
        const triggerPosition = triggerElement.getBoundingClientRect().top;

        if (!hasAnimated && triggerPosition < window.innerHeight) {
            hasAnimated = true;
            robot.classList.add("animate");

            setTimeout(() => {
                // Получаем координаты после анимации
                const rect = robot.getBoundingClientRect();
                const scrollTop = window.scrollY || window.pageYOffset;
                const scrollLeft = window.scrollX || window.pageXOffset;

                const finalTop = rect.top + scrollTop;
                const finalLeft = rect.left + scrollLeft;

                // Фиксируем робота на месте
                robot.classList.remove("animate");
                robot.style.position = "absolute";
                robot.style.left = `${finalLeft}px`;
                robot.style.top = `${finalTop}px`;
                robot.style.transform = "none";
                robot.style.transition = "none";
                robot.style.opacity = "1";
            }, 3200); // 1.5s + 0.1s буфер
        }
    });
});