<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
 
require('db.php');
// include("auth.php"); //include auth.php file on all secure pages
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>منظومه الافراد</title>
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


body{background-color: yellow;}



	
</style>

</head>
<body>
<div class="form">
	<center>
<p style="background-color: green;">مكتب التسجيلات</p>
</center>
<!-- <p><a href="index.php">Home</a><p>
 -->
 <center>
 <p><a href="insert.php">اضافة تسجيل  جديد</a></p>
<p><a href="view.php">غرض التسجيلات </a><p>
<p><a href="http://www.infonet.mil/AFMICWebsite/">  موقع الشبكه العسكريه</a></p>

</center>


</div>
</body>
</html>
