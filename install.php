<?PHP
require_once('config.php');



$sql="CREATE TABLE IF NOT EXISTS  `users` (
  `USER_ID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";


$sql2="CREATE TABLE  IF NOT EXISTS  `urls` (
    `ID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `SHORT_URL` varchar(50) NOT NULL,
    `LONG_URL` varchar(150) NOT NULL,
    `COUNT` varchar(5) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
  
$r=mysqli_query($conn,$sql) or die(mysql_error());

$r2=mysqli_query($conn,$sql2) or die(mysql_error());
if($r&&$r2)
{
    echo 'installed successfully';
}
else
{
    echo 'Please retry installation';
}

$conn->close();


?>