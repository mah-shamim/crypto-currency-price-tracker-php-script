<!DOCTYPE html>
<html lang="en">
<?php include('admin/head.php'); ?>
<?php include('admin/header.php'); ?>
<br><br>

<style>
    .error-section {
        background-color: #ffffff;
        padding: 60px 20px;
        max-width: 90%;
        margin: 60px auto;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    .error-section h1 {
        font-size: 6em;
        color: #ff4c4c;
        margin-bottom: 20px;
    }
    .error-section h2 {
        font-size: 2em;
        color: #333;
        margin-bottom: 10px;
    }
    .error-section p {
        font-size: 1.2em;
        line-height: 1.6;
        color: #555;
        margin-bottom: 20px;
    }
    .error-section .btn-home {
        display: inline-block;
        padding: 12px 30px;
        font-size: 1em;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        text-decoration: none;
        transition: background-color 0.3s;
    }
    .error-section .btn-home:hover {
        background-color: #0056b3;
    }
</style>

<div class="error-section">
    <h1>Features</h1>
    <h2>Our Features</h2>
    <p>Sorry, the page you are looking for does not exist or has been moved. Please check the URL or return to the homepage.</p>
    <a href="/" class="btn-home">Go to Homepage</a>
</div>

<?php include('admin/trial.php'); ?>
<?php include('admin/rtl.php'); ?>
<?php include('admin/footer.php'); ?>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/paroller.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
