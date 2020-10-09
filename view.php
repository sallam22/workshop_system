<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
 
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>صفحه التسجيلات</title>
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

body{background-color: ;}

	
</style>





</head>
<body>
<div  class="form">
<p><a href="index.php">العودة</a> | <a href="insert.php">اضافة تسجيل جديد</a> | <a href="logout.php">خروج</a></p>
<h2> عرض بيان التسجيلات</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>

	
	<th><strong>مسلسل</strong></th>
	

	<th><strong>رتبة/درجة</strong></th>
	<th><strong>التمام</strong></th>
	<th><strong>Edit</strong></th>
	<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from new_record ORDER BY id desc;";
$result = mysqli_query($connection,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
	<td align="center"><?php echo $count; ?></td>
	
	<td  align="center"><?php echo $row["name"]; ?></td>
	<td align="center"><?php echo $row["holiday"]; ?></td>
	<td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>

<br /><br /><br /><br />

</div>
</body>
</html>
