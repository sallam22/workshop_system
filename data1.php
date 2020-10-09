 




                    
        
<?php include "db.php";?>
<?php include "functions4.php" ;?>
<?php createRows(); ?>
<?php include "includes/header.php" ?>










<div style="background-color: darkcyan;"  class="page-wrapper bg-dark p-t-100 p-b-50">
        <div  class="wrapper wrapper--w900">
            <div  class="card card-6">
                <div  class="card-heading">
                    <h2   style="background-color: darkcyan;" class="title">Apply for personial data</h2>
                </div>
                <div  class="card-body">
                    <form  method="POST" >
                           
                         
                            

                        <!-- name -->

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="name">
                            </div>
                             <div class="name">اسم</div>

                        </div>
                        <!-- depart-->

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="dept">
                                
                            </div>
                            <div class="name"> القطاع</div>
                        </div>
                      <!-- holiday -->

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="holiday">
                                
                            </div>
                            <div class="name"> نظام الاجازات</div>
                        </div>
                           <!-- birthsolider -->

                           <!--  <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="birtharmy">
                                
                            </div>
                            <div class="name">تاريخ التجنيد</div>
                        </div> -->


                              <!-- birtt of go -->

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="hgo">
                                
                            </div>
                            <div class="name"> تاريخ  النزول</div>
                        </div>


                      <!-- birth of back -->

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="hback">
                                
                            </div>
                            <div class="name"> تاريخ العودة</div>
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