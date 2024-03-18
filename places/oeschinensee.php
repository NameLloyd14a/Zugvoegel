<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            background-color: whitesmoke;
            margin: 0; /* Remove default body margin */
            padding: 0; /* Remove default body padding */
        }

        .image {
            width: 70% ;
            padding-top:5px;
            padding-left: 5px;
            padding-bottom: 5px;
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 250px;
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
            font-size: 30px;
        }

        .titel {
            color: black;
            font-size: 80px;
            font-weight: bold;
            align-items: center;
            margin-top: 20px;
            margin-left: 20px;
            text-align: center;
        }
        .placescontainer {
            display:flex;
            width:100%;
            justify-content: center;
        }
        .placestext {
            background-color: whitesmoke;
            height: 50%; /* Use 100% height to occupy the entire container */
            width: 85%;
            display: flex;
            flex-direction: column; /* Arrange items vertically */
            justify-content: center;
            font-size: 18px;
            text-align: left;
            position: flex;
            margin-left: 120px;
            margin-right: 120px;
            
        }

        .titelvideo {
            display: flex;
            justify-content: center;
            padding: 20px;
            margin-top:10px;
        }

        p {
            color: black;
            font-family: "Open Sans", sans-serif;
        }

        .menu-links {
            color: whitesmoke;
            text-decoration: none;
            margin-right: 20px;
            font-size: 24px;
        }
        a {
            color: black;
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

        #email-link {
            color: black;
            text-decoration: underline;
        }

        #email-link:hover {
            text-decoration: underline;
            color: aquamarine;
        }
        .ortbild {
            margin-top: 10px;
            justify-content: center;
            display: flex ;
            width: 80%;
            height: 80%;
            border-radius: 10px;
        }
        .ortbild_container {
            display:flex;
            width:100%;
            justify-content: center;
        }
        .untertitel {
            color: black;
            font-size: 20px;
            font-weight: bold;
            text-align: left;
        }
    </style>
</head>
<title>Oeschinensee</title>

<body>
    <div class="navbar">
        <div class="logo">
            <div>
                <img class="image" src="/Bilder/website_logo.png" alt="Logo" onclick="loadHomePage()">
            </div>
            <h1 class="headline">Zugvögel</h1>
        </div>

        <div class="menu">
            <a class="menu-links" href="#" onclick="openPlaces()">Places</a>
            <a class="menu-links" href="javascript:void(0);" onclick="openContactTab()">Suche</a>
            <a class="menu-links" href="#" onclick="openAboutUs()">About</a>
            <a class="menu-links" href="#" onclick="openFunFacts()">Fun Facts</a>
        </div>
    </div>
    <div class= 'titel'>
    <h1 class='titel'>Oeschinensee</h1>
    </div>
    <div class='ortbild_container'>
        <img class='ortbild'src="/Bilder/Oeschinensee Rundweg.jpg" alt="Oeschinensee">
    </div>
    <div class= 'placescontainer'>
    <p class='placestext'>Erlebe die unberührte Schönheit der Natur am Oeschinensee im UNESCO Welterbe - ein einzigartiges Naturjuwel. Tauche ein in die idyllische Winterlandschaft, umgeben von majestätischen Bergen. In einem wildromantischen Felsenkessel eingebettet ins Blüemlisalpmassiv, gilt der Oeschinensee als schönster Bergsee der Schweiz.<br><br>
    Ob Winterwanderung, Schneeschuhlaufen, Skifahren, Schlitteln oder Kulinarik auf der Sonnenterrasse im Bergrestaurant geniessen, dein Naturerlebnis ist dir sicher! Wir sorgen für einmalige und unvergessliche Wintermomente in der imposanten Bergwelt vor dem Blüemlisalpmassiv. </p>
    </div>
    <div class='ortbild_container'>
        <img class='ortbild'src="/Bilder/52403_32001800.jpg" alt="Oeschinensee">
    </div>
    <div class='placescontainer'>
        <p class='placestext'> 
        <b>Kontakt:</b>
        Gondelbahn Kandersteg-Oeschinensee AG <br>
        <a href="https://maps.app.goo.gl/ruczjpoj7nU34Yps7">Oeschistrasse 50</a>
        3718 Kandersteg<br>
        <a href="tel:+41336751118">+41 33 675 11 18</a>
        <a id="email-link" href=mailto:gondelbahn@oeschinensee.ch> gondelbbahn@oeschinensee.ch</a>
        <a href="https://www.oeschinensee.ch/">Website</a></p>
    </div>
    

    <script>
        function loadHomePage() {
            window.location = "../index.php";
        }

        function openContactTab() {
            window.location = "../search.php";
        }

        function openAboutUs() {
            window.location = "../about.php";
        }

        function openPlaces() {
            window.location = "../places.php";
        }

        function openFunFacts() {
            window.location = "../funfact.php";
        }
        
    </script>
</body>
</html>
