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
                        <label for="inputState">አባልነት ያገኙበት ቀን</label>
                        <input type="date"  name="mdate" class="form-control" id="inputState" placeholder="membership date">
                        
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">አባልነት ያገኙበት መንገድ</label>
                    

                <select name="mtype"  class="form-control"  >
                <option value="">   </option>
                <option value="marraige"> በትዳር</option>
                <option value="changing_living_place">  የመኖሪያ ቦታ በመቀየር    </option>
                <option value="Chaning_church_membership"> የቸርች አባልነት በመቀየር  </option>
                <option value="changing_country"> ሀገር  በመቀየር </option>
                <option value="New_Christian">  ጌታን በመቀበል </option>
                <option value="Baptized"> ቸርች በማደግ እና በመጠመቅ </option>
                <option value="back_again"> ባክ አድርጎ እንደገና  </option>
                <option value="is_not_membership_of_any_church">  በተለያዩ ምክንያቶች አባልነት ያልነበረው </option>
                </select>
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
                        <label for="inputState">የልጆች ብዛት</label>
                        <input type="text" name="nchildren" class="form-control" id="inputState" placeholder="#">
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">አገልግሎት</label>
                    <label>  አይነት</label>

                <select name="service"  class="form-control"  >
                <option value="">  </option>
                <option value="half"> ግማሽ ጊዜ</option>
                <option value="full"> ሙሉ ጊዜ  </option>
                <option value="none"> ምንም  </option>
                </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="inputAddressLine1">የተወለደበት ቦታ </label>
                        <input type="text" name="bplace" class="form-control" id="inputAddressLine1" placeholder="birth place">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputAddressLine1">  የተወለደበት ቀን</label>
                        <input type="date"  name="dbirth" class="form-control" id="inputAddressLine1" placeholder="birth date">
                    </div>
                    <div class="col-sm-1" style="display: flex; 
  align-items: center; 
  justify-content: left;
  text-align: center; ">
                   
                         <input type="hidden" name="alive" value="yes">
                    
                     <label class="radio-inline"  name="alive" class="form-control">
                    
                    </div>
                    <div class="col-sm-1" style="display: flex; 
  align-items: center; 
  justify-content: left;
  text-align: center; ">
                   
                      
                    <input type="hidden" name="leave" value="no">
                      
                     <label class="radio-inline"  name="leave" class="form-control">
                      
                    </div>
                    


<?php

$fell = "SELECT * FROM felloship";
$fell_run = mysqli_query($connection,$fell);

if(mysqli_num_rows($fell_run) > 0)
{
  ?>
  <div class="col-sm-4" style="display: flex; 
  align-items: center; 
  justify-content: left;
  text-align: center; ">
<label class="radio-inline">ህብረት
                            </label>&nbsp;&ensp;

                            <select name="felloship"  class="form-control"  >
                            <option >  </option>

<?php
foreach($fell_run as $row)
{
 ?>
 <option value="<?php echo $row['id']; ?>"><?php echo $row['name'];?> </option>
 <?php
}
?>
</select>

</div>
<?php
}
 else{
   echo"no record";
 }

  ?>

     
            
                </div>
                <div class="form-group row">
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
                    <div class="col-sm-6">
                        <label for="inputState">ፎቶ</label>
                        <input type="file" name="image" class="form-control" id="inputState" placeholder="State">
                    </div>
                    
                </div>
                <div class="form-group row">
                <div class="col-sm-3">
                    <label for="inputState">የቤት ሁኔታ</label>
                   

                <select name="house"  class="form-control" value="" >
                <option value="">  </option>
                <option value="owner"> ባለቤት  </option>
                <option value="rental"> ተከራይ    </option>
                <option value="with"> ከቤተሰብ፣ከጉዋደኛ፣ከሰው ተጠግቶ... </option>
                </select>
                       
                   
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">የስልክ ቁጥር</label>
                    

              
                    <input type="number" name="pnumber" class="form-control" id="inputWebsite" placeholder="phone number">
                
                    </div>
                    <div class="col-sm-4">
                    <label for="inputState">የትምርት አይነት</label>
                    

                <select name="schooltype"  class="form-control"  >
                <option value="">   </option>
                <option value="agriculture"> ግብርና </option>
                <option value="engineering">  ኢንጅነሪንግ     </option>
                <option value="medicine"> ጤና ዘርፍ </option>
                <option value="accounting">አካውንቲግ   </option>
                <option value="bussines">  ቢዝነስ </option>
                <option value="communication"> ኮሚኒኬሽን   </option>
                <option value="computer_science"> ኮፒተር  ሳይንስ  </option>
                <option value="teaching">  አስተማሪ  </option>
                <option value="law">  ህግ   </option>
                <option value="sport"> ስፖርት   </option>
                <option value="social_science"> ሶሻልሳይንስ   </option>
                <option value="natural_science"> ናቹራል ሳይንስ  </option>
                <option value="other">  ከተዘርዝሩት ውጪ  </option>
                </select>
                    </div>
                  
                </div>

                <div class="form-group row">
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
                    <label for="inputState">የሰርግ ቀን</label>
                    

              
                    <input type="date"  name="wdate" class="form-control" id="inputWebsite" placeholder="phone number">
                
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">የትምርት ደረጃ</label>
                    

                <select name="levelofschool"  class="form-control"  >
                <option value="">   </option>
                <option value="housewife"> የ ቤት እመቤት </option>
                <option value="fiveth">  ከ 5ተኛ በታች   </option>
                <option value="tenth"> ከ 10ኛ በታች   </option>
                <option value="twelve"> ከ 12ኛ በታች </option>
                <option value="tenplusone">  10 +1 </option>
                <option value="tenplusetwo"> 10 +2 </option>
                <option value="tenplusethree"> 10 +3 </option>
                <option value="certificate">  ሰርተፍኬት   </option>
                
                <option value="diploma"> ዲፕሎማ  </option>
                <option value="degree"> ዲግሪ  </option>
                <option value="masters">  ማስተርስ </option>
                <option value="doctrate">ዶክትሬት</option>
             
                </select>
                    </div>
                </div>

                           <div class="form-group row">
                           
                           <div class="col-sm-4">
                    <label for="inputState">በወር ስንት ጊዜ ቸርች ይካፈላሉ</label>
                    

                <select name="dayspermonth"  class="form-control"  >
                <option value="">   </option>
                <option value="verylow">  ፩ ጊዜ</option>
                <option value="low">   ፪ ጊዜ-፫ ጊዜ    </option>
                <option value="moderate"> ፬ ጊዜ-፭ ጊዜ   </option>
                <option value="good"> ፮ ጊዜ-፯ ጊዜ  </option>
                <option value="verygood">   ፰ ጊዜ-፱ ጊዜ   </option>
                <option value="excellent">  ፲ ጊዜ-፩፭ጊዜ </option>
                <option value="outstanding"> ፩፮ ጊዜ-፳ጊዜ </option>
                <option value="fulltimeservice">   ፪፭ጊዜ-፴ጊዜ </option>
                </select>
                    </div>



                    <div class="col-sm-3">
                        <label for="inputState">እድሜ</label>
                        <input type="text" name="age" class="form-control" id="inputState" placeholder="#">
                    </div>
                    
                    <div class="col-sm-3">
                        <label for="inputState">የ አካባቢው መጠሪያ</label>
                        <input type="text" name="addressofstreet" class="form-control" id="inputState" placeholder="#">
                    </div>
                   
                           </div>
                           <div class="form-group row">
                           <div class="col-sm-4">
                        <label for="inputState">ኢኮኖሚክ ሰፖርት ይፈልጋሉ</label>
                        <input type="text" name="economic" class="form-control" id="inputState" placeholder="#">
                    </div>

                    <div class="col-sm-3">
                        <label for="inputState">የ አደጋ ጊዜ ተጠሪ ስም</label>
                        <input type="text" name="emergency" class="form-control" id="inputState" placeholder="#">
                    </div>
                    
                    <div class="col-sm-4">
                        <label for="inputState">የ አደጋ ጊዜ ተጠሪ  ስልክ ቁጥር</label>
                        <input type="text" name="emergencyphonenumber" class="form-control" id="inputState" placeholder="#">
                    </div>

                           </div>
               
                <button type="submit" name="insertrecord" class="btn btn-primary px-4 float-right">Save</button>
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