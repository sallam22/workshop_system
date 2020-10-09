<?php include "db.php";?>

<?php



function createRows() {

if(isset($_POST['submit'])) {
global $connection;
  

$name = $_POST['name'];
$dept = $_POST['dept'];
$holiday = $_POST['holiday'];

$hgo = $_POST['hgo'];
$hback = $_POST['hback'];







  /* 
$username = mysqli_real_escape_string($connection, $username );   
$password = mysqli_real_escape_string($connection, $password );
   

$hashFormat = "$2y$10$"; 
$salt = "iusesomecrazystrings22";
$hashF_and_salt = $hashFormat . $salt;
$password = crypt($password,$hashF_and_salt); 
*/  
    
$query = "INSERT INTO people_holiday( name,dept,holiday,hgo,hback) ";
    $query .= "VALUES ('$name','$dept','$holiday' ,'$hgo','$hback')";
    
   $result = mysqli_query($connection, $query);
    

   
    if(!$result) {
        die('Query FAILED'.mysqli_error($connection) );
    
    } else {
    
    echo "Record Create"; 
    
    }
    
    
  
}


}