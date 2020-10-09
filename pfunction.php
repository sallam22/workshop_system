<?php include "db1.php";?>

<?php


function createRows() {

if(isset($_POST['submit'])) {
global $connection;

$order_customer_name = $_POST['order_customer_name'];
$order_item = $_POST['order_item'];
$order_value = $_POST['order_value'];

$order_date= $_POST['order_date'];






  /* 
$username = mysqli_real_escape_string($connection, $username );   
$password = mysqli_real_escape_string($connection, $password );
   

$hashFormat = "$2y$10$"; 
$salt = "iusesomecrazystrings22";
$hashF_and_salt = $hashFormat . $salt;
$password = crypt($password,$hashF_and_salt); 
*/  
    
$query = "INSERT INTO  tbl_order(order_customer_name, order_item,order_value,order_date ) ";
    $query .= "VALUES ('$order_customer_name','$order_item', '$order_value','$order_date' )";
    
   $result = mysqli_query($connection, $query);
    

   
    if(!$result) {
        die('Query FAILED'.mysqli_error($connection) );
    
    } else {
    
    echo "Record Create"; 
    
    }
    
    
  
}


}
