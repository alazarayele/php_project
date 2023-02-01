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
    $query = "SELECT * FROM department WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
 
    foreach($query_run as $row)
    {
        ?>
    



<form action="code.php" method="POST"  enctype="multipart/form-data">
<input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
<div class="form-group">


                <label> NAME </label>
                <input type="text" name="edit_name"  value="<?php echo $row['name']?>" class="form-control" placeholder="Enter Username">
            </div>
            
            <div class="form-group">
                <label>DESCRIPTION</label>
                <input type="text" name="edit_description"  value="<?php echo $row['description']?>" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>IMAGES</label>
                <input type="file" name="edit_file" id="edit_file" value="<?php echo $row['image']?>" class="form-control" placeholder="Enter Password">
            </div>
            
               <a href="departments.php" class="btn btn-danger">CANCEL </a>
               <button type="submit" name="deptUPDATEBTN" class="btn btn-primary">UPDATE</button>
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