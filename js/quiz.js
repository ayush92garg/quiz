$( "#fb-submit" ).click(function() {
  	var email = $('#email').val();
	var content = $('#textarea1').val();
	if (email!=="" && content!=="" ) {
		$.ajax({
		  	url: "../modules/sendfeedback.php",
		  	data: {
		  		email:email,
		  		content:content
		  	}, 
		  	success: function(result){
		        alert("Thank you for your feedback");
		    }
		});
	}else{
		alert("all fields are compulsary");
	}
});


$("#email").focusout(function(){
	var e = jQuery.Event("keydown");
    e.which = 13; // Enter
    $("input").trigger(e);
});