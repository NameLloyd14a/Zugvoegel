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
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            border-radius: 5px;
        }

        .headline {
            color: aquamarine;
            font-weight: bold;
            font-size: 30px;
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
          border-radius: 5px;
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
          margin-top: 20px;
          margin-left: 10px;


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
        
       

        .bar {
            display: flex;
            border: 1px, white;
            
            
            
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
         
        .bildtext {
          
          font-size: medium;
          font-weight: 20px;
          margin-left: 10px;
          
        }
        .titelbild{
          display: flex ;
          justify-content: space-between;
          align-items: center;
          background-color: whitesmoke;
          border-radius: 10px;
          margin-left: 10px;
          margin-right: 10px;

        }

        .hintergrundsuche {
            margin-top: 5px;
            background-color: transparent;
        }

       
           
        
        
        .suche{
            
            background-image: url("/Bilder/pexels-ilo-frey-2317904.jpg");
            
            background-size: cover; /* Das Bild wird so skaliert, dass es den gesamten Bereich bedeckt */
            background-position: top; /* Das Bild wird zentriert positioniert */
            backdrop-filter: brightness(80%);
            
            margin-top: 0; /* Setzt den oberen Rand auf 0 */
             
        }
        .suchresultate{
            background-color: white;
            border-radius: 5px;

        }
        .tabelle {
            border-collapse: collapse;
            margin-top: 20px;
            margin-left : 20px;
            
            border-radius: 5px;
            overflow: hidden;


        }
        table.tabelle thead tr {
            background-color: black;
            font-size: 15px;
            color: aquamarine;
            font-weight: bold;
            text-align: left;

        }
        table.tabelle th, table.tabelle td {
            padding : 12px 16px ;

        }
        table.tabelle tbody tr {
            background-color: gray;
            color: white ;
            text-align: middle;
            font-size: 13px;
            
        }
        .suchtitle {
            font-size: 30px;
            font-weight: bold;
            color: white;
            margin-top: 200px;
            text-align: center;
            background-color: transparent !important;

        }
        .anzeigenichtsgefunden {

            font-size: 30px;
            font-weight: bold;
            color: white;
            margin-top: 200px;
            text-align: center;
            background-color: transparent !important;
           
            

        }

    

    </style>
   
</head>
<title>Zugvögel - Suche</title>

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
    <h1 class="suchtitle" >Datenbank nach Vogel durchsuchen:</h1>

    <div class= "hintergurndsuche">
     <div >
        <form method="GET" action="search.php" style="display: flex; margin-top: 30px; justify-content:center ; align-items: center;height: 60px;overflow: hidden;" class="bar">
        <input type="search" name="search" pattern=".*\S.*" required autocomplete="off">
        
      
    </button>
    </form></div>
    </div>
    <div id="search-results" >
        <?php 
        if(isset($_GET['search'])) {
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='suchresultate'>"."<span class = 'uberschrift'>" . "Suche nach: " . $row["name"] . "<br>"." </span>";
            echo "<div class = 'titelbild'>"."<img src='" . $row["bild"] . "' alt=''><br>";
            echo "<span class = 'bildtext'>" . $row["beschreibung"] . "<br>"." </span>". "</div>";
            
            echo"<table class='tabelle', width: 410px;>";
            echo"<thead>";
            echo"<tr>";

            echo "<th> Lateinischer Name </th>";
            echo "<th> Lebenserwartung </th>";
            echo  "<th> Gewicht </th>";
            echo  "<th> Grösse</th>" ;
            echo  "<th>Ernährung</th>";
            echo"</tr>";
            echo "</thead>";
            echo"<tbody>";
            echo"<tr>";
                 echo  "<td>" . $row["lateinname"] . "<br>". "</th>";
                 echo "<td>". $row["lebenserwartung"] . " Jahre<br>". "</td>" ;
                 echo "<td>".$row["gewicht"] . " g<br>". "</td>";
                 echo "<td>". $row["groesse"] . " cm<br>"."</td>";
                 echo  "<td>". $row["mahlzeit"] . "<br>". "</td>";

                 echo "</tr>" ;
                 echo"</tbody>";
                 echo"</table>";
                 echo"</div>";
     
                

        
            }
     
     
        }else {
            echo "<div class='anzeigenichtsgefunden' style='background-color: transparent;'>Keine Ergebnisse gefunden</div>";
    }
        }
           
        ?>  
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
        window.scrollTo(0,document.body.scrollHeight);
    </script>
</body>
</html>
