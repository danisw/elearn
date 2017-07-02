<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Quiz | Elearn</title>
    <link href="<?=base_url()?>assets/mc/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/mc/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/mc/css/lightbox.css" rel="stylesheet"> 
    <link href="<?=base_url()?>assets/mc/css/animate.min.css" rel="stylesheet"> 
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
        <div class="container">
            <div class="row">
             </div>
        </div>
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
                        <li><a href="index.html">Home</a></li>
                        <li ><a href="<?php echo base_url('dashboard/logout');?>">Logout</i></a>
                        </li>                  
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

<section id="services">
        <div class="container">
            <div class="row" style="margin-top: 70px; margin-bottom: 30px; font-family: Comic Sans ms; font-size: 25px;">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <a href="<?=base_url()?>user/show_quiz_6/"><img src="<?=base_url()?>assets/mc/images/home/icon1.png" alt=""></a>
                        </div>
                        <h2 style="font-size: 50px; font-family: Arial;">Tema 6</h2>
                        <p>Lingkunganku</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <a href="<?=base_url()?>user/list_quiz/"> <img src="<?=base_url()?>assets/mc/images/home/icon2.png" alt=""></a>
                        </div>
                        <h2 style="font-size: 50px; font-family: Arial;">Tema 7</h2>
                        <p>Benda Hidup </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/home/icon3.png" alt="">
                        </div>
                        <h2 style="font-size: 50px; font-family: Arial;">Tema 8</h2>
                        <p>Bencana</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>
    
    
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
    <script type="text/javascript" src="<?=base_url()?>assets/mc/js/jquery.countTo.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/mc/js/main.js"></script>   
   
</body>
</html>
