<!DOCTYPE html><html lang="en">
<?php include('admin/head.php'); ?>
<?php include('admin/header.php'); ?>
<?php include('admin/hero.php'); ?>
<?php include('ads/top.php'); ?>
<?php include('admin/config.php'); ?>
<?php include('admin/tool.php'); ?>
<?php include('ads/center.php'); ?>
<?php include('admin/features.php'); ?>
<?php include('ads/bottom.php'); ?>
<?php include('admin/article.php'); ?>
<?php include('admin/faq.php'); ?> 
<?php include('admin/footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paroller.js/1.4.1/jquery.paroller.min.js" integrity="sha512-jYedLgTWxBXtDBdGhnUgCgbgQ5j450R2LhxXk1G+pBcbaARaEC/qsrIhOtqAAiY7UBylc6bVGH6EFR10RNBXuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha512-NqYds8su6jivy1/WLoW8x1tZMRD7/1ZfhWG/jcRQLOzV1k1rIODCpMgoBnar5QXshKJGV7vi0LXLNXPoFsM5Zg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/jquery.magnific-popup.min.js" integrity="sha512-fCRpXk4VumjVNtE0j+OyOqzPxF1eZwacU3kN3SsznRPWHgMTSSo7INc8aY03KQDBWztuMo5KjKzCFXI/a5rVYQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.3.2/countUp.umd.js"></script>
    <script src="assets/js/main.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
   <style>
    /* Back to Top Button Styles */
    .back-to-top {
        display: none; /* Initially hide the button */
        position: fixed; /* Fixed position */
        bottom: 20px; /* Space from the bottom */
        right: 20px; /* Space from the right */
        background-color: #007bff; /* Button color */
        color: white; /* Text color */
        border: none; /* No border */
        border-radius: 5px; /* Rounded corners */
        width: 50px; /* Fixed width */
        height: 50px; /* Fixed height */
        font-size: 20px; /* Font size */
        cursor: pointer; /* Pointer cursor */
        z-index: 1000; /* Ensure it's on top */
        transition: background-color 0.3s; /* Smooth transition */
        display: flex; /* Center icon */
        align-items: center; /* Center vertically */
        justify-content: center; /* Center horizontally */
    }

    .back-to-top:hover {
        background-color: #0056b3; /* Darker color on hover */
    }
</style>

    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top">↑ Top</button>

    <script>
        // Get the button
        const backToTopButton = document.getElementById('backToTop');

        // Show or hide the button based on scroll position
        window.onscroll = function() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                backToTopButton.style.display = "block"; // Show the button
            } else {
                backToTopButton.style.display = "none"; // Hide the button
            }
        };

        // Scroll to the top when the button is clicked
        backToTopButton.onclick = function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // Smooth scroll effect
            });
        };
    </script>
    <script defer="" src="js/lazy.js"></script>
</body></html>