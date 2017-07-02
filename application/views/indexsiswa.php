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
    <script src="<?=base_url()?>assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
   <script src="<?=base_url()?>assets/plugins/jquery.min.js"></script>
     <script src="https://code.responsivevoice.org/responsivevoice.js"></script>

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
                <div class="col-sm-12 overflow">
                    </div> 
                </div>
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

                    <a class="navbar-brand" href="<?=base_url()?>dashboard">
                    	<h1><img src="<?=base_url()?>assets/mc/images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="<?=base_url()?>dashboard">Home</a></li>
                                
                        <li ><a href="blog.html">Tentang Website</a>
                        </li>
                        <li ><a href="<?php echo base_url('dashboard/logout');?>">Logout </a>
                        </li>
                                       
                    </ul>
                </div>
                
            </div>
        </div>
    </header>
    <!--/#header-->
    <section class="content">
        <?php
           $p = @$page;
           //$level=<$user['level_user'];
            if(empty($p)){
              $this->load->view("page/home");
            } else {
              $this->load->view("page/$p");
          }
        ?>
    </section>
    
    
    <!--/#clients-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                
                <div class="col-md-3 col-sm-6">
                </div>
               
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Paramita 2017. All Rights Reserved.</p>
                        <!--<p>Crafted by <a target="_blank" href="http://designscrazed.org/">Allie</a></p>-->
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
