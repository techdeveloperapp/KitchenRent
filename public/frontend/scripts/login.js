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
				var btn_name = $.trim($("#register_button").text());
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
					   $("#register_button").text(btn_name);
                   },
                   error: function(data) {
                    swal('Error',data,'error');
                    $("#register_button").removeAttr('disabled');
					$("#register_button").text(btn_name);
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
				var btn_name = $.trim($("#login_button").text());
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
						  $("#login_button").text(btn_name);
                       }else{
                          window.location = base_url;
                       }
                   },
                   error: function(data) {
                    swal('Error',data,'error');
					$("#login_button").removeAttr('disabled');
				    $("#login_button").text(btn_name);
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
				var btn_name = $.trim($("#forgot_button").text());
				$("#forgot_button").text('Please wait...');
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
						$("#forgot_button").text(btn_name);
						$("#forgot_button").removeAttr('disabled');
                       if(data.status=="error"){
                          swal('Error',data.message ,'error');
                       }else{
						   swal('Success',data.message ,'success');
                           document.getElementById("forgot_pass-form").reset();
						   jQuery('#sign-in-dialog').magnificPopup('close');
                       }
                   },
                   error: function(data) {
                    swal('Error',data,'error');
					$("#forgot_button").text(btn_name);
					$("#forgot_button").removeAttr('disabled');
                  }
                });
                //e.preventDefault();
                return false;
			}
        });
	},
  resetPasswordInit: function() {
        $("#forgot_password_form").validate({
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
                $("#reset_password_btn").attr('disabled','disabled');
				var btn_name = $.trim($("#reset_password_btn").text());
                $("#reset_password_btn").text('Please wait...');
                var url = base_url+"/user/reset_password";
                console.log(url);
                $.ajax({
                    method: 'POST',
                    url: url,
                    data: {email:$('#user_email').val(),password:$('#reset_password').val(),token:$('#forgot_token').val()},
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                       if(data.status=="error"){
                          swal('Error',data.message ,'error');
                          $("#reset_password_btn").removeAttr('disabled');
                          $("#reset_password_btn").text(btn_name);
                       }else{
                          swal('Success',data.message,'success');
                          setTimeout(function(){ 
                            window.location = base_url;
                          }, 2000);
                       }
                   },
                   error: function(data) {
                    swal('Error',data,'error');
                    $("#reset_password_btn").removeAttr('disabled');
                    $("#reset_password_btn").text(btn_name);
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
    FormControls.resetPasswordInit();
    var url = base_url+"/logout";
    $('.f_logout').click(function(){
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