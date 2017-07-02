<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Elearn</title>
    <link href="<?=base_url()?>assets/mc/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/mc/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/mc/css/animate.min.css" rel="stylesheet"> 
    <link href="<?=base_url()?>assets/mc/css/lightbox.css" rel="stylesheet"> 
	<link href="<?=base_url()?>assets/mc/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/mc/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/mc/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/mc/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/mc/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/mc/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header">      
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.html">
                    	<h1><img src="<?=base_url()?>assets/mc/images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.html">Home</a></li>
                                
                        <li class="dropdown"><a href="blog.html">Tentang Website <i class="fa fa-angle-down"></i></a>
                        </li>
                         <li ><a href="<?php echo base_url('dashboard/logout');?>">Logout</i></a>
                        </li>               
                    </ul>
                </div>
                
            </div>
        </div>
    </header>
    <!--/#header-->

    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>Selamat Datang di Elearn </h1>
                        <a href="<?=base_url()?>user/lihat_grafik_anak/<?php echo $user['id_user'];?>" class="btn btn-common">Lihat Perkembangan Anak </a>
                    </div>
                    <img src="<?=base_url()?>assets/mc/images/home/slider/hill.png" class="slider-hill" alt="slider image">
                    <img src="<?=base_url()?>assets/mc/images/home/slider/house.png" class="slider-house" alt="slider image">
                    <img src="<?=base_url()?>assets/mc/images/home/slider/sun.png" class="slider-sun" alt="slider image">
                    <img src="<?=base_url()?>assets/mc/images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                    <img src="<?=base_url()?>assets/mc/images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    
            <!-- </div>
        </div>
    </section> -->
    
    <!--/#clients-->

    <footer id="footer" style="margin-top:100px;">
        <div class="container">
            <div class="row">
                
                <div class="col-md-3 col-sm-6">
                </div>
               
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Your Company 2016. All Rights Reserved.</p>
                        <p>Crafted by <a target="_blank" href="http://designscrazed.org/">Allie</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="<?=base_url()?>assets/mc/js/jquery.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/mc/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/mc/js/lightbox.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/mc/js/wow.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/mc/js/main.js"></script>   
</body>
</html>
