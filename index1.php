 




                    
        
<?php include "db.php";?>
<?php include "functions.php" ;?>
<?php createRows(); ?>
<?php include "includes/header.php" ?>










<div style="background-color: darkcyan;"  class="page-wrapper bg-dark p-t-100 p-b-50">
        <div  class="wrapper wrapper--w900">
            <div  class="card card-6">
                <div  class="card-heading">
                    <h2   style="background-color: darkcyan;" class="title">Apply for Maintaince</h2>
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
                            <div class="name">Full name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="full_name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Workshop/Union</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="workshop_Union" >
                                </div>
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
                        






                        <div class="form-row">
                            <div class="name">Upload QR Code</div>
                            <br>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose QR code</label>
                                  <a href="index3.php" style="background-color: gray;" class="btn btn-custom btn-lg page-scroll">choose files  </a>

                                </div>
                                <div class="label--desc"></div>
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