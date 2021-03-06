<?PHP
require_once('../config.php');
session_start();
if(!isset($_SESSION['username']))
{
    header('location:../login.php');
    exit();
}

if(isset($_GET['delete']))
{
  $id = $_GET['delete'];
  $up = "delete from urls WHERE ID=".$id;
  $up = mysqli_query($conn,$up);
}







    $sql = "SELECT * from urls";
    $result = mysqli_query($conn , $sql) or die(mysqli_error($conn));
    

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Manage URL's</title>
  </head>
  <body>
  <div class="container">
  <h6 class="text-left">Hello <?PHP echo $_SESSION['username'];?>
</h6>
  <h3>All URLS</h3>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Short URL</th>
      <th scope="col">Long URL</th>
      <th scope="col">Count</th>
      <th scope="col">Edit </th>
      <th scope="col">Delete </th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?PHP
    
    while($row = mysqli_fetch_array($result))
    {
        echo "<th scope='row'>".$row['ID']."</th>";
        echo "<td>".$row['SHORT_URL']."</td>";
        echo "<td>".$row['LONG_URL']."</td>";
        echo "<td>".$row['COUNT']."</td>";
        echo "<td><a class='btn btn-warning' href=index.php?edit=".$row['ID'].">Edit</a></td>";
        echo "<td><a class='btn btn-danger' href=index.php?delete=".$row['ID'].">Delete</a></td>";
    }
    
    
    ?>
     
    </tr>
    <tr>
  </tbody>
</table>
</div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>