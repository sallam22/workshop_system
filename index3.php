<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>
  <body style="background-color: lightskyblue;">
    <center>
      <h1> مكتب الاجراءات </h1>
    </center>
    <div style="background-color: lightskyblue;" class="container">
      <div class="row">
        <form action="index3.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
<a href="downloads.php">Downloads</a>
        </form>
      </div>
    </div>
  </body>
</html>