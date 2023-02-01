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
    $query = "SELECT * FROM records WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
 
    foreach($query_run as $row)
    {
        ?>
    



<form action="code.php" method="POST">
<input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
<div class="form-group row">
            <div class="col-sm-3">
                        <label for="inputState">የልጆች ብዛት</label>
                        <input type="text" name="nchildren" value="<?php echo $row['nochildren']?>" class="form-control" id="inputState" placeholder="#">
                    </div>
                    
                    <div class="col-sm-3">
                    <label for="inputState">አገልግሎት</label>
                    <label>  አይነት</label>

                <select name="service"  class="form-control"  >
                <option value="">  </option>
                <option value="half"  <?php  if($row["service"]=='half'){echo "selected";}?> > ግማሽ ጊዜ</option>
                <option value="full"  <?php  if($row["service"]=='full'){echo "selected";}?>> ሙሉ ጊዜ  </option>
                <option value="none"  <?php  if($row["service"]=='none'){echo "selected";}?>> ምንም  </option>
                </select>
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">የመኖሪያ ሰፈር</label>
                    

                <select name="address"  class="form-control"  >
                <option >  </option>
                <option value="Arada" <?php  if($row["address"]=='Arada'){echo "selected";}?>> አራዳ ክፍለ ከተማ  </option>
                <option value="Akaki" <?php  if($row["address"]=='Akaki'){echo "selected";}?>> አቃቂ ቃሊቲ ክፍለ ከተማ </option>
                <option value="AddisKetema" <?php  if($row["address"]=='AddisKetema'){echo "selected";}?>> አዲስ ከተማ ክፍለ ከተማ  </option>
                <option value="Bole" <?php  if($row["address"]=='Bole'){echo "selected";}?>> ቦሌ ክፍለ ከተማ  </option>
                <option value="Gullele" <?php  if($row["address"]=='Gullele'){echo "selected";}?>> ጉለሌ ክፍለ ከተማ   </option>
                <option value="Kirkos" <?php  if($row["address"]=='Kirkos'){echo "selected";}?>> ቂርቆስ ክፍለ ከተማ </option>
                <option value="KolfeKeranio" <?php  if($row["address"]=='KolfeKeranio'){echo "selected";}?>> ኮልፌ ቀራኒዮ ክፍለ ከተማ   </option>
                <option value="Lideta" <?php  if($row["address"]=='Lideta'){echo "selected";}?>>ልደታ ክፍለ ከተማ  </option>
                <option value="NefasSilk" <?php  if($row["address"]=='NefasSilk'){echo "selected";}?>> ንፋስ ስልክ ክፍለ ከተማ  </option>
                <option value="Yeka" <?php  if($row["address"]=='Yeka'){echo "selected";}?>> የካ ክፍለ ከተማ </option>
               
                </select>
                       
                   
                    </div>
    </div>                
 
            
<div class="form-group row">
                   
                    <div class="col-sm-3">
                    <label for="inputState">የስራ አይነት</label>
                   
                
                <select name="work"  class="form-control" >
                <option >  </option>
                <option value="Privateowner" <?php  if($row["work"]=='Privateowner'){echo "selected";}?> > የግል ባለቤት </option>
                <option value="Privateemployee" <?php  if($row["work"]=='Privateemployee'){echo "selected";}?> > የግል ተቀጣሪ</option>
                <option value="govermental"<?php  if($row["work"]=='govermental'){echo "selected";}?> >  የመንግስት  </option>
                <option value="ngo"    <?php  if($row["work"]=='ngo'){echo "selected";}?> > ኤንጂኦ </option>
                <option value="student" <?php  if($row["work"]=='student'){echo "selected";}?> > ተማሪ   </option>
                <option value="perday" <?php  if($row["work"]=='perday'){echo "selected";}?> > የቀን   </option>
                <option value="nojobs" <?php  if($row["work"]=='nojobs'){echo "selected";}?> > ስራ የለኝም  </option>
                <option value="other" <?php  if($row["work"]=='other'){echo "selected";}?> > ሌሎች </option>
                </select>
                       
                   
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">የቤት ሁኔታ</label>
                   

                <select name="house"  class="form-control" value="" >
                <option value="">  </option>
                <option value="owner" <?php  if($row["house"]=='owner'){echo "selected";}?> > ባለቤት  </option>
                <option value="rental"  <?php  if($row["house"]=='rental'){echo "selected";}?>> ተከራይ   </option>
                <option value="with"  <?php  if($row["house"]=='with'){echo "selected";}?>> ከቤተሰብ፣ከጉዋደኛ፣ከሰው ተጠግቶ... </option>
                </select>
                       
                   
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">የስልክ ቁጥር</label>
                    

              
                    <input type="number" name="pnumber" value="<?php echo $row['phonenumber']?>"  class="form-control" id="inputWebsite" placeholder="phone number">
                
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-sm-4">
                    <label for="inputState">የትምርት አይነት</label>
                    

                <select name="schooltype"  class="form-control"  >
                <option value="">   </option>
                <option value="agriculture" <?php  if($row["schooltype"]=='agriculture'){echo "selected";}?>> ግብርና </option>
                <option value="engineering"<?php  if($row["schooltype"]=='engineering'){echo "selected";}?>>  ኢንጅነሪንግ     </option>
                <option value="medicine"<?php  if($row["schooltype"]=='medicine'){echo "selected";}?>> ጤና ዘርፍ </option>
                <option value="accounting"<?php  if($row["schooltype"]=='accounting'){echo "selected";}?>>አካውንቲግ   </option>
                <option value="bussines"<?php  if($row["schooltype"]=='bussines'){echo "selected";}?>>  ቢዝነስ </option>
                <option value="communication"<?php  if($row["schooltype"]=='communication'){echo "selected";}?>> ኮሚኒኬሽን   </option>
                <option value="computer_science"<?php  if($row["schooltype"]=='computer_science'){echo "selected";}?>> ኮፒተር  ሳይንስ  </option>
                <option value="teaching"<?php  if($row["schooltype"]=='teaching'){echo "selected";}?>>  አስተማሪ  </option>
                <option value="law"<?php  if($row["schooltype"]=='law'){echo "selected";}?>>  ህግ   </option>
                <option value="sport"<?php  if($row["schooltype"]=='sport'){echo "selected";}?>> ስፖርት   </option>
                <option value="social_science"<?php  if($row["schooltype"]=='social_science'){echo "selected";}?>> ሶሻልሳይንስ   </option>
                <option value="natural_science"<?php  if($row["schooltype"]=='natural_science'){echo "selected";}?>> ናቹራል ሳይንስ  </option>
                <option value="other"<?php  if($row["schooltype"]=='other'){echo "selected";}?>>  ከተዘርዝሩት ውጪ  </option>
                </select>
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">የትዳር ሁኔታ</label>
                   

                <select name="wstate"  class="form-control" >
                <option value="">  </option>
                <option value="single"<?php  if($row["wstatus"]=='single'){echo "selected";}?>> ያላገባ  </option>
                <option value="married"<?php  if($row["wstatus"]=='married'){echo "selected";}?>> ባለትዳር  </option>
                <option value="widow(er)"<?php  if($row["wstatus"]=='widow(er)'){echo "selected";}?>> ባል ወይም ሚስት የሞተበት </option>
                <option value="divorced"<?php  if($row["wstatus"]=='divorced'){echo "selected";}?>> የፈታ  </option>

                </select>
                       
                   
                    </div>
                    <div class="col-sm-3">
                    <label for="inputState">የሰርግ ቀን</label>
                    

              
                    <input type="date"  name="wdate" value="<?php echo $row['wdate']?>" class="form-control" id="inputWebsite" placeholder="phone number">
                
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-sm-3">
                    <label for="inputState">የትምርት ደረጃ</label>
                    

                <select name="levelofschool"  class="form-control"  >
                <option value="">   </option>
                <option value="housewife" <?php  if($row["levelofschool"]=='divorced'){echo "selected";}?>> የ ቤት እመቤት </option>
                <option value="fiveth"<?php  if($row["wstatus"]=='divorced'){echo "selected";}?>>  ከ 5ተኛ በታች   </option>
                <option value="tenth"<?php  if($row["wstatus"]=='divorced'){echo "selected";}?>> ከ 10ኛ በታች   </option>
                <option value="twelve"<?php  if($row["wstatus"]=='divorced'){echo "selected";}?>> ከ 12ኛ በታች </option>
                <option value="tenplusone"<?php  if($row["wstatus"]=='divorced'){echo "selected";}?>>  10 +1 </option>
                <option value="tenplusetwo"<?php  if($row["wstatus"]=='divorced'){echo "selected";}?>> 10 +2 </option>
                <option value="tenplusethree"<?php  if($row["wstatus"]=='divorced'){echo "selected";}?>> 10 +3 </option>
                <option value="certificate"<?php  if($row["wstatus"]=='divorced'){echo "selected";}?>>  ሰርተፍኬት   </option>
                
                <option value="diploma"<?php  if($row["wstatus"]=='divorced'){echo "selected";}?>> ዲፕሎማ  </option>
                <option value="degree"<?php  if($row["wstatus"]=='divorced'){echo "selected";}?>> ዲግሪ  </option>
                <option value="masters"<?php  if($row["wstatus"]=='divorced'){echo "selected";}?>>  ማስተርስ </option>
                <option value="doctrate"<?php  if($row["wstatus"]=='divorced'){echo "selected";}?>>ዶክትሬት</option>
             
                </select>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">እድሜ</label>
                        <input type="text" name="age"value="<?php echo $row['age']?>"  class="form-control" id="inputState" placeholder="#">
                    </div>
                    
                    <div class="col-sm-3">
                        <label for="inputState">የ አካባቢው መጠሪያ</label>
                        <input type="text" name="addressofstreet" value="<?php echo $row['addressofstreet']?>"  class="form-control" id="inputState" placeholder="#">
                    </div>
                    </div>
                    
                    <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="inputState">ኢኮኖሚክ ሰፖርት ይፈልጋሉ</label>
                        <input type="text" name="economic" value="<?php echo $row['economic']?>"  class="form-control" id="inputState" placeholder="#">
                    </div>

                    <div class="col-sm-3">
                        <label for="inputState">የ አደጋ ጊዜ ተጠሪ ስም</label>
                        <input type="text" name="emergency" value="<?php echo $row['emergency']?>"  class="form-control" id="inputState" placeholder="#">
                    </div>
                    
                    <div class="col-sm-4">
                        <label for="inputState">የ አደጋ ጊዜ ተጠሪ  ስልክ ቁጥር</label>
                        <input type="text" name="emergencyphonenumber" value="<?php echo $row['emergencyphonenumber']?>"  class="form-control" id="inputState" placeholder="#">
                    </div>
                    </div>
                   

               

           
               <a href="recordlist.php" class="btn btn-danger">CANCEL </a>
               <button type="submit" name="updaterecords" class="btn btn-primary">UPDATE</button>
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