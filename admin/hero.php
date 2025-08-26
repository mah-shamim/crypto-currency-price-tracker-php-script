<style>
    .hero-section {
        position: relative;
        height: 70px;
        padding: 0px;
        background: linear-gradient(to top, #fff, #fff);
        color: #333;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden; /* Ensure the background does not overflow */
    }

    .hero-background {
        position: absolute; /* Position absolutely to cover the section */
        top: 0;
        left: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        background: repeating-linear-gradient(
            to right,
            rgba(0, 0, 0, 0.05) 0px,
            rgba(0, 0, 0, 0.05) 1px,
            transparent 1px,
            transparent 20px
        );
        z-index: 0; /* Place the background behind the content */
    }

    .hero-content {
        position: relative; /* Ensure content is above the background */
        z-index: 1;
        max-width: 100%;
        padding: 0 20px;
    }

    .hero-title {
        font-size: 26px;
        color:#333;
        margin-bottom: 0px;
        font-weight: bold;
        display: inline-block;
        white-space: nowrap;
        overflow: hidden;
        border-right: 3px solid #fff;
        animation: typing 3s steps(30, end), blink-caret 0.5s step-end infinite;
    }

    .hero-subtitle {
        font-size: 18px;
        color: #ccc;
        margin-bottom: 0px;
    }

    .hero-button {
        display: inline-block;
        padding: 12px 24px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .hero-button:hover {
        background-color: #0056b3;
    }

    @media (max-width: 768px) {
        .hero-title {
            font-size: 28px;
        }

        .hero-subtitle {
            font-size: 16px;
        }

        .hero-button {
            padding: 10px 20px;
        }
    }

    @media (max-width: 480px) {
        .hero-title {
            font-size: 24px;
        }

        .hero-subtitle {
            font-size: 14px;
        }
    }

    /* Typewriting effect keyframes */
    @keyframes typing {
        from {
            width: 0;
        }
        to {
            width: 100%;
        }
    }

    @keyframes blink-caret {
        from, to {
            border-color: transparent;
        }
        50% {
            border-color: #fff;
        }
    }
    /* Dark Mode for Hero Section */
.dark-mode .hero-section {
    background: linear-gradient(to top, #121212, #1e1e1e); /* Dark gradient background */
    color: #f5f5f5; /* Light text color */
}

.dark-mode .hero-background {
    background: repeating-linear-gradient(
        to right,
        rgba(255, 255, 255, 0.05) 0px,
        rgba(255, 255, 255, 0.05) 1px,
        transparent 1px,
        transparent 20px
    ); /* Adjust the gradient to a lighter color */
}

.dark-mode .hero-title {
    color: #f5f5f5; /* Light text for title */
    border-color: #f5f5f5; /* Adjust caret color for visibility */
}

.dark-mode .hero-subtitle {
    color: #bbbbbb; /* Softer gray for subtitles */
}


.dark-mode .hero-button {
    background-color: #1a73e8; /* Brighter button color for contrast */
    color: #fff; /* White text for button */
}

.dark-mode .hero-button:hover {
    background-color: #1558b2; /* Darker hover effect for button */
}

</style>

<section class="hero-section">
    <div class="hero-background"></div>
    <div class="hero-content">
        <h1 class="hero-title">Cryptocurrency Price Tracker
</h1>
    </div>
</section>
