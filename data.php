 




                    
        
<?php include "db.php";?>
<?php include "functions3.php" ;?>
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
                           <!-- id number -->
                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="id">
                               
                            </div>
                             <div class="name">الرقم العسكرى</div>
                        </div>
                             <!-- degree -->

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="degree">
                            </div>

                                <div class="name">درجه/رتبة </div>
                        </div>

                        <!-- name -->

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="name">
                            </div>
                             <div class="name">اسم</div>

                        </div>
                        <!-- wepon-->

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="weapon">
                                
                            </div>
                            <div class="name">السلاح</div>
                        </div>
                      <!-- birthdate -->

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="birthdate">
                                
                            </div>
                            <div class="name">تاريخ الميلاد</div>
                        </div>
                           <!-- birthsolider -->

                           <!--  <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="birtharmy">
                                
                            </div>
                            <div class="name">تاريخ التجنيد</div>
                        </div> -->


                              <!-- birthof entry -->

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="birthentry">
                                
                            </div>
                            <div class="name">تاريخ الضم</div>
                        </div>


                      <!-- birth go -->

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="birthwent">
                                
                            </div>
                            <div class="name">تاريخ التسريح</div>
                        </div>


                      <!-- qulifaction-->

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="qulifaction">
                                
                            </div>
                            <div class="name">المؤهل</div>
                        </div>


                            <!--religon  -->

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="religon">
                                
                            </div>
                            <div class="name">الديانة</div>
                        </div>

                               <!-- id -->

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="idnum">
                                
                            </div>
                            <div class="name">رقم البطاقة</div>
                        </div>

                                <!-- address -->

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="address">
                               
                            </div>
                             <div class="name">العنوان</div>
                        </div>
                              <!-- department -->

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="department">
                                
                            </div>
                            <div class="name">القطاع</div>
                        </div>
                             <!-- exit/noexit in union -->

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="kowa">
                                
                            </div>
                            <div class="name">قوة/ملحق</div>
                        </div>
                           <!-- holidays -->

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="holiday">
                                
                            </div>
                            <div class="name">نظام الاجازات</div>
                        </div>
                               <!-- status -->

                            <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="status">
                                
                            </div>
                            <div class="name">الحاله الاجتماعية</div>
                        </div>
                         <!-- name -->

                        
                   
                            
                        <br>
                          <input style="background-color:green ;" class="btn btn-primary" type="submit" name="submit" 
                          value="CREATE">



                    </form>



                    
        
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"?>