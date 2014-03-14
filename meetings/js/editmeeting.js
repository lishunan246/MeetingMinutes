$('#mtitle').focus();//在载入时把焦点放在标题上   
$('#mdate').mask("9999-99-99");
$('#start').mask("99:99");
$('#end').mask("99:99");

	// validate signup form on keyup and submit
	$("#meeting_edot").validate({

		onfocusout:true,
		
		errorClass:"text-danger",

		rules: {
			mtitle: "required",
			mdate: {
				required: true
				
			},
			address: {
				required: true
				
			},
			start: {
				required: true,
			},
			end:"required",
			content:"required"
		},
		
		highlight: function(element, errorClass) {
    		$(element).parent().addClass("has-error");
  
  		},
  		unhighlight: function(element, errorClass) {
    		$(element).parent().removeClass("has-error");
  		}
	}
);
