       // validate signup form on keyup and submit
        $("#register_form").validate({
            rules: {
                firstName: {
                    required: true,
                    minlength: 2
                },
                lastName: {
                    required: true,
                    minlength: 2
                },
                phone: {
                    required: true,
                    minlength: 10,
                    number:true
                },
                address: {
                    required: true,
                     minlength: 3
                },
                password: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true
                },
                agree: "required"
            },
            messages: {                
                fullname: {
                    required: "Please enter a Full Name.",
                    minlength: "Your Full Name must consist of at least 6 characters long."
                },
                phone: {
                    required: "Please enter your phone number.",
                    number: "Phone number Cannot contain characters"
                },
                address: {
                    required: "Please enter a Address.",
                    minlength: "Your Address must consist of at least 10 characters long."
                },
                username: {
                    required: "Please enter a Username.",
                    minlength: "Your username must consist of at least 5 characters long."
                },
                password: {
                    required: "Please provide a password.",
                    minlength: "Your password must be at least 5 characters long."
                },
                confirm_password: {
                    required: "Please provide a password.",
                    minlength: "Your password must be at least 5 characters long.",
                    equalTo: "Please enter the same password as above."
                },
                email: "Please enter a valid email address.",
                agree: "Please accept our terms & condition."
            },
            submitHandler: function() {
                $.post($('#'+this.currentForm.id).prop('action'),
                               {
                                   'email':$('#email').val(),
                                   'password':$('#password').val(),
                                   'first_name':$('#firstName').val(),
                                   'last_name':$('#lastName').val(),
                                   'address':$('#address').val(),
                                   'phone':$('#phone').val(),
                                   '_token':$('#'+this.currentForm.id).find('input[name=_token]').val()
                               },
                               function (data) {
                                  // console.log(data);
                                   if(data.status=='success'){
                                       $('#success-msg').html('<div class="alert alert-success">'+data.message+'</div>');
                                   }
                                   else if(data.status=='fail'){
                                       $('#create-msg').html('<div class="alert alert-danger">'+data.message+'</div>');
                                   }
                               });
                  }
        });
        $("#login_form").validate({
            rules:{
                login_username:{
                    required:true
                },
                login_password:{
                  required:true
                }
            },
            submitHandler: function(e) {
                var token=$('#'+this.currentForm.id).find('input[name=_token]').val();
                var username=$('#login_username').val();
                var password=$('#login_password').val();
                $('#login-loader').html('<img src="assets/images/ajax-loader.gif">  Authenticating.......');
                $.post($('#'+this.currentForm.id).prop('action'),
                    {'email':username,'password':password,'_token':token},
                    function (data) {
                       // console.log(data);
                        if(data.status=='success'){
                            $(location).attr('href','/prime/shop')
                        }
                        else if(data.status=='fail'){
                            $('#ajax-load').hide();
                            $('#login-loader').html('<p class="text-danger">'+data.message+'</p>');
                        }
                    });
            }
        });