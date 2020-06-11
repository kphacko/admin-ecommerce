<?php
include_once('header.php');
?>


<div id="content" class="main-content">
<div class="container ">
<div class="col-sm-10">
<form method="post">
           <div class="form-group">
               <p>Enter Diamond Weight</p>
                <input id="t-text" type="number" name="txt" placeholder="Diamond Weight" class="form-control" required>
            </div>
            <div class="form-group">
               <p>Enter Gold Weight</p>
                <input id="t-text" type="number" name="txt" placeholder="Gold Weight" class="form-control" required>
                
            </div>
            <div class="form-group">
               <p>Enter Diamond Count</p>
               <input id="t-text" type="number" name="txt" placeholder="Count" class="form-control" required>
            </div>
            <div class="form-group">
               <p>Enter Manufacturer</p>
               <input id="t-text" type="text" name="txt" placeholder="Manufacturer" class="form-control" required>
            </div>
            <div class="form-group">
               <p>Enter Diamond Sieve</p>
               <input id="t-text" type="text" name="txt" placeholder="Diamond Sieve" class="form-control" required>
            </div>
            
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    var max_fields = 10;
    var wrapper = $(".container1");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div><input id="t-text" type="text" name="mytext[]" placeholder="Diamond Sieve" class="form-control" required><a href="#" class="delete btn btn-danger">Delete</a></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).closest('div').remove();
        x--;
    })
});
</script>
<div class="container1 form-group">
    <button class="add_form_field btn btn-primary">New Diamond Sieve &nbsp; 
      <span style="font-size:16px; font-weight:bold;">+ </span>
    </button>
    
</div>
<div class="form-group">
               <p>Enter Design Dimensions</p>
               <input id="t-text" type="number" name="txt" placeholder="Dimensions" class="form-control" required>
</div>

<input  value="submit" type="submit" name="txt" class="mt-4 btn btn-primary">
</form>
</div>
</div>
</div>













<?php
include_once('footer.php');
?>


<script>
       
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>