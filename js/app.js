document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Show the confirmation modal
    const modal = document.getElementById('confirmation-modal');
    modal.style.display = 'block';
    
    // Reset the form
    this.reset();
});

// Close the modal when the close button is clicked
document.querySelector('.close-button').addEventListener('click', function() {
    const modal = document.getElementById('confirmation-modal');
    modal.style.display = 'none';
});

// Close the modal when clicking outside of the modal
window.addEventListener('click', function(event) {
    const modal = document.getElementById('confirmation-modal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});
