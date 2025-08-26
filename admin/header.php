<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    .responsive-header {
        background-color: #cfcdcd;
        padding: 15px 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
    }

    .header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .header-logo {
        display: flex;
        align-items: center;
        color: #333;
    }

    .logo-icon {
        font-size: 24px;
        margin-right: 8px;
        color: #007bff;
    }

    .logo-text {
        font-size: 24px;
        font-family: "Rubik Wet Paint", system-ui;
        color: #fff;
    }

    .logo-highlight {
        color: #007bff;
    }

    .header-menu {
        display: flex;
        justify-content: center;
        flex-grow: 1;
    }

    .menu-link {
        text-decoration: none;
        color: #333;
        font-size: 16px;
        margin: 0 15px;
        font-weight: bold;
        position: relative;
        transition: color 0.3s;
    }

    .menu-link::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #007bff;
        transition: width 0.3s;
    }

    .menu-link:hover {
        color: #007bff;
    }

    .menu-link:hover::after {
        width: 100%;
    }

    .header-right {
        display: flex;
        align-items: center;
        padding: 0 15px;
    }

    .header-icon {
        color: #333;
        font-size: 20px;
        margin-left: 10px;
        position: relative;
        transition: color 0.3s;
        padding: 5px;
        border-radius: 5px;
    }

    .header-icon::after {
        content: '';
        position: absolute;
        width: 1px;
        height: 20px;
        background-color: #ccc;
        right: -5px;
        top: 50%;
        transform: translateY(-50%);
    }

    .header-icon:last-child::after {
        display: none;
    }

    .header-icon:hover {
        color: #007bff;
    }

    .mode-icon {
        font-size: 20px;
        cursor: pointer;
        margin-left: 10px;
        transition: color 0.3s;
    }

    .mode-icon:hover {
        color: #007bff;
    }

    .mobile-menu {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 60px;
        right: 20px;
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .mobile-menu a {
        padding: 10px 20px;
        color: #333;
        text-decoration: none;
        transition: background 0.3s;
    }

    .mobile-menu a:hover {
        background: #f0f0f0;
    }

    .mobile-toggle {
        display: none;
        font-size: 24px;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .header-menu {
            display: none;
        }
        .mobile-toggle {
            display: block;
        }
        .mobile-menu {
            display: flex;
        }
    }

    .dark-mode {
        background-color: #121212;
        color: #ffffff;
    }

    .dark-mode .menu-link {
        color: #b0b0b0;
    }

    .dark-mode .menu-link:hover {
        color: #007bff;
    }

    .dark-mode .header-icon,
    .dark-mode .mode-icon {
        color: #b0b0b0;
    }

    .dark-mode .header-icon:hover,
    .dark-mode .mode-icon:hover {
        color: #007bff;
    }

    .dark-mode .mobile-menu {
        background-color: #1e1e1e;
        border-color: #444;
    }

    .dark-mode .mobile-menu a {
        color: #b0b0b0;
    }

    .dark-mode .mobile-menu a:hover {
        background: #333;
    }
</style>

<header class="responsive-header">
    <div class="header-container">
        <div class="header-logo">
           <i class="fas fa-bolt logo-icon"></i>
           <a href="/" class="logo-link">
    <span class="logo-text">C C<span class="logo-highlight"> Price Tracker</span></span>
</a>
</span>
        </div>
        <i class="fas fa-bars mobile-toggle" id="mobile-toggle"></i>
        <div class="header-menu" id="desktop-menu">
            <a href="/" class="menu-link">Home</a>
            <a href="about.php" class="menu-link">About</a>
            <a href="features.php" class="menu-link">Features</a>
            <a href="contact.php" class="menu-link">Contact</a>
        </div>
        <div class="mobile-menu" id="mobile-menu">
            <a href="/" class="menu-link">Home</a>
            <a href="about.php" class="menu-link">About</a>
            <a href="features.php" class="menu-link">Features</a>
            <a href="contact.php" class="menu-link">Contact</a>
        </div>
        <div class="header-right">
            <a href="contact.php" class="help-link">
                <i class="fas fa-headset header-icon"></i>
            </a>
            <i id="mode-icon" class="fas fa-sun mode-icon"></i>
        </div>
    </div>
</header>
<script>
    const modeIcon = document.getElementById('mode-icon');
    const mobileToggle = document.getElementById('mobile-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    modeIcon.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        if (document.body.classList.contains('dark-mode')) {
            modeIcon.classList.remove('fa-sun');
            modeIcon.classList.add('fa-moon');
        } else {
            modeIcon.classList.remove('fa-moon');
            modeIcon.classList.add('fa-sun');
        }
    });

    mobileToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('mobile-menu-show');
        if (mobileMenu.classList.contains('mobile-menu-show')) {
            mobileMenu.style.display = 'flex';
        } else {
            mobileMenu.style.display = 'none';
        }
    });
</script>
