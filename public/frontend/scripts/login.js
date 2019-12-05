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
				// form.submit();
                
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
                          swal('Incorrect Credintials',data.message,'error');
                       }else{
                          window.location = base_url;
                       }
                   },
                   error: function(data) {
                    swal('Error',data,'error');
                  }
                });
                //e.preventDefault();
                return false;
			}
        });
		
    },
};

jQuery(document).ready(function() {
    FormControls.registerInit();
    FormControls.loginInit();
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