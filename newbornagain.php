<?php

include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>






<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  
  <!-- End of Topbar -->

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">
    <?php
   if(isset($_SESSION['success'])&& $_SESSION['success']  !='')
   {
     echo '<h2>'.$_SESSION['success'].' </h2>';
     unset($_SESSION['success']);
    
   }


   if(isset($_SESSION['status'])&& $_SESSION['status']  !='')
   {
     echo '<h2>'.$_SESSION['status'].' </h2>';
     unset($_SESSION['status']);
    
   }
  ?>

       <div class="col-md-10 mx-auto">
            <form  action="code.php"  method="POST"  enctype="multipart/form-data">
                <div class="form-group row">


                <div class="form-group row">
                    <div class="col-sm-2">
                        <label for="inputfn">የመጠሪያ ስም </label>
                        <input type="text" name="fname" class="form-control" id="" placeholder="first name">
                    </div>
                    <div class="col-sm-2">
                        <label for="inputmn">የአባት ስም </label>
                        <input type="text"  name="mname" class="form-control" id="inputState" placeholder="middle name">
                    </div>
                    <div class="col-sm-2">
                        <label for="inputln">የአያት ስም</label>
                        <input type="text"  name="lname" class="form-control" id="inputState" placeholder="last name">
                    </div>
                 
                    <div class="col-sm-3">
                        <label for="inputState">ጌታን የ ተቀበለ ቀን</label>
                        <input type="date"  name="mdate" class="form-control" id="inputState" placeholder="membership date">
                        
                    </div>
                    

                </div>
                    <div class="col-sm-6" style="display: flex; 
  align-items: center; 
  justify-content: left;
  text-align: center; ">
                    <label class="radio-inline">ጾታ 
                            </label>&nbsp;&ensp;
                    
                    <input type="radio" name="gender" value="male"/>male 
                      <input type="radio"  name="gender" value="female"/>female
                          
                    </div>
                  
                    <div class="col-sm-3">
                    <label for="inputState">የቤት ሁኔታ</label>
                   

                <select name="house"  class="form-control" value="" >
                <option value="">  </option>
                <option value="owner"> ባለቤት  </option>
                <option value="rental"> ተከራይ    </option>
                <option value="with"> ከቤተሰብ፣ከጉዋደኛ፣ከሰው ተጠግቶ... </option>
                </select>
                       
                   
                    </div>
                </div>
                <div class="form-group row">
                 
                    <div class="col-sm-3">
                        <label for="inputAddressLine1">  የተወለደበት ቀን</label>
                        <input type="date"  name="dbirth" class="form-control" id="inputAddressLine1" placeholder="birth date">
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">የመኖሪያ ሰፈር</label>
                    

                <select name="address"  class="form-control"  >
                <option >  </option>
                <option value="Arada"> አራዳ ክፍለ ከተማ  </option>
                <option value="Akaki"> አቃቂ ቃሊቲ ክፍለ ከተማ </option>
                <option value="AddisKetema"> አዲስ ከተማ ክፍለ ከተማ  </option>
                <option value="Bole"> ቦሌ ክፍለ ከተማ  </option>
                <option value="Gullele"> ጉለሌ ክፍለ ከተማ   </option>
                <option value="Kirkos"> ቂርቆስ ክፍለ ከተማ </option>
                <option value="KolfeKeranio"> ኮልፌ ቀራኒዮ ክፍለ ከተማ   </option>
                <option value="Lideta">ልደታ ክፍለ ከተማ  </option>
                <option value="NefasSilk "> ንፋስ ስልክ ክፍለ ከተማ  </option>
                <option value="Yeka"> የካ ክፍለ ከተማ </option>
               
                </select>
                       
                   
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">የስራ አይነት</label>
                   
                
                <select name="work"  class="form-control" >
                <option >  </option>
                <option value="Privateowner"> የግል ባለቤት </option>
                <option value="Privateemployee"> የግል ተቀጣሪ</option>
                <option value="govermental">  የመንግስት  </option>
                <option value="ngo"> ኤንጂኦ </option>
                <option value="student"> ተማሪ   </option>
                <option value="perday"> የቀን   </option>
                <option value="nojobs"> ስራ የለኝም  </option>
                <option value="other"> ሌሎች </option>
                </select>
                       
                   
                    </div>
                    <div class="col-sm-1" style="display: flex; 
  align-items: center; 
  justify-content: left;
  text-align: center; ">
                   
                      
                    <input type="hidden" name="baptized" value="no">
                      
                     <label class="radio-inline"  name="dekemezmur" class="form-control">
                      
                    </div>
                        
                    
            
                </div>
                <div class="form-group row">
                    
                    
                
                    
                </div>
                <div class="form-group row">
               
                    <div class="col-sm-3">
                    <label for="inputState">የስልክ ቁጥር</label>
                    

              
                    <input type="number" name="pnumber" class="form-control" id="inputWebsite" placeholder="phone number">
                
                    </div>
                   
                    <div class="col-sm-3">
                    <label for="inputState">የትዳር ሁኔታ</label>
                   

                <select name="wstate"  class="form-control" >
                <option value="">  </option>
                <option value="single"> ያላገባ  </option>
                <option value="married"> ባለትዳር  </option>
                <option value="widow(er)"> ባል ወይም ሚስት የሞተበት </option>
                <option value="divorced"> የፈታ  </option>

                </select>
                       
                   
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">የ አካባቢው መጠሪያ</label>
                        <input type="text" name="addressofstreet" class="form-control" id="inputState" placeholder="#">
                    </div>
                </div>

            
                           <div class="form-group row">
                           

                
                    <div class="col-sm-3">
                        <label for="inputState">የ አደጋ ጊዜ ተጠሪ  ስልክ ቁጥር</label>
                        <input type="text" name="emergencyphonenumber" class="form-control" id="inputState" placeholder="#">
                    </div>

                           </div>
               
                <button type="submit" name="insertnewborn" class="btn btn-primary px-4 float-right">Save</button>
            </form>
        </div>


    </div>
   
  </div>
  <!-- /.container-fluid -->

 <!-- End of Main Content -->
              <?php     
            $date = date ('F d, y, g: i a');
   echo $date;
     ?>
<?php


include('includes/scripts.php');

include('includes/footer.php');
?>