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
<form action="code.php" method="POST">

      <div class="form-group row">
            <div class="col-sm-3">
                <label> የመጠሪያ ስም </label>
                <input type="text" name="fname" class="form-control" placeholder=" የመጠሪያ ስም ">
            </div>
            
            <div class="col-sm-3">
                        <label >የአባት ስም</label>
                        <input type="text"  name="mname" class="form-control" placeholder="የአባት ስም">
            </div> 
             
            <div class="col-sm-3">
                        <label >የአያት ስም</label>
                        <input type="text"  name="lname" class="form-control" placeholder="የአያት ስም">
            </div> 
            </div> 
            <div class="form-group row">
            <div class="col-sm-6" style="display: flex; 
  align-items: center; 
  justify-content: left;
  text-align: center; ">
                    <label class="radio-inline">ጾታ
                            </label>&nbsp;&ensp;
                    
                    <input type="radio" name="sex" value="male"/>male 
                      <input type="radio"  name="sex" value="female"/>female
                          
                    </div>
                    </div>
                    <div class="form-group row">
            <div class="col-sm-3">
                <label>የተመዘገበበት ቀን</label>
                <input type="date" name="bap_date" class="form-control" placeholder=">#">
            </div>
            <div class="col-sm-3">
                <label>የተወለደበት ቀን </label>
                <input type="date" name="birth_date" class="form-control" placeholder=">#">
            </div>
            
            <div class="col-sm-3">
                    <label >የመኖሪያ ሰፈር</label>
                    

                <select name="sefer"  class="form-control"  >
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
            </div>
                   
            
            <div class="form-group row">
            <div class="col-sm-3">
                <label> ስልክ </label>
                <input type="text" name="phone" class="form-control" placeholder="#">
            </div>
           
            <div class="col-sm-3">
                    <label >የስራ አይነት</label>
                   
                
                <select name="sira"  class="form-control" >
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
                    <div class="col-sm-3">
                        <label >የ አካባቢው መጠሪያ</label>
                        <input type="text" name="meteria" class="form-control" id="inputState" placeholder="#">
                    </div>

               
            
             </div>
                   
          
            <div class="form-group row">
               <div class="col-sm-3">
                <label>አስተማሪ </label>
                <input type="text" name="tech" class="form-control" placeholder="#">
            </div>
            <div class="col-sm-3">
                <label> የ አደጋ ጊዜ ተጠሪ ስም  </label>
                <input type="text" name="adega_teteri" class="form-control" placeholder="#">
            </div>
            <div class="col-sm-3">
                <label> የ አደጋ ጊዜ ተጠሪ  ስልክ ቁጥር </label>
                <input type="text" name="adegateteri_slk" class="form-control" placeholder="#">
            </div>
            </div>
           
            <button type="submit" name="bap" class="btn btn-primary">Save</button>
        </div>
    </div>
      </form>
      </div>
  




<!-- DataTales Example -->

           <?php     
            $date = date ('F d, y, g: i a');
   echo $date;
     ?>

 <?php   
include('includes/scripts.php');
include('includes/footer.php');
?>