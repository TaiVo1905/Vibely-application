document.querySelectorAll(".toggle-password").forEach(item => {
    item.addEventListener("click", function() {
        let input = this.previousElementSibling;
        if (input.type === "password") {
            input.type = "text";
            this.classList.add("fa-eye-slash");
        } else {
            input.type = "password";
            this.classList.remove("fa-eye-slash");
        }
    });
});
