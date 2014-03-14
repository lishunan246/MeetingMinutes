$(".login_form").validate({

		//onfocusout:true,
		
		errorClass:"text-danger",

		rules: {
			user: "required",
			password:"required"
		},
		
		highlight: function(element, errorClass) {
    		$(element).parent().addClass("has-error");
  
  		},
  		unhighlight: function(element, errorClass) {
    		$(element).parent().removeClass("has-error");
  		}
	}
);