document.addEventListener("DOMContentLoaded", function() {
    var dropdown = document.querySelector(".dropdown");
    dropdown.addEventListener("click", function() {
        var dropdownContent = document.querySelector(".dropdown-content");
        dropdownContent.classList.toggle("show");
    });
});