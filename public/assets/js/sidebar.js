function setActive(element) {
    document.querySelectorAll('.sidebar a').forEach(item => {
        item.classList.remove('active');
    });

    element.classList.add('active');
}