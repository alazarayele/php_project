<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> የወጪ መመዝገቢያ ፎርም</h6>
  </div>

  <div class="card-body">

  <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !=' ')
     {
       echo '<h2 class= "bg-primary text-white">'.$_SESSION['success'].'</h2>';
       unset($_SESSION['success']);
     }
     if(isset($_SESSION['status']) && $_SESSION['status'] !=' ')
     {
       echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
       unset($_SESSION['status']);
     }

  ?>
</div>
</div>

                    <div class="col-md-10 mx-auto">
<form action="code.php" method="POST">
       <?php
          $requ = "SELECT * FROM req";
          $re_run = mysqli_query($connection, $requ);

          if(mysqli_num_rows($re_run) > 0)
          {
            ?>

             <div class="form-group row">
            <div class="col-sm-3">
                <label> የተከፋይ ስም </label>
                 <select name="yetekefay_sm"  class="form-control" >
                     <option value="">የተከፋይ ስም</option>
                     <?php
                         foreach($re_run as $row)
                      {     
                     ?>

                     <option value="<?php echo $row['rq_id']; ?>"><?php echo $row['rq_id']; ?>-><?php echo $row['rq_laki_id']; ?></option>
                    <?php
                        }
                    ?>



                 </select>
                
            </div>
        </div>
          

             
        
          <?php

          }
          else
          {

            echo "no data";
          }

         
          

       ?>
 

      <div class="form-group row">
            <div class="col-sm-3">
                <label> የአገልግሎት ዘርፍ </label>
                <input type="text" name="yeagelglot_zerf" class="form-control" placeholder="የአገልግሎት ዘርፍ ">
            </div>
            
            <div class="col-sm-3">
                        <label >ፕሮግራሙ የተካሄደበት የመጀመሪያ ቀን</label>
                        <input type="date"  name="fdate" class="form-control" placeholder="DATE">
            </div> 
             
            <div class="col-sm-3">
                        <label >ፕሮግራሙ የተካሄደበት የመጨረሻ ቀን</label>
                        <input type="date"  name="ldate" class="form-control" placeholder="DATE">
            </div> 
            </div> 
            <div class="form-group row">
            <div class="col-sm-3">
                <label> የተሳታፊ ብዛት </label>
                <input type="text" name="tesatafi_bzat" class="form-control" placeholder="#">
            </div>

            <div class="col-sm-3">
                <label> የአንዱ ዋጋ </label>
                <input type="text" name="andu_waga" class="form-control" placeholder="#">
            </div>

            <div class="col-sm-3">
                
                <input type="hidden" name="teklala_waga" class="form-control" placeholder="teklala birr">
            </div>
           
        </div>
        <div class="form-group row">
        <div class="col-sm-3">
                <label> አስተያየት </label>
                <textarea cols="50" rows="3" name="asteyayet"class="form-control" placeholder="#"></textarea><br>
            </div>
            </div>
        <div >
        <div class="form-group row">
            <div class="col-sm-3">
                <label> የአገልግሎት ዘርፍ ተወካዮች ስም </label>
                <input type="text" name="tewekay_one" class="form-control" placeholder="የተወካይ ስም 1 ">
            </div>
            <div class="col-sm-3">
                <label>  </label>
                <input type="text" name="tewekay_fone" class="form-control" placeholder="የአባት ስም">
            </div>
            <div class="col-sm-3">
                <label> የአገልግሎት ድርሻ </label>
                <input type="text" name="agelglot_drshaone" class="form-control" placeholder="ድርሻ">
            </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-3">
                <label>  </label>
                <input type="text" name="tewekay_two" class="form-control" placeholder="የተወካይ ስም 2">
            </div>
            <div class="col-sm-3">
                <label>  </label>
                <input type="text" name="tewekay_ftwo" class="form-control" placeholder=" የአባት ስም">
            </div>
            <div class="col-sm-3">
                <label>  </label>
                <input type="text" name="agelglot_drshatwo" class="form-control" placeholder="ድርሻ">
            </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-3">
                <label>  </label>
                <input type="text" name="tewekay_three" class="form-control" placeholder="የተወካይ ስም 3">
            </div>
            <div class="col-sm-3">
                <label>  </label>
                <input type="text" name="tewekay_fthree" class="form-control" placeholder="የአባት ስም ">
            </div>
            <div class="col-sm-3">
                <label>  </label>
                <input type="text" name="agelglot_drshathree" class="form-control" placeholder="ድርሻ">
            </div>
            </div>
           

            <button type="submit" name="reqsub" class="btn btn-primary">Save</button>
        </div>
    </div>
      </form>
      </div>
  




<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> የወጪ መመዝገቢያ ፎርም</h6>
  </div>

  <div class="card-body">

  <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !=' ')
     {
       echo '<h2 class= "bg-primary text-white">'.$_SESSION['success'].'</h2>';
       unset($_SESSION['success']);
     }
     if(isset($_SESSION['status']) && $_SESSION['status'] !=' ')
     {
       echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
       unset($_SESSION['status']);
     }

  ?>
           <?php     
            $date = date ('F d, y, g: i a');
   echo $date;
     ?>

 <?php   
include('includes/scripts.php');
include('includes/footer.php');
?>