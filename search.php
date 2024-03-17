<<!DOCTYPE html>
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
        
        .titel{
            color:black;
            font-size: 60px;
            font-weight: bold;
            align-items: baseline;
            

        }
        .titelbild{
          display: flex ;
          justify-content: space-between;
          align-items: center;
         
          background-color: whitesmoke;
        }
        .bildtext {
          
          font-size: medium;
          font-weight: 20px;
          margin-left: 10px;
          
        }
        .uberschrift{
          display: flex ;
          justify-content: left;

          font-size: 25px;
          font-weight: bold;
          margin-bottom: 30px;


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
            margin-top: 20px;
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

        #fun-facts-container p {
            font-size: 24px; /* Increased text size */
            margin-top: 20px;
        }

        #next-fact-button {
            background-color: #04AA6D;
            color: whitesmoke;
            border: none;
            padding: 15px 20px;
            font-size: 20px;
            border-radius: 10px; /* Added border-radius for a rounded look */
            cursor: pointer;
            transition: transform 0.2s ease-in-out; /* Added scaling animation */
        }

        #next-fact-button:hover {
            background-color: #038353;
        }

        #next-fact-button:active {
            transform: scale(0.95); /* Slight scaling when button is pressed */
        }
        
        button, input {
        font: 1em Hind, sans-serif;
        line-height: 1.5em;
        border: 1px, black;
        }

        .bar {
            display: flex;
            border: 1px, black;
            
        }

        .bar input {
            width: 50%;
            height: 3em;
            background: transparent;
            border-radius: 1.5em;
            padding: 1em;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            box-shadow: none; 
            color: white ;
            font-size: large;
            

        }

        

        .search-btn {
            display: none; 
        }
        
        .suche{
            
            background-image: url("/Bilder/pexels-ilo-frey-2317904.jpg");
            position: relative;
            background-size: cover; /* Das Bild wird so skaliert, dass es den gesamten Bereich bedeckt */
            background-position: center; /* Das Bild wird zentriert positioniert */
            backdrop-filter: brightness(80%);
            position: relative;
            margin-top: 0; /* Setzt den oberen Rand auf 0 */
             
        }

    

    </style>
   
</head>
<title>Zugvögel</title>

<?php
//Nutzerdaten für Datenbank
$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "zugvoegel";

// Verbindung herstellen
$conn = new mysqli($servername, $username, $password, $dbname);
// Verbindung überprüfen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Überprüft ob eine Suchanfrage gesendet wurde
if(isset($_GET['search'])) {
    $search_query = $_GET['search'];

    //Statement verwenden um SQl-Injection zu verhindern
    $sql = "SELECT * FROM `vogel` WHERE `name` LIKE ?";
    $stmt = $conn->prepare($sql);
    // Suchanfrage an das statement anbinden
    $stmt->bind_param("s", $search_query);
    // Abfrage ausführen
    $stmt->execute();
    // Ergebnis der Abfrage abrufen
    $result = $stmt->get_result();

    // Suchergebnisse anzeigen
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Name: " . $row["name"] . "<br>";
            echo "Beschreibung: " . $row["beschreibung"] . "<br>";
            echo "<img src='" . $row["bild"] . "' alt=''><br>";
            echo "Lateinischer Name: " . $row["lateinname"] . "<br>";
            echo "Lebenserwartung: " . $row["lebenserwartung"] . " Jahre<br>";
            echo "Gewicht: " . $row["gewicht"] . " kg<br>";
            echo "Größe: " . $row["groesse"] . " m<br>";
            echo "Mahlzeit: " . $row["mahlzeit"] . "<br>";

        }
    } else {
        echo "Keine Ergebnisse gefunden";
    }

    //statement schliessen
    $stmt->close();
}

// Schließe die Verbindung zur Datenbank
$conn->close();
?>

<body class=suche>
    <div class="navbar">
        <div class="logo">
            <div>
                <img class="image" src="Bilder/website_logo.png" alt="Logo" onclick="loadHomePage()">
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
    <div class= "hintergurndsuche">

     <div >
        <form method="GET" action="search.php" style="display: flex; margin-top: 20px; justify-content:center ; align-items: center;height: 100vh;overflow: hidden;" class="bar">
        <input type="search" name="search" pattern=".*\S.*" required autocomplete="off">
        <button class="search-btn" type="submit">
      <span>Search</span>
    </button>
    </form></div>
    </div>
    <div id="search-results">
        <?php include_once("search.php"); ?>
    </div>
    
    <script>

        function loadHomePage() {
            window.location="index.php";
        }

        function openContactTab() {
            window.location="search.php";
        }

        function openAboutUs() {
            window.location="about.php";
        }

        function openPlaces() {
            window.location="places.php";
        }

        function openFunFacts() {
            window.location="funfact.php"; 
        }
    </script>
</body>
</html>
