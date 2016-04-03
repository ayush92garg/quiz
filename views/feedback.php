<?php 
	include "../header.php";
?>
<div class = "feedback">
	<div class="row">
	      <div class="row">
	        <div class="input-field col s12">
	          <textarea name="fb-body" id="textarea1" class="materialize-textarea"></textarea>
	          <label for="textarea1">Feedback</label>
	        </div>
	      </div>
  </div>
  <div class="row">
  	<form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label for="email" data-error="wrong" data-success="right">Your Email Address</label>
        </div>
      </div>
      </form>
  </div>
    <button id="fb-submit" class="btn waves-effect waves-light" type="submit" name="action">Send Feedback
  </button>
</div>

<?php
include "../includes/footer.php";
?>