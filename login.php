
<!DOCTYPE html>
<html>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
          rel="stylesheet">
    <link href="../../maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">


        <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/icheck.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/app.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/vertical-menu.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/palette-gradient.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/login-register.css"/>

      
       

        <!-- END VATEBRA CSS-->
        <!-- BEGIN Page Level CSS-->
        
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link href="assets/css/style.css" rel="stylesheet" />

        <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 1-column  bg-full-screen-image menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">


    
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0">
                                <div class="card-titleX text-center">
                                    <img src="assets/images/loginlogo.jpg" />
                                </div>
                               
                            </div>
                            <div class="card-content">
                                
                               
                                <div class="card-body">
                                    <form class="form-horizontal" novalidate action="pages/login-officer.php" method="post">
                                        <div class="alert-danger validation-summary-valid" data-valmsg-summary="true"><ul><li style="display:none"></li>
</ul></div>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control" id="user-name" placeholder="Officer ID" data-val="true" data-val-required="Enter username" name="oid" value="">
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                            <span class="text-danger field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control" id="user-password" placeholder="Enter Password" data-val="true" data-val-required="The Password field is required." name="password">
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>
                                            <span class="text-danger field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-12 text-center text-sm-left">
                                                <fieldset>
                                                    <input type="checkbox" id="remember-me" class="chk-remember" data-val="true" data-val-required="The Remember me? field is required." name="RememberMe" value="true">
                                                    <label for="remember-me"> Remember Me</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a class="card-link" href="ForgotPassword.html">Forgot Password?</a></div>
                                        </div>
                                        <input type="submit" class="btn btn-outline-info btn-block" name="submit" value="Login"/><i class="ft-unlock"></i> 
                                     
                                            <a href="index.php" class="btn btn-outline-danger btn-block"><i class="ft-home"></i> Home </a>
                                     </form>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>




    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!-- BEGIN VENDOR JS-->
    <script src="../vat-assets/js/vendors.min.js"></script>

    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../vat-assets/js/jqBootstrapValidation.js"></script>
    <script src="../vat-assets/js/icheck.min.js"></script>

    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="../vat-assets/js/app-menu.js"></script>
    <script src="../vat-assets/js/app.js"></script>

    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../vat-assets/js/form-login-register.min.js"></script>

    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <script src="../../cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <!-- END PAGE LEVEL JS-->

    <script>




  //     function showAlert(alertType, _title, _message, buttonText) {
  //               return  $.alert({
  //                      title: _title,
  //                  content: _message,
  //                  type: alertType === "success" ? 'green' : 'red',
                   
  //                    });
		//}

		function showAlert(alertType, _title, _message, buttonText) {
			return $.confirm({
				title: _title,
				content: _message,
				type: alertType === "success" ? 'green' : 'red',
				typeAnimated: true,
				buttons: {
					tryAgain: {
						text: buttonText,
						btnClass: alertType === "success" ? 'btn-green' : 'btn-red',
						action: function () {
						}
					},
					close: function () {
					}
				}
			});
		}



    </script>
</body>
</html>
