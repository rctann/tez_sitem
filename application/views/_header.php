<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?=$title?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?=base_url()?>assets/main/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/main/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/main/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/main/css/main.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/main/css/sl-slide.css">

    <script src="<?=base_url()?>assets/main/s/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap-table.js"></script>
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/main/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/main/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/main/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/main/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/main/images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>

    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a href="<?=base_url()?>"><img  class="pull-left" src="<?=base_url()?>assets/main/images/log.png" width="75" height="75"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li class="active"><a href="<?=base_url()?>">ANASAYFA</a></li>
                                <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategoriler <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                          
                                
                                <li><a href="<?=base_url()?>Home/kategori_list/2">DERS KITABI</a></li>
                                <li><a href="<?=base_url()?>Home/kategori_list/3">ANSIKLOPEDI</a></li>
                                <li><a href="<?=base_url()?>Home/kategori_list/1">ROMAN</a></li>
                           
                                
                            </ul>
                        </li>
						
						<?php				
							if (!$this->session->logged_in)
						{ ?>
							<li><a href="<?=base_url()?>Home/kayit">KAYIT OL</a></li>
						<?php }
						?> 
						
                        <li><a href="<?=base_url()?>Home/Hakkimizda">HAKKINDA</a></li>
                        <li><a href="<?=base_url()?>Home/iletisim">İLETİŞİM FORMU</a></li>
						
                    
						<?php
							if($this->session->logged_in)
						{?>
							
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profilim <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
							<li><a ><?=$this->session->logged_in['username'];?> <?=$this->session->logged_in['usersurname'];?> </a></li>
								<li><a href="<?=base_url()?>Home/rezlist">Rezervasyonlarım</a></li>
                                <li><a href="<?=base_url()?>Home/odunclist">Aldığım kitaplar</a></li>
                            </ul>
                        </li>
                            
							<li><a href="<?=base_url()?>Home/logout"  >Çıkış Yap</a></li>
						<?php	}
						?> 
                        <li><a href="#"></a></li> 
                        <li><a href="#"></a></li>
                        <li class="login">
                            <a data-toggle="modal" href="#loginForm"><i class="icon-lock"></i></a>
                        </li>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->