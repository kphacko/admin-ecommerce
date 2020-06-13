<?php
include_once('header.php');

?>

<div id="content" class="main-content">
<?php 
if ($_GET['img']!=NULL) {
  $img = unserialize(urldecode($_GET['img']));
      
// print_r($img);
echo '

<h2>Image Gallery</h2>
<div class="container row input-group">
  <input class="form-control input-sm input-monospace" value="Click On Any Image For Link" type="text" id="imgsrc">
  <button class="btn btn-sm" onclick="fuc()"><svg class="octicon octicon-clippy" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path></svg></button>
</div>

<div class="container mt-4">
  <div class="row ">
  ';
  
  foreach ($img as $key => $value) {
   

  echo '
    <div class="col-md-4">
      <div class="thumbnail m-2">
        <picture>
    <source type="image/webp" srcset="'.$img[$key][0].'">
    <img src="'.$img[$key][0].'" alt="Lights" style="width:100%" onclick="selectAvatar(this)">
</picture>
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

<html>
<body>
  <script>
  var imgScr;
  function selectAvatar(el) {
    imgSrc = el.src;
    var inputF = document.getElementById("imgsrc");
    inputF.value = imgSrc;
    }
  function fuc() { 
    var copyText = document.getElementById("imgsrc");
    copyText.select(); 
    document.execCommand("copy"); 
    } 
  </script>
</body>
</html>




<?php
include_once('footer.php');
?>


<script>
       
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>