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


       <?php

$connection = mysqli_connect("localhost","root","","snv");
       if(isset($_POST['ed_btn']))
{
    $id = $_POST['ed_id'];
    $query = "SELECT * FROM bap WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
 
    foreach($query_run as $row)
    {
        ?>
    



<form action="code.php" method="POST">
<input type="hidden" name="ed_id" value="<?php echo $row['id']?>">
            
             <div class="col-sm-3">
                    <label >የመኖሪያ ሰፈር</label>
                    

                <select name="sefer"  class="form-control"  >
                <option >  </option>
                <option value="Arada" <?php if($row["sefer"] == 'Arada'){ echo "selected";}?>> አራዳ ክፍለ ከተማ  </option>
                <option value="Akaki"<?php if($row["sefer"] =='Akaki'){ echo "selected";}?>> አቃቂ ቃሊቲ ክፍለ ከተማ </option>
                <option value="AddisKetema"<?php if($row["sefer"] =='AddisKetema'){ echo "selected";}?>> አዲስ ከተማ ክፍለ ከተማ  </option>
                <option value="Bole"<?php if($row["sefer"] == 'Bole'){ echo "selected";}?>> ቦሌ ክፍለ ከተማ  </option>
                <option value="Gullele"<?php if($row["sefer" == 'Gullele']){ echo "selected";}?>> ጉለሌ ክፍለ ከተማ   </option>
                <option value="Kirkos"<?php if($row["sefer"] == 'Kirkos'){ echo "selected";}?>> ቂርቆስ ክፍለ ከተማ </option>
                <option value="KolfeKeranio"<?php if($row["sefer"] == 'KolfeKeranio'){ echo "selected";}?>> ኮልፌ ቀራኒዮ ክፍለ ከተማ   </option>
                <option value="Lideta"<?php if($row["sefer"] == 'Lideta'){ echo "selected";}?>>ልደታ ክፍለ ከተማ  </option>
                <option value="NefasSilk "<?php if($row["sefer"] == 'NefasSilk'){ echo "selected";}?>> ንፋስ ስልክ ክፍለ ከተማ  </option>
                <option value="Yeka"<?php if($row["sefer"] == 'Yeka'){ echo "selected";}?>> የካ ክፍለ ከተማ </option>
                </select>
                       </div>


            <div class="col-sm-3">
                <label> ስልክ </label>
                <input type="text" name="ed_phone" value="<?php echo $row['phone']?>"class="form-control" placeholder="#">
            </div>

             <div class="col-sm-3">
                    <label >የስራ አይነት</label>
                   
                
                <select name="sira"  class="form-control" >
                <option >  </option>
                <option value="Privateowner" <?php if($row["sira"] == 'Privateowner'){echo "selected";}?>> የግል ባለቤት </option>
                <option value="Privateemployee"<?php if($row["sira"] == 'Privateemployee'){echo "selected";}?>> የግል ተቀጣሪ</option>
                <option value="govermental"<?php if($row["sira"] == 'govermental'){echo "selected";}?>>  የመንግስት  </option>
                <option value="ngo"<?php if($row["sira"] == 'ngo'){echo "selected";}?>> ኤንጂኦ </option>
                <option value="student"<?php if($row["sira"] == 'student'){echo "selected";}?>> ተማሪ   </option>
                <option value="perday"<?php if($row["sira"] == 'perday'){echo "selected";}?>> የቀን   </option>
                <option value="nojobs"<?php if($row["sira"] == 'nojobs'){echo "selected";}?>> ስራ የለኝም  </option>
                <option value="other"><?php if($row["sira"] == 'other'){echo "selected";}?> ሌሎች </option>
                </select>
                       
                   
            </div>
                     <div class="col-sm-3">
                <label>አስተማሪ </label>
                <input type="text" name="ed_tech" value="<?php echo $row['tech']?>"class="form-control" placeholder="#">
            </div>
           
            <a href="bapreport.php" class="btn btn-danger">CANCEL </a>
               <button type="submit" name="UN" class="btn btn-primary">UPDATE</button>
               </form>
            <?php

}

}
?>
</div>
</div>
</div>
</div>










<?php
include('includes/scripts.php');
include('includes/footer.php');
?>