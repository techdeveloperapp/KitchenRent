var FormControls = {
    registerInit: function() {
        $("#register-form").validate({
            rules: {
                first_name: {
                    required: !0
                },
				last_name: {
                    required: !0
                },
                email: {
                    required: !0,
                    email: !0,
                },
				password:{
					required: !0,
					minlength: 8,
				},
				password_confirmation:{
					required: !0,
					equalTo: "#password"
				},
				
            },
            invalidHandler: function(e, r) {
              
            },
            submitHandler: function(form) {
				form.submit();
			}
        });
		
    },
	loginInit: function() {
        $("#login-form").validate({
            rules: {
                email: {
                    required: !0,
                    email: !0,
                },
				login_password:{
					required: !0,
					minlength: 8,
				},
				
            },
            invalidHandler: function(e, r) {
              
            },
            submitHandler: function(form) {
				form.submit();
			}
        });
		
    },
};

jQuery(document).ready(function() {
    FormControls.registerInit();
    FormControls.loginInit();
});