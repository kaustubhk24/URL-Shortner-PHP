<?PHP


if(isset($_GET['id']))
{
    require_once('config.php');
   
    $url = mysqli_real_escape_string($conn , $_GET['id']);

    $sql = "SELECT LONG_URL from urls WHERE SHORT_URL = '$url'";
    $result = mysqli_query($conn , $sql) or die(mysqli_error($conn));


    // calculating no of rows
    $total = mysqli_num_rows($result);

    //if nothing found
    if($total===0){
       echo 'Invalid Short URL';
    }


    else{
        $row = mysqli_fetch_array($result);

        // redirection
        header("location:".$row['LONG_URL']);
        //increment
        updateCount($url,$conn);
        //exit this
               exit();
    }

}
else
{
    echo "Invalid Short URL";
}



//function to increase count when link opened

function updateCount($url,$conn)
{
    $query="UPDATE urls SET COUNT=(COUNT+1) WHERE SHORT_URL = '$url'";
    $result = mysqli_query($conn , $query) or die(mysqli_error($conn));
    $conn->close();
}

?>