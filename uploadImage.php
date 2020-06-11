<?php
include_once('header.php');

?>

<div id="content" class="main-content">
<?php 
if ($_GET['img']!=NULL) {
  $img = unserialize(urldecode($_GET['img']));
      
// print_r($img);
echo '
<div class="container">
  <h2>Image Gallery</h2>
 
  <div class="row">
  ';
  
  foreach ($img as $key => $value) {
   

  echo '
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/lights.jpg" target="_blank">
        <picture>
    <source type="image/webp" srcset="'.$img[$key][0].'">
    
    <img src="'.$img[$key][0].'" alt="Lights" style="width:100%">
</picture>

          
         
        </a>
      </div>
    </div>
   ';

  }
  echo '</div>
</div>
';
}
?>
<div class="container mt-5">
<form action="inc/uploadImg.php" method="POST" enctype="multipart/form-data">

           

 <div class="custom-file-container form-group" data-upload-id="mySecondImage">
    <label>Upload (Allow Multiple) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
    <label class="custom-file-container__custom-file" >
        <input type="file" name="image[]"class="custom-file-container__custom-file__custom-file-input" multiple>
        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
        <span class="custom-file-container__custom-file__custom-file-control"></span>
    </label>
    <div class="custom-file-container__image-preview">

    </div>

</div>

<button class="btn btn-primary mb-2" value="submit" type="submit">Submit</button>
</form>
</div>
</div>













<?php
include_once('footer.php');
?>


<script>
       
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>