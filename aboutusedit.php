<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit About US
            

</h6>
</div>
<div class="card-body">





<?php
$connection = mysqli_connect("localhost","root","","snv");
       if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    $query = "SELECT * FROM about WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
 
    foreach($query_run as $row)
    {
        ?>
    



<form action="code.php" method="POST">
<input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
<div class="form-group">


                <label> Title </label>
                <input type="text" name="edit_title"  value="<?php echo $row['title']?>" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Subtitle</label>
                <input type="text" name="edit_subtitle" value="<?php echo $row['subtitle']?>" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Description</label>
                            <textarea  
                 placeholder="Enter Description"
                          style="resize:vertical "
                          
                           name="description"
                           rows="5" spellcheck="false"
                           class="form-control  text-left" >
                           <?php echo $row['description']?>
                          </textarea>
            </div>

            <div class="form-group">
                <label>Links</label>
                <input type="text" name="edit_link"  value="<?php echo $row['links']?>" class="form-control" placeholder="Enter Password">
            </div>
               <a href="aboutus.php" class="btn btn-danger">CANCEL </a>
               <button type="submit" name="updateaboutus" class="btn btn-primary">UPDATE</button>
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