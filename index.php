<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            background-color: whitesmoke;

        }

        .image {
            width: 70%

        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 20%;

        }

        .hedline {

            color: whitesmoke;
        }

        .navbar {
            background-color: black;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .headline {
            color: aquamarine;
            font-weight: bold;

        }

        .menu-links {
            color: whitesmoke;
            text-decoration: none;
            margin-right: 20px;
            font-size: 24px;
        }

        a:hover {
            text-decoration: underline;
            color: aquamarine;
            margin: left;
        }

        .menu {
            width: 50%;
            display: flex;
            flex-wrap: wrap;
            justify-content: right;
            align-items: center;
            font-weight: bold;
        }

        .menu-links:first-child {
            margin-bottom: 0;
        }

        #content-container {
            margin-top: 60px;
            padding: 20px;
        }

        #contact-container,
        #fun-facts-container {
            text-align: center;
        }

        #contact-container p,
        #fun-facts-container p {
            font-size: 18px;
            margin-top: 20px;
        }

        #email-link {
            color: #04AA6D;
            font-weight: bold;
            text-decoration: none;
        }

        #email-link:hover {
            text-decoration: underline;
        }

    </style>
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <div>
                <img class="image" src="website_logo.png" alt="Logo" onclick="loadHomePage()">
            </div>

            <h1 class="headline">
                Zugvögel
            </h1>
        </div>

        <div class="menu">
            <a class="menu-links" href="#" onclick="openNews()"> News </a>
            <a class="menu-links" href="javascript:void(0);" onclick="openContactTab()"> Contact </a>
            <a class="menu-links" href="#" onclick="openAboutUs()"> About </a>
        </div>
    </div>

    <div id="content-container">
        <!-- Content of the page goes here -->
        <h1>Welcome to Our Website!</h1>
        <p>This is the home page content.</p>
    </div>

    <script>

        function loadHomePage() {
            document.getElementById("content-container").innerHTML = `
                <h1>Welcome to Our Website!</h1>
                <p>This is the home page content.</p>
            `;
        }

        function openContactTab() {
            document.getElementById("content-container").innerHTML = `
                <div id="contact-container">
                    <h1>Contact Us</h1>
                    <p>If you have any questions, please feel free to reach out to us via email:</p>
                    <p>Email: <a id="email-link" href="mailto:vogelexperten@gmail.com">vogelexperten@gmail.com</a></p>
                </div>
            `;
        }

        function openAboutUs() {
            document.getElementById("content-container").innerHTML = `
                <h1>About Us</h1>
                <p>Welcome to our website! We are dedicated to providing information about birds and birdwatching. Our team of experts is passionate about the avian world and aims to share their knowledge with you. Explore our site to discover fascinating facts, birding tips, and more.</p>
            `;
        }

        function openNews() {
            document.getElementById("content-container").innerHTML = `
                <h1>Latest News</h1>
                <p>Stay tuned for the latest updates and news about the birding community.</p>
            `;
        }

        function openFunFacts() {
            const randomFactIndex = Math.floor(Math.random() * funFacts.length);
            const randomFunFact = funFacts[randomFactIndex];

            document.getElementById("content-container").innerHTML = `
                <div id="fun-facts-container">
                    <h1>Fun Facts</h1>
                    <p>${randomFunFact}</p>
                    <button id="refresh-button" onclick="refreshFunFact()">Refresh Fun Fact</button>
                </div>
            `;
        }
    </script>
</body>

</html>
