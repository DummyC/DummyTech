<?php include 'includes/navbar.php'; ?>
<link rel="stylesheet" href="css/style.css">
<section id="contact">
    <h2>Contact Us</h2>
    <div class="contact-card card">
        <h3>Send us a message!</h3>
        <form id="contact-form">
            <input type="text" placeholder="Name" required>
            <input type="email" placeholder="Email" required>
            <textarea placeholder="Message" required></textarea>
            <button class="project-button" type="submit">Submit</button>
        </form>
    </div>
</section>

<!-- Confirmation Modal -->
<div id="confirmation-modal" style="display:none;">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <p>Thank you for your message!</p>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<script src="js/app.js"></script>
