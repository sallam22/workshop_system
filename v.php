








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

        <th>IDNumber </th>
		
		<th>  reply </th>
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
         
         echo "<td>".$row['idnumber']."</td>";

        
        
         
         
         

          echo "<td>".$row['reply']."</td>";
        
            echo "</tr>";







  
}

        
	   ?>

	</table>

	<br>
	
</body>
</html>

    


 