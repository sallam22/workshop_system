 




                    
        
<?php include "db.php";?>
<?php include "functions.php" ;?>


<?php createRows(); ?>
<?php include "includes/header.php" ?>










<div style="background-color: darkcyan;"  class="page-wrapper bg-dark p-t-100 p-b-50">
        <div  class="wrapper wrapper--w900">
            <div  class="card card-6">
                <div  class="card-heading">
                    <h2   style="background-color: darkcyan;" class="title"> منظومه مكتب افراد الورشه 101 مدرعات  </h2>
                </div>
                <div  class="card-body">
                    <form  method="POST" >

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="degree">
                            </div>
                            <div class="name">الدرجه</div>
                            

                        </div>







                        <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="name">
                            </div>
                            <div class="name">الاسم</div>
                            

                        </div>
                        <div class="form-row">
                            
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="holiday" >
                                </div>
                                
                            </div>
                            <div class="name">من</div>
                        </div>

                          <div class="form-row">
                            
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="timee" >
                                </div>
                                
                            </div>
                            <div class="name"> الى </div>
                        </div>

                        <div class="form-row">
                            
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="note" placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="name">ملاحظات</div>
                        </div>
                        <div class="form-row">
                            <div class="name">ارفاق اليومية</div>
                            <br>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">اختيار اليومية</label>
                                    <span class="input-file__info"> لم يتم الارفاق</span>
                                </div>
                                <div class="label--desc"></div>
                            </div>
                            
                        </div>
                        <br>
                          <input style="background-color:green;" class="btn btn-primary" type="submit" name="submit" 
                          value="ارسال">



                    </form>



                    
        
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"?>