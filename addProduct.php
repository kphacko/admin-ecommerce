<?php
include_once('header.php');
?>


<div id="content" class="main-content">
<div class="container mt-5">
<form method="post">
           <div class="form-group">
               <p>Enter product titile</p>
                <input id="t-text" type="text" name="txt" placeholder="titile" class="form-control" required>
            </div>
            <div class="form-group">
               <p>Enter product discription</p>
                <input id="t-text" type="text" name="txt" placeholder="Discription" class="form-control" required>
                
            </div>
            <div class="form-group">
               <p>Enter product parameters</p>
                <input id="t-text" type="text" name="txt" placeholder="parameters" class="form-control" required>
            </div>

        

<input  value="submit" type="submit" name="txt" class="mt-4 btn btn-primary">
</form>
</div>
</div>













<?php
include_once('footer.php');
?>


<script>
       
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>