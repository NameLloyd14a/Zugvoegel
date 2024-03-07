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
            padding: 10px 20px;
        }

        .headline {
            color: aquamarine;
            font-weight: bold;
        }

        .titel {
            color: black;
            font-size: 80px;
            font-weight: bold;
            align-items: center;
            margin-top: 10px;
            margin-left: 20px;
        }

        .titelbild {
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .menu-links {
            color: whitesmoke;
            text-decoration: none;
            margin-right: 20px;
            font-size: 24px;
        }

        .menu-links:hover {
            text-decoration: underline;
            color: aquamarine;
        }

        .menu {
            width: 50%;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-end;
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

        #fun-facts-container {
            text-align: center;
        }

        #fun-facts-container p {
            font-size: 24px;
            margin-top: 20px;
        }

        #next-fact-button {
            background-color: #04AA6D;
            color: whitesmoke;
            border: none;
            padding: 15px 20px;
            font-size: 20px;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.2s ease-in-out;
        }

        #next-fact-button:hover {
            background-color: #038353;
        }

        #next-fact-button:active {
            transform: scale(0.95);
        }
    </style>
</head>

<title>Zugvögel</title>

<body>
    <div class="navbar">
        <div class="logo">
            <div>
                <img class="image" src="website_logo.png" alt="Logo" onclick="loadHomePage()">
            </div>
            <h1 class="headline">Zugvögel</h1>
        </div>

        <div class="menu">
            <a class="menu-links" href="#" onclick="openPlaces()">Places</a>
            <a class="menu-links" href="javascript:void(0);" onclick="openContactTab()">Contact</a>
            <a class="menu-links" href="#" onclick="openAboutUs()">About</a>
            <a class="menu-links" href="#" onclick="openFunFacts()">Fun Facts</a>
        </div>
    </div>

    <div id="content-container">
        <!-- Content container for Fun Facts -->
    </div>

    <script>
        const funFacts = [
            "Hummingbirds are the only birds that can fly backward.",
            "Owls can rotate their heads up to 270 degrees.",
            "The peregrine falcon is the fastest bird and can reach speeds of over 240 mph."
            // Add more bird facts here
        ];

        function loadHomePage() {
            window.location = "index.php";
        }

        function openContactTab() {
            window.location = "contact.php";
        }

        function openAboutUs() {
            window.location = "about.php";
        }

        function openPlaces() {
            window.location = "places.php";
        }

        function displayRandomFunFact() {
            const randomFactIndex = Math.floor(Math.random() * funFacts.length);
            const randomFunFact = funFacts[randomFactIndex];

            document.getElementById("content-container").innerHTML = `
                <div id="fun-facts-container">
                    <h1>Fun Facts</h1>
                    <p>${randomFunFact}</p>
                    <button id="next-fact-button" onclick="displayRandomFunFact()">Next Fact</button>
                </div>
            `;
        }

        // Initial display of a random fun fact
        displayRandomFunFact();
    </script>
</body>

</html>
