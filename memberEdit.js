const editButtons = document.querySelectorAll('.edit-btn');

editButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
        const inputField = button.previousElementSibling;
        if (inputField && inputField.tagName === 'INPUT') {
            inputField.disabled = false;
            inputField.focus();
        }
    });
});