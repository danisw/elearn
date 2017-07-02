
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Jawa Pos | News</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/skin-yellow-light.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/dist/css/tipped/tipped.css"/>
 <script src="<?=base_url()?>assets/dist/html-docx.js"></script>
  <script src="<?=base_url()?>assets/dist/FileSaver.js"></script>
  <!--Phaser-->
  <script src="<?=base_url()?>assets/js/phaser.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js" type="text/javascript" charset="utf-8"></script>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
 <!-- Text To Speech -->
<script src="https://code.responsivevoice.org/responsivevoice.js"></script>
  
 

<script type="text/javascript" charset="utf-8">
 


var x = 1;

function cek(){

    $.ajax({
        url: "<?php echo base_url('notifikasi/cek'); ?>",
        cache: false,
        success: function(msg){
            $('#notifikasi_count').html(msg);
            $('#notifikasi_count_2').html(msg);
            //$('#loading').toggle();

        }
    });
    var waktu = setTimeout("cek()",3000);
}




jQuery(document).ready(function($){

    cek();
    $("#pesan").click(function(){
       
        $("#info").toggle();
        //ajax untuk menampilkan pesan yang belum terbaca
        $.ajax({
            url: "<?php echo base_url('notifikasi/lihat_notifikasi'); ?>",
            cache: false,
            success: function(msg){
               // $("#loading").hide();
                $("#konten-info").html(msg);
                //$(".row").css("background-color","#4B59a9");
            }
        });

    });
    $("#notif").click(function(){
    $.ajax({
        url: "<?php echo base_url('notifikasi/notif'); ?>",
        cache: false,
        success: function(status){
          var x=1;
           if($x=0){
            $('#loading').show();
             $x=1;
          }else{
            $('#loading').hide();
          }

        }
     });
  });
   
});
</script>
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>User</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- /.messages-menu -->

          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $user['Nama'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                 <?php echo $user['nama'];?>
                  <small><?php echo $user['level_user'];?> </small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                
                <div class="pull-right">
                  <a href="<?php echo base_url('dashboard/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
              
            </ul>
            
          </li>
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
           <p><?php echo $user['nama'];?></p>
          <!-- Status -->
          <a href="#"> <?php echo $user['level_user'];?> </a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="<?=base_url()?>dashboard"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <!-- <li><a href="#"><i class="fa fa-link"></i> <span>Ganti Password</span></a></li> -->
        <li class="treeview">
          <a href="#"><i class="fa fa-reorder"></i> <span>Task</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>user/add_berita">Buat Berita</a></li>
            <li><a href="<?=base_url()?>user/list_berita">Daftar Berita</a></li>
            <li><a href="<?=base_url()?>user/kirim_berita">Kirim Berita</a></li>
            
          </ul>
        </li>
      </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <!--  Page Header
        <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <?php
           $p = @$page;
            if(empty($p)){
              $this->load->view("home");
            } else {
              $this->load->view("page/$p");
          }
        ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="<?=base_url()?>assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
   document.getElementById('download').addEventListener('click', function(e) {
      e.preventDefault();
      //convertImagesToBase64()
      // for demo purposes only we are using below workaround with getDoc() and manual
      // HTML string preparation instead of simple calling the .getContent(). Becasue
      // .getContent() returns HTML string of the original document and not a modified
      // one whereas getDoc() returns realtime document - exactly what we need.
     // var contentDocument = CKEDITOR.instance.editor1.getData();
      //var contentDocument = CKEDITOR.instances.editor1;
      //var content = '<!DOCTYPE html>' + contentDocument.documentElement.outerHTML;      
      
      var content = $("#download_file").text();
      var judul = $("#judul_view").text();
      //var judul = document.getElementById('judul_berita').style.textAlign = 'center';
      //var judul = $("#judul").text().style(align=center);
      //var y = document.getElementById('judul').style.align="center";
      
      //var x = document.title;
      //var judul1 = htmlDocx.asBlob('judul: '+judul, {orientation: orientation});
      var orientation = document.querySelector('portrait');
      
      //var orientation = document.querySelector('.page-orientation input:checked').value;
      //var orientation = document.getElementById('sendEmail').value;
      var cetak_judul = document.getElementById('judul_berita').value;
      var converted = htmlDocx.asBlob('<center><h3>'+judul+'</h3></center>' + '<style textAlign="center">'+content +'</style>' , {orientation: orientation});
      saveAs(converted, cetak_judul+'.rtf');

      var link = document.createElement('a');
      link.href = URL.createObjectURL(converted);
      link.download = 'document.rtf';
      link.appendChild(
        document.createTextNode('Click here if your download has not started automatically'));
      var downloadArea = document.getElementById('dowload-area');
      downloadArea.innerHTML = '';
      downloadArea.appendChild(link);
    });
</script>
<script>
function play(){
      responsiveVoice.speak( "Kali ini kita akan belajar mengenal hewan. Hewan diatas adalah katak. Katak hidup di dua alam. Katak disebut hewan amphibi. katak pemakan serangga. katak berkembang biak dengan bertelur. telur katak akan berubah menjadi berudu. Berudu akan berubah menjadi katak muda berekor. Katak muda berekor akan berubah menjadi katak dewasa. katak bernafas menggunakan paru-paru dan kulit. oleh karena itu, kulit katak selalu basah ","Indonesian Female",
      {

          pitch:1,
          rate:1,
          volume: 3
        }

        );
    }
    function stop(){
      responsiveVoice.cancel();
    }
    function pause(){
      responsiveVoice.pause();
    }
    function resume(){
      responsiveVoice.resume();
    }

 // $(function () {
    
</script>
<script type="text/javascript">
 // var game = new Phaser.Game(100, 600, Phaser.AUTO, '', { preload: preload, create: create, update: update }); //pendefinisian variabel game

 //   function preload() { //fungsi preload
 //     game.load.image('star', 'http://localhost/Newshandler/assets/katak.png'); // kode load imag
 //   }

 //   function create() {  //fungsi create
 //     bintang = this.add.sprite(0, 0, 'star'); //Kode pendefinsisian variabel bintang yang digunakan sebagai sprite
 //       this.add.tween(bintang).to({x: 200}, 500, Phaser.Easing.Exponential.Out, true); //Kode animasi
 //   }

 //   function update() {  //fungsi update
 //   }
</script>
<script type="text/javascript">
        $(function(){
          $("radio.rad").click(function(){
            $("#form1, #form2").hide()
            if($(this).val() == "1"){
              $("#form1").show();
            }else{
              $("#form2").show();
            }
          });
        });
      </script>
<script type="text/javascript" src="<?=base_url()?>assets/dist/js/tipped.js"></script>
</body>
</html>
