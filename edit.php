<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
 
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from new_record where id='".$id."'"; 
$result = mysqli_query($connection, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>تعديل التسجيل</title>
<link rel="stylesheet" href="css/style.css" />






<style type="text/css">
	


body {font-family:Arial, Sans-Serif;}
.clearfix:before, .clearfix:after { content: ""; display: table; }
.clearfix:after { clear: both; }
a {color:#0067ab; text-decoration:none;}
a:hover {text-decoration:underline;}
.form{width: 300px; margin: 0 auto;}
input[type='text'], input[type='email'], input[type='password'] {width: 200px; border-radius: 2px;border: 1px solid #CCC; padding: 10px; color: #333; font-size: 14px; margin-top: 10px;}
input[type='submit']{padding: 10px 25px 8px; color: #fff; background-color: #0067ab; text-shadow: rgba(0,0,0,0.24) 0 1px 0; font-size: 16px; box-shadow: rgba(255,255,255,0.24) 0 2px 0 0 inset,#fff 0 1px 0 0; border: 1px solid #0164a5; border-radius: 2px; margin-top: 10px; cursor:pointer;}
input[type='submit']:hover {background-color: #024978;}



	
</style>

</head>
<body>
<div class="form">
<p><a href="dashboard.php">العوده</a> | <a href="insert.php">اضافة تسجيل جديد</a> | <a href="logout.php">خروج</a></p>
<h1>تعديل التسجيل</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$holiday =$_REQUEST['holiday'];
$submittedby = $_SESSION["username"];
$update="update new_record set trn_date='".$trn_date."', name='".$name."', holiday='".$holiday."', submittedby='".$submittedby."' where id='".$id."'";
mysqli_query($connection, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="holiday" placeholder="Enter Holiday" required value="<?php echo $row['holiday'];?>" /></p>
<p><input name="submit" type="submit" value="تعديل" /></p>
</form>
<?php } ?>

<br /><br /><br /><br />

</div>
</div>
</body>
</html>
