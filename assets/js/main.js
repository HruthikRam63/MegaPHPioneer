// JavaScript for MegaPHPioneer custom functionality
document.addEventListener("DOMContentLoaded", function() {
    console.log("MegaPHPioneer JS Loaded");
    
    // Example of a simple function to confirm navigation
    const accessLink = document.querySelector('a');
    accessLink.addEventListener('click', function(e) {
        const confirmAccess = confirm("Do you want to enter the Moodle portal?");
        if (!confirmAccess) {
            e.preventDefault();
        }
    });
});
