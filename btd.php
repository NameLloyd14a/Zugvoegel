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
            border-radius: 5px 5px 5px 5px;
            overflow: hidden;
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

        table.tabelle tbody tr th:hover{
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
        .tabelle {
            border-collapse: collapse;
            margin-top: 20px;
            
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
            text-align: left;
            font-size: 10px;
            
        }
    </style>
</head>
<title>Zugvögel</title>
<?php
$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "zugvoegel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$day_number = date("d");
$sql = "SELECT * FROM `vogel` WHERE vgl_id=$day_number;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $name= $row["name"];
      $beschreibung = $row["beschreibung"];
      $bild = $row["bild"];
      $lateinname = $row["lateinname"];
      $lebenserwartung = $row["lebenserwartung"]; //in Jahren
      $gewicht = $row["gewicht"]; //gewicht in g
      $groesse = $row["groesse"]; //grösse in cm
      $mahlzeit = $row["mahlzeit"];
    }
  } else {
    echo '<script>alert("Could not load data from database")</script>';
    $name= "No data";
    $beschreibung = "Couldn't load description, please try again later";
    $bild = "https://assets-v2.lottiefiles.com/a/0e30b444-117c-11ee-9b0d-0fd3804d46cd/A6t16MXhTI.gif";
    $lateinname = "Nulla notitia";
    $lebenserwartung = "unbekannt";
    $gewicht = "unbekannt";
    $groesse = "unbekannt";
    $mahlzeit = "unbekannt";
  }
$conn->close();
?>
<body>
    <div class="navbar">
        <div class="logo">
            <div>
                <img class="image" src="Bilder/website_logo.png" alt="Logo" onclick="loadHomePage()">
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
        <h1 class="titel" >Bird of the day</h1>
        <div class= "titelbild" >
        <?php
            
            
            echo '<img src="'.$bild.'" alt="Hier sollte ein Bild sein">';
            ?>
        <div class="bildtext">
        <div class = "uberschrift"><?php
            echo $name;
            ?></div>
            <?php
            echo $beschreibung;
            ?>

        </div>
        
    </div>
    <table class="tabelle", width: 410px;>
        <thead>
            <tr>
                <th> Name </th>
                <th> Grösse (cm) </th>
                <th> Gewicht (g)</th>
                <th> Lebenserwartung (Jahre) </th>
                <th> Lebensraum</th>
                <th>Ernährung</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?php echo $lateinname;?></th>
                <th><?php echo $groesse;?></th>
                <th><?php echo $gewicht;?></th>
                <th><?php echo $lebenserwartung;?></th>
                <th><?php echo $Lebensraum;?></th>
                <th><?php echo $mahlzeit;?></th>

            </tr>
        </tbody>
    </table>

    <script>
        function loadHomePage() {
            window.location="index.php";
        }

        function openContactTab() {
            window.location="contact.php";
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