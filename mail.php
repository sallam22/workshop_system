
<?php include "db.php";?>
<?php include "functions.php" ;?>
<?php createRows(); ?>
<?php include "includes/header.php" ?>











<!-- Contact Section -->

<div style="background-color: darkcyan;"  class="page-wrapper bg-dark p-t-100 p-b-50">
        <div  class="wrapper wrapper--w900">
            <div  class="card card-6">
                <div  class="card-heading">
                    <h2   style="background-color: darkcyan;" class="title">Contact Form</h2>
                </div>
                <div  class="card-body">
                    <form  method="POST" >

                            <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="name">
                            </div>
                        </div>







                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="email">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Message</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <br>
                          <input style="background-color:blue ;" class="btn btn-primary" type="submit" name="submit" 
                          value="Submit">



                    </form>



                    
        
                </div>
            </div>
        </div>
    </div>




<?php include "includes/footer.php"?>



          