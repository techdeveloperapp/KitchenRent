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
				$("#register_button").attr('disabled','disabled');
                $("#register_button").text('Please wait...');
                var url = base_url+"/user/register";
                var first_name = $('#first_name').val();
                var last_name = $('#last_name').val();
                var last_name = $('#last_name').val();
                var email = $('#email').val();
                var password = $('#password').val();
                $.ajax({
                    method: 'POST',
                    url: url,
                    data: {first_name,last_name,email,password},
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                       if(data.status=="error"){
                            swal('Error',data.message ,'error');
                            $("#register_button").removeAttr('disabled');
                       }else{
                            swal('Success',data.message ,'success');
							$("#register_button").removeAttr('disabled');
							document.getElementById("register-form").reset();
							jQuery('#sign-in-dialog').magnificPopup('close');
                       }
					   $("#register_button").text('Register');
                   },
                   error: function(data) {
                    swal('Error',data,'error');
                    $("#register_button").removeAttr('disabled');
                  }
                });
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
				password:{
					required: !0,
					minlength: 8,
				},
				
            },
            invalidHandler: function(e, r) {
              
            },
            submitHandler: function(form) {
				// form.submit();
                $("#login_button").attr('disabled','disabled');
                $("#login_button").text('Please wait...');
                var url = base_url+"/user/login";
                console.log(url);
                $.ajax({
                    method: 'POST',
                    url: url,
                    data: {username:$('#username').val(),password:$('#login_password').val()},
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                       if(data.status=="error"){
                          swal('Error',data.message ,'error');
						  $("#login_button").removeAttr('disabled');
						  $("#login_button").text('Sign In');
                       }else{
                          window.location = base_url;
                       }
                   },
                   error: function(data) {
                    swal('Error',data,'error');
					$("#login_button").removeAttr('disabled');
				    $("#login_button").text('Sign In');
                  }
                });
                //e.preventDefault();
                return false;
			}
        });
    },
	forgotPasswordInit:function(){
		$("#forgot_pass-form").validate({
            rules: {
                forgot_email: {
                    required: !0,
                    email: !0,
                },
            },
            invalidHandler: function(e, r) {
              
            },
            submitHandler: function(form) {
				// form.submit();
                $("#forgot_button").attr('disabled','disabled');
                var url = base_url+"/user/forgot_password";
                //console.log(url);
                $.ajax({
                    method: 'POST',
                    url: url,
                    data: {email:$('#forgot_email').val()},
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                       if(data.status=="error"){
                          swal('Error',data.message ,'error');
						  $("#forgot_button").removeAttr('disabled');
                       }else{
                          //window.location = base_url;
                       }
                   },
                   error: function(data) {
                    swal('Error',data,'error');
					$("#forgot_button").removeAttr('disabled');
                  }
                });
                //e.preventDefault();
                return false;
			}
        });
	}
};

jQuery(document).ready(function() {
    FormControls.registerInit();
    FormControls.loginInit();
    FormControls.forgotPasswordInit();
    var url = base_url+"/logout";
    $('#f_logout').click(function(){
        $.ajax({
            method: 'POST',
            url: url,
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
               window.location = base_url;
            },
           error: function(data) {
            //swal('Error',data,'error');
          }
        });
    });
});