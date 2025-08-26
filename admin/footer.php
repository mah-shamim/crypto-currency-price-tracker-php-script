<!--============= Stylish Footer Section =============-->
<footer class="stylish-footer">
    <div class="footer-background">
        <div class="footer-container">
            <!-- Logo -->
            <div class="footer-logo">
                <span class="text-logo"><span class="color-one">HI</span><span class="color-two">TS</span></span> <!-- Text Logo -->
            </div>

            <!-- About Section -->
            <div class="footer-about">
                <p>We provide real-time cryptocurrency tracking services with a focus on accuracy, speed, and security.</p>
            </div>

            <!-- Social Icons -->
            <div class="footer-social-icons">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            </div>

            <!-- Footer Menu -->
            <ul class="footer-menu">
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="terms.php">Terms of Service</a></li>
                <li><a href="privacy.php">Privacy Policy</a></li>
            </ul>

            <!-- Copyrights -->
            <div class="footer-copyright">
                <p>&copy; <span class="currentYear"></span> HITS. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!--============= Stylish Footer Section Ends Here =============-->

<style>
 /* General Footer Styles */
.stylish-footer {
    position: relative;
    padding: 40px 20px;
    background-color: #333; /* Dark background for crypto theme */
    color: #fff;
    text-align: center;
    overflow: hidden;
}

/* Background Pattern - Lined */
.footer-background {
    position: relative;
    background: repeating-linear-gradient(
        to right,
        rgba(255, 255, 255, 0.05) 0px,
        rgba(255, 255, 255, 0.05) 1px,
        transparent 1px,
        transparent 20px
    );
    padding: 40px;
}

/* Logo Styling */
.footer-logo {
    margin-bottom: 20px;
}

.text-logo {
    font-size: 24px;
    font-weight: bold;
}

.color-one {
    color: #fff; /* First color for crypto theme */
}

.color-two {
    color: #007bff; /* Second color for crypto theme */
}

/* About Section */
.footer-about {
    font-size: 14px;
    color: #ccc; /* Lighter color for better readability */
    margin-bottom: 20px;
}

/* Social Icons */
.footer-social-icons {
    margin-bottom: 20px;
}

.footer-social-icons .social-icon {
    display: inline-block;
    margin: 0 10px;
    color: #fff;
    font-size: 18px;
    transition: color 0.3s;
}

.footer-social-icons .social-icon:hover {
    color: #f5a623; /* Hover color */
}

/* Footer Menu */
.footer-menu {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 20px;
}

.footer-menu li {
    display: inline;
}

.footer-menu a {
    color: #fff;
    text-decoration: none;
    font-size: 14px;
    cursor: pointer;
    transition: color 0.3s;
}

.footer-menu a:hover {
    color: #f5a623; /* Hover color */
}

/* Copyright Text */
.footer-copyright {
    font-size: 12px;
    color: #ccc;
}

/* Year Script */
.currentYear {
    color: #f5a623; /* Match crypto theme color */
}

/* Responsive Styles */
@media (max-width: 768px) {
    .footer-container {
        padding: 20px;
    }

    .footer-menu {
        flex-direction: column;
        gap: 10px;
    }

    .footer-about,
    .footer-copyright {
        font-size: 12px;
    }
}
</style>
