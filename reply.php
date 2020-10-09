 




                    
        
<?php include "db.php";?>
<?php include "functions2.php" ;?>
<?php createRows(); ?>
<?php include "includes/header.php" ?>










<div style="background-color: darkcyan;"  class="page-wrapper bg-dark p-t-100 p-b-50">
        <div  class="wrapper wrapper--w900">
            <div  class="card card-6">
                <div  class="card-heading">
                    <h2   style="background-color: darkcyan;" class="title">Reply for Maintaince</h2>
                </div>
                <div  class="card-body">
                    <form  method="POST" >

                            <div class="form-row">
                            <div class="name">IDNumber</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="idnumber">
                            </div>
                        </div>







                        
                        
                        
                        <div class="form-row">
                            <div class="name">Reply</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="reply" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>






                       
                            
                        <br>
                          <input style="background-color:green ;" class="btn btn-primary" type="submit" name="submit" 
                          value="CREATE">



                    </form>



                    
        
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"?>