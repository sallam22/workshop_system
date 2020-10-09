






<!DOCTYPE html>
<html lang="en">

<head>
  

<title>Admin </title>
<style type="text/css">
	
body {
 font-family: "Open Sans", helvetica, arial;
 }
table{
 width: 500px; /* For Responsive design set 100% */
 border-collapse: collapse;
 margin: 30px 0px 30px;
 background-color: #fff;
 font-size: 14px;
 }
table tr {
 height: 40px;
 }
table th {
 background: #333;
 color: #fff;
 font-weight: bold;
 font-size: 18px;
}
table td, th {
 padding: 6px 6px 6px 10px;
 border: 1px solid #ccc;
 text-align:center;
}
 
/* CSS3 Zebra Striping */
table tr:nth-of-type(odd) {
 background: #eee;
}
 
/* Automatic Serial Number Row */
/*
.css-serial {
 counter-reset: serial-number;  Set the serial number counter to 0 
}
.css-serial td:first-child:before {
 counter-increment: serial-number; /* Increment the serial number counter */
 content: counter(serial-number); /* Display the counter */
}

</style>
</head>
<body>
<table class="css-serial">
<thead>
<tr>
  
 <th>الاسم</th>
 <th> القطاع</th>
 <th>نظام الاجازات</th>
 <th>تاريخ النزول</th>
 <th> تاريخ العودة </th>
 

</tr>

</thead>
<tbody>




	


  <?php

   $connection = mysqli_connect('localhost', 'root', '', 'workshop');
   mysqli_set_charset($connection,'utf8'); 
    $query = "SELECT * FROM people_holiday";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }


    while($row = mysqli_fetch_assoc($result)) {



        
        echo "<tr>";

         echo "<td>".$row['name']."</td>";

        echo "<td>".$row['dept']."</td>";
        
         echo "<td>".$row['holiday']."</td>";
         
         echo "<td>".$row['hgo']."</td>";
         echo "<td>".$row['hback']."</td>";
   

          // echo "<td>".$row['reply']."</td>";
        
        echo "</tr>";
}

        
	   ?>

 
	</table>

	<br>
  
	<a href="reply.php">reply answer</a>

   
</body>
</html>

    


 