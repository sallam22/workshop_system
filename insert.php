<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
 
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");

$name =$_REQUEST['name'];
$holiday = $_REQUEST['holiday'];
$submittedby = $_SESSION["username"];
$ins_query="insert into new_record (`trn_date`,`name`,`holiday`,`submittedby`) values ('$trn_date' ,'$name','$holiday','$submittedby')";
mysqli_query($connection,$ins_query) ;
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>اضافة تسجيل جديد</title>
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
<p><a href="index.php">العودة</a> | <a href="view.php">عرض التسجيلات</a> | <a href="logout.php">خروج</a></p>

<div>
<h1>اضافة تسجيل  جديد</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />

<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="holiday" placeholder="Enter holiday" required /></p>
<p><input name="submit" type="submit" value="ارسال" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

<br /><br /><br /><br />

</div>
</div>
</body>
</html>
