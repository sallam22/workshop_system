








<!DOCTYPE html>
<html lang="en">

<head>
  

<title>Admin </title>
<style type="text/css">
	
table{


	border-collapse: collapse;
	width: 75%;
	color: blue;
	font-family: monospace;
	font-size: 15px;
	text-align: left;
}
th{

	background-color: darkcyan;
	color: black;
}
tr:nth-child(even){

	background-color: darkcyan;
}

</style>



</head>



<body >
	<table>
		<tr>
      <th>ملاحظات </th>
        
         
		
		
		 <th>  الى </th>

		
		 


		 <th>  من </th>
		
		
		 <th>  اسم </th>
        

		<th>  درجه</th>

	</tr>






	


  <?php

   $connection = mysqli_connect('localhost', 'root', '', 'workshop');
   mysqli_set_charset($connection,'utf8'); 
    $query = "SELECT * FROM user";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }


    while($row = mysqli_fetch_assoc($result)) {



        
        echo "<tr>";
         echo "<td>".$row['note']."</td>";

         echo "<td>".$row['holiday']."</td>";

        echo "<td>".$row['timee']."</td>";
        
         echo "<td>".$row['name']."</td>";
         
         echo "<td>".$row['degree']."</td>";
        
        echo "</tr>";
}

        
	   ?>

	</table>
</body>
</html>

    


 