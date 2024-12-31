document.addEventListener("DOMContentLoaded", () => {
    // Get all menu buttons and sections
    const buttons = document.querySelectorAll(".category-btn");
    const sections = document.querySelectorAll(".menu-section");

    // Add click event listeners to buttons
    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            const targetId = button.getAttribute("data-target");

            // Hide all sections
            sections.forEach((section) => {
                section.style.display = "none";
            });

            // Show the targeted section
            const targetSection = document.getElementById(targetId);
            if (targetSection) {
                targetSection.style.display = "block";
            }

            //remove active calss form all buttons
            buttons.forEach((btn) => {
                btn.classList.remove("active");
            });

            //add active button
            button.classList.add("active");
        });
    });
});