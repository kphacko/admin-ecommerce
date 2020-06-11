<?php
include_once('header.php');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<div id="content" class="main-content">
<div class="container ">
<div class="col-sm-12">
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
                <div class="row">
                    <div class=col-sm-6>
                        <p>Enter Diamond Sieve</p>
                        <input id="t-text" type="text" name="txt" placeholder="Sieve" class="form-control" required>
                    </div>
                    <div class=col-sm-5>
                        <p>Enter Diamond Sieve</p>
                        <input id="t-text" type="number" name="txt" placeholder="Count" class="form-control" required>
                        
                    </div>
                </div>
                <div class="container1 form-group">
                            <button class="add_form_field btn btn-primary">New Diamond Sieve &nbsp; 
                                <span style="font-size:16px; font-weight:bold;">+ </span>
                </button>
                </div>
            </div>
            
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
            $(wrapper).append('<div class="row"><div class="col-sm-6"><input id="t-text" type="text" name="mytext[]" placeholder="Sieve" class="form-control" required></div><div class="col-sm-5"><input id="t-text" type="number" name="mytext[]" placeholder="Count" class="form-control" required></div><div class="col-sm-1"><a href="javascript:void(0);" class="delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></div></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).closest('.row').remove();
        x--;
    })
});
</script>

<div class="form-group">
               <p>Enter Design Dimensions</p>
               <input id="t-text" type="text" name="txt" placeholder="Dimensions" class="form-control" required>
</div>
<div class="form-group">
    <p>Enter Design Details</p>
        
               <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1" style = "color:#515365">Featured</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1" style = "color:#515365">Highest Selling</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1" style = "color:#515365">Fancy Diamond</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1" style = "color:#515365">New</label>
                </div>
        
</div>
<div class="form-group">
               <p>White</p>
               <input id="t-text" type="text" name="txt" placeholder="Link" class="form-control" required>
</div>
<div class="form-group">
               <p>Yellow</p>
               <input id="t-text" type="text" name="txt" placeholder="Link" class="form-control" required>
</div>
<div class="form-group">
               <p>Rose</p>
               <input id="t-text" type="text" name="txt" placeholder="Link" class="form-control" required>
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