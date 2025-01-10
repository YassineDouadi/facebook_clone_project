// Example: Basic form validation
document.querySelector("form").addEventListener("submit", function (e) {
    const name = document.getElementById("name").value.trim();
    const phone = document.getElementById("phone").value.trim();

    if (!name || !phone) {
        alert("Please fill out all fields.");
        e.preventDefault();
    }
});
