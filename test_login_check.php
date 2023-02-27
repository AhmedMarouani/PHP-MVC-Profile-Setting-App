<?php 
// Start the session
session_start();
unset($_SESSION["userID"]);
unset($_SESSION['loginerror']);
$username = $_GET['username'];
$password = $_GET['password'];


$host = "localhost";
$user = "root";
$pass = "";
$database = "programmer_test";
//use the connection details for the database you imported 
$con = mysqli_connect($host,$user,$pass,$database);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql="
    SELECT 
        password,
        userID 
    FROM 
        `users`
    WHERE
        username = '".$username."'"
    ;


if ($result=mysqli_query($con,$sql))
  {


  // Fetch row
  $row=mysqli_fetch_row($result);
  if ($row[0]=== $password){
    $_SESSION["userID"] = $row[1];
  }else{
    $_SESSION["loginerror"] = "The password doesn't match"; 

  }
}else{
    $_SESSION["loginerror"] = "No user of that name"; 
}

header( "Location: test_homepage.php" );





