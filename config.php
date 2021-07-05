<?PHP

//error_reporting(0);

$BASE_URL="http://localhost/URL-Shortner-PHP/";

// Database Connection
$server_IP = "localhost";
$username = "root";
$password = "";
$DB_Name ='url_shortner';


// Create connection
$conn = new mysqli($server_IP, $username, $password,$DB_Name);

if ($conn->connect_error) {
    echo "<div class='alert alert-danger' role='alert'>Something went wrong and we're unable to connect Database</div>";
    die("Can not connect ");
  }


?>