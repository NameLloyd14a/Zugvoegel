<?php
if (isset($_POST['email'])) {
  $email = $_POST['email'];
  $servername = "localhost:8889";
  $username = "root";
  $password = "root";
  $dbname = "zugvoegel";
  // Create connection to database
  $pdo = new mysqli($servername, $username, $password, $dbname);
  // Check connection to database
  if ($pdo->connect_error) {
      die("Connection failed: " . $pdo->connect_error);
  }
  // Check if email exists in the database
  $stmt = $pdo->prepare('SELECT * FROM subscribers WHERE email = ?');
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows > 0) {
    echo "Diese E-mail hat den Newsletter bereits abonniert";
    sleep(3);
    header('Location:index.php');
  } else{
  // Insert email address into the database
  $stmt = $pdo->prepare('INSERT INTO subscribers (email,date_subbed) VALUES (?,?)');
  $date= date('Y-m-d\TH:i:s');
  $stmt->bind_param("ss", $email, $date);
  $stmt->execute();
  // Output success response
  echo "Sie erhalten in Zukunft Updates!"; 
  sleep(3);
  header('Location:index.php');
} 
}

