<?php include "db.php";?>

<?php



function createRows() {

if(isset($_POST['submit'])) {
global $connection;
 $idnumber = $_POST['idnumber'];  



$reply = $_POST['reply'];






  /* 
$username = mysqli_real_escape_string($connection, $username );   
$password = mysqli_real_escape_string($connection, $password );
   

$hashFormat = "$2y$10$"; 
$salt = "iusesomecrazystrings22";
$hashF_and_salt = $hashFormat . $salt;
$password = crypt($password,$hashF_and_salt); 
*/  
    
$query = "INSERT INTO reply(idnumber, reply) ";
    $query .= "VALUES ('$idnumber','$reply' )";
    
   $result = mysqli_query($connection, $query);
    

   
    if(!$result) {
        die('Query FAILED'.mysqli_error($connection) );
    
    } else {
    
    echo "Record Create"; 
    
    }
    
    
  
}


}