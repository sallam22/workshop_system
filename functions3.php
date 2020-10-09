<?php include "db.php";?>

<?php



function createRows() {

if(isset($_POST['submit'])) {
global $connection;
 $id = $_POST['id'];  
$degree = $_POST['degree'];
$name = $_POST['name'];
$weapon = $_POST['weapon'];
$birthdate = $_POST['birthdate'];

$birthentry = $_POST['birthentry'];
$birthwent = $_POST['birthwent'];
$qulifaction= $_POST['qulifaction'];
$religon = $_POST['religon'];
$idnum= $_POST['idnum'];
$address = $_POST['address'];
$department= $_POST['department'];
$kowa = $_POST['kowa'];
$holiday = $_POST['holiday'];
$status = $_POST['status'];







  /* 
$username = mysqli_real_escape_string($connection, $username );   
$password = mysqli_real_escape_string($connection, $password );
   

$hashFormat = "$2y$10$"; 
$salt = "iusesomecrazystrings22";
$hashF_and_salt = $hashFormat . $salt;
$password = crypt($password,$hashF_and_salt); 
*/  
    
$query = "INSERT INTO data(id, degree,name,weapon,birthdate,birthentry,birthwent,qulifaction,religon
,idnum,address,department,kowa,holiday,status) ";
    $query .= "VALUES ('$id','$degree','$name' ,'$weapon','$birthdate','$birthentry','$birthwent','$qulifaction','$religon','$idnum','$address','$department','$kowa','$holiday','$status')";
    
   $result = mysqli_query($connection, $query);
    

   
    if(!$result) {
        die('Query FAILED'.mysqli_error($connection) );
    
    } else {
    
    echo "Record Create"; 
    
    }
    
    
  
}


}