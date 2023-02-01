<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">ማስተካከያ 
            

</h6>
</div>
<div class="card-body">





<?php
$connection = mysqli_connect("localhost","root","","snv");
       if(isset($_POST['e_btn']))
{
    $id = $_POST['e_id'];
    $query = "SELECT * FROM child WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
 
    foreach($query_run as $row)
    {
        ?>
    



<form action="code.php" method="POST">
<input type="hidden" name="e_id" value="<?php echo $row['id']?>">
<div class="form-group">


                <label> ህብረት </label>
                <input type="text" name="e_hbret"  value="<?php echo $row['hbret']?>" class="form-control" placeholder="ህብረት">
            </div>
             <div class="col-sm-3">
                    <label >የመኖሪያ ሰፈር</label>
                    

                <select name="yemenoria_sefer"  class="form-control"  >
                <option >  </option>
                <option value="Arada" <?php  if($row["yemenoria_sefer"]=='Arada'){echo "selected";}?>> አራዳ ክፍለ ከተማ  </option>
                <option value="Akaki" <?php  if($row["yemenoria_sefer"]=='Akaki'){echo "selected";}?> > አቃቂ ቃሊቲ ክፍለ ከተማ </option>
                <option value="AddisKetema" <?php  if($row["yemenoria_sefer"]=='AddisKetema'){echo "selected";}?>> አዲስ ከተማ ክፍለ ከተማ  </option>
                <option value="Bole"<?php  if($row["yemenoria_sefer"]=='Bole'){echo "selected";}?>> ቦሌ ክፍለ ከተማ  </option>
                <option value="Gullele"<?php  if($row["yemenoria_sefer"]=='Gullele'){echo "selected";}?>> ጉለሌ ክፍለ ከተማ   </option>
                <option value="Kirkos"<?php  if($row["yemenoria_sefer"]=='Kirkos'){echo "selected";}?>> ቂርቆስ ክፍለ ከተማ </option>
                <option value="KolfeKeranio"<?php  if($row["yemenoria_sefer"]=='KolfeKeranio'){echo "selected";}?>> ኮልፌ ቀራኒዮ ክፍለ ከተማ   </option>
                <option value="Lideta"<?php  if($row["yemenoria_sefer"]=='Lideta'){echo "selected";}?>>ልደታ ክፍለ ከተማ  </option>
                <option value="NefasSilk "<?php  if($row["yemenoria_sefer"]=='NefasSilk'){echo "selected";}?>> ንፋስ ስልክ ክፍለ ከተማ  </option>
                <option value="Yeka"<?php  if($row["yemenoria_sefer"]=='Yeka'){echo "selected";}?>> የካ ክፍለ ከተማ </option>
               
                </select>
                       
                   
                    </div>
            <div class="form-group">
                <label>ስልክ</label>
                <input type="text" name="e_phone" value="<?php echo $row['phone']?>" class="form-control" placeholder="ስልክ">
            </div>
            
            <div class="form-group">
                <label>የትምርት ደረጃ</label>
                <input type="text" name="e_class" value="<?php echo $row['class']?>" class="form-control" placeholder="class">
            </div>
           

               <a href="childreport.php" class="btn btn-danger">CANCEL </a>
               <button type="submit" name="UBTN" class="btn btn-primary">UPDATE</button>
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