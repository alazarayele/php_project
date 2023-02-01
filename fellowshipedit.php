<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit department
            

</h6>
</div>
<div class="card-body">





<?php

       if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    $query = "SELECT * FROM felloship WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
 
    foreach($query_run as $row)
    {
        ?>
    



<form action="code.php" method="POST"  enctype="multipart/form-data">
<input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
<div class="form-group">


                <label>የ ህብረት ስም </label>
                <input type="text" name="edit_name"  value="<?php echo $row['name']?>" class="form-control" placeholder="Enter Username">
            </div>
            
            <div class="form-group">
                <label>የ ህብረት ቀን</label>
                <input type="text" name="edit_date"  value="<?php echo $row['date']?>" class="form-control" placeholder="Enter Password">
            </div>
            
            <div class="form-group">


                <label> የ ህብረት ሰዓት</label>
                <input type="text" name="edit_time"  value="<?php echo $row['time']?>" class="form-control" placeholder="Enter Username">
            </div>
            
            <div class="form-group">
                <label>የ ህብረት አይነት </label>
                <input type="text" name="edit_type"  value="<?php echo $row['type']?>" class="form-control" placeholder="Enter Password">
            </div>
            
            <div class="form-group">


                <label>የ ህብረት  ቦታ </label>
                <input type="text" name="edit_place"  value="<?php echo $row['place']?>" class="form-control" placeholder="Enter Username">
            </div>
            
            <div class="form-group">
                <label>የ ህብረት መሪ ስም</label>
                <input type="text" name="edit_leader"  value="<?php echo $row['leader']?>" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>የ ሰዎች ብዛት</label>
                <input type="text" name="edit_number"  value="<?php echo $row['numberofpeople']?>" class="form-control" placeholder="Enter Password">
            </div>
            
            
               <a href="felloship.php" class="btn btn-danger">CANCEL </a>
               <button type="submit" name="fellUPDATEBTN" class="btn btn-primary">UPDATE</button>
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