<?php include "db.php";?>

<?php


function createRows() {

if(isset($_POST['submit'])) {
global $connection;
 $idnumber = $_POST['idnumber'];  
$full_name = $_POST['full_name'];
$workshop_Union = $_POST['workshop_Union'];
$message = $_POST['message'];


$file_cv = $_POST['file_cv'];




  /* 
$username = mysqli_real_escape_string($connection, $username );   
$password = mysqli_real_escape_string($connection, $password );
   

$hashFormat = "$2y$10$"; 
$salt = "iusesomecrazystrings22";
$hashF_and_salt = $hashFormat . $salt;
$password = crypt($password,$hashF_and_salt); 
*/  
    
$query = "INSERT INTO user(idnumber,full_name,workshop_Union,message ,file_cv) ";
    $query .= "VALUES ('$idnumber','$full_name', '$workshop_Union','$message' ,'$file_cv')";
    
   $result = mysqli_query($connection, $query);
    

   
    if(!$result) {
        die('Query FAILED'.mysqli_error($connection) );
    
    } else {
    
    echo "Record Create"; 
    
    }
    
    
  
}


}




function readRows() {
    global $connection;
    $query = "SELECT * FROM user";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }
        
while($row = mysqli_fetch_assoc($result)) {
        
        print_r($row);
    }  
}




function showAllData() {
    global $connection;
    $query = "SELECT * FROM user";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
       $id = $row['id'];
        
    echo "<option value='$id'>$id</option>";
    
    }
    
}
function UpdateTable() {
    if(isset($_POST['submit'])) {
    
global $connection;
$idnumber = $_POST['idnumber'];
$full_name = $_POST['full_name'];
$workshop_Union = $_POST['workshop_Union'];
$message = $_POST['message'];
$file_cv = $_POST['file_cv'];
$id = $_POST['id'];
    
$query = "UPDATE user SET ";
$query .= " idnumber= '$idnumber', ";

$query .= " full_name= '$full_name', ";
$query .= "workshop_Union = '$workshop_Union' ";
$query .= "message = '$message' ";
$query .= "file_cv = '$file_cv' ";
$query .= "WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    if(!$result) {
    
     die("QUERY FAILED" . mysqli_error($connection));    
    }else {
    
    echo "Record Updated"; 
    
    }
        
    }
    

}



function deleteRows() {
    
    if(isset($_POST['submit'])) {
global $connection;
$idnumber = $_POST['idnumber'];

$full_name = $_POST['full_name'];
$workshop_Union = $_POST['workshop_Union'];
$message = $_POST['message'];
$file_cv = $_POST['file_cv'];
$id = $_POST['id'];
    
    
$query = "DELETE FROM user ";
$query .= "WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    if(!$result) {
    
     die("QUERY FAILED" . mysqli_error($connection));    
    }else {
    
    echo "Record Deleted"; 
    
    }
  
    }

}