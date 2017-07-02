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
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datepicker/datepicker3.css">


    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?=base_url()?>assets/mc/images/ico/favicon.ico">
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
                        <li class="active"><a href="<?=base_url()?>dashboard">Home</a></li>
                                
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

    <section class="content">
        <?php
           $p = @$page;
           //$level=<$user['level_user'];
            if(empty($p)){
              $this->load->view("page/home_guru");
            } else {
              $this->load->view("page/$p");
          }
        ?>
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
    <script type="text/javascript" src="<?=base_url()?>assets/mc/js/main.js"></script>  
    <script src="<?=base_url()?>assets/dist/js/Chart.min.js"></script>
     
    <script type="text/javascript">
var table, table_kategori, tbale_berita;
var save_method;
var GSCCModal;
  
        //--------------
        //- BAR CHART -
        //--------------
        var barChartCanvas = $("#barChart2").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas);
        var areaChartData = {
          labels: <?php echo $label; ?>,
          datasets: [
            {
              label: "Nilai",
              fillColor: "rgba(100, 214, 52, 1)",
              strokeColor: "rgba(210, 214, 222, 1)",
              pointColor: "rgba(210, 214, 222, 1)",
              pointStrokeColor: "#c1c7d1",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(220,220,220,1)",
              data: <?php echo $hasil; ?>
            }
            //,
            
            // {
            //   label: "Digital Goods",
            //   fillColor: "rgba(60,141,188,0.9)",
            //   strokeColor: "rgba(60,141,188,0.8)",
            //   pointColor: "#3b8bba",
            //   pointStrokeColor: "rgba(60,141,188,1)",
            //   pointHighlightFill: "#fff",
            //   pointHighlightStroke: "rgba(60,141,188,1)",
            //   data: [28, 48, 40, 19, 86, 27, 90]
            // }
          ]
        };
        var barChartData = areaChartData;
        barChartData.datasets[0].fillColor = "#00a65a";
        barChartData.datasets[0].strokeColor = "#00a65a";
        barChartData.datasets[0].pointColor = "#00a65a";
        var barChartOptions = {
          //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
          scaleBeginAtZero: true,
          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines: true,
          //String - Colour of the grid lines
          scaleGridLineColor: "rgba(0,0,0,.05)",
          //Number - Width of the grid lines
          scaleGridLineWidth: 1,
          //Boolean - Whether to show horizontal lines (except X axis)
          scaleShowHorizontalLines: true,
          //Boolean - Whether to show vertical lines (except Y axis)
          scaleShowVerticalLines: true,
          //Boolean - If there is a stroke on each bar
          barShowStroke: true,
          //Number - Pixel width of the bar stroke
          barStrokeWidth: 2,
          //Number - Spacing between each of the X value sets
          barValueSpacing: 5,
          //Number - Spacing between data sets within X values
          barDatasetSpacing: 1,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
          //Boolean - whether to make the chart responsive
          responsive: true,
          maintainAspectRatio: true
        };

        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions);
        var chart = new Chart(ctx).Line(data);
        document.getElementById("demoLegend").innerHTML = chart.generateLegend();

</script>
</body>
</html>
