<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>BCORE Admin Dashboard Template | Login Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/login.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/magic/magic.css" />
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >

   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
        <img src="<?=base_url()?>assets/main/images/log.png" height="120"/>
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="<?=base_url()?>admin/login/login_ol" method="POST" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Lütfen email ve şifrenizi giriniz
                </p>
                <input type="email" name="useremail" placeholder="Email" class="form-control" />
                <input type="password" name="userpassword" placeholder="Password" class="form-control" />
				<?=$this->session->flashdata("login_hata")?>
                <button class="btn text-muted text-center btn-danger" method="POST" type="submit">Giriş yap</button>
				
					
            </form>
        </div>
        
    </div>
   


</div>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="<?=base_url()?>assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.js"></script>
   <script src="<?=base_url()?>assets/js/login.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>