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
    <script type="text/javascript">
    $(document).ready(function() {
        var i;
         var nomor=2;
         var numb=2;
         var j;

        for (i=2; i<11; i++){
            $('#'+i).hide();
            
          }
        
    $('#next').click(function(){
        
            $('#'+(nomor-1)).hide();
            $('#'+nomor).show();
            nomor++;
            
            return false;
        }
    );
    
    $('#prev').click(function(){
         
            $('#'+(nomor-1)).show();
             $('#'+(nomor)).hide();
            nomor--;
           
            return false;
        }
    );
  });
 function save()
  {
    var dataString1= $('#form6').serialize();
    $('#btnSave').text('save'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
   $('#next').attr('disabled',true);
    $('#prev').attr('disabled',true);
    // ajax adding data to database
     $.ajax({
        //url :"<?php echo site_url('user/count_nilai')?>/"+iduser,
         type: 'post',
        url :'<?=base_url()?>user/cek_jawaban',
        data: dataString1,
       // dataType: "string",
        success: function(msg)
        {
            var datas=msg.split('|')
            
               $('#btnSave').attr('disabled');
              //var msg=dataString1.split('|');
               //document.getElementById("display").innerHTML = msg;
              // $('#display').html('<div style="width:"><h5>Hasil Ujian '+datas+'</h5></div>');

              $('#isihasil').html(msg);
              $('#ModalHasil').modal('show');
            // $('#btnSave').text('save'); //change button text
            // $('#btnSave').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
     return false;
   }

   // function kembali(){

   // }

</script>
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

<div id="container">
    <div class="">
    <h1>Play the Quiz!</h1>
    </div>
    <div id="content" >
    <div class="box box-warning">
    <form id="form6" method="post" >
       

    <?php foreach($question as $row) {
        $count=0;

        if($count<9){

           echo "<div id=$row->idquiz >";
            //echo "<div id=content>";
     ?>
    <!--?php $ans_array = array($row->pilihan_a, $row->pilihan_b, $row->pilihan_c, $row->pilihan_d);
    shuffle($ans_array); ?-->
    <?php $ans_array = array($row->pilihan_a, $row->pilihan_b, $row->pilihan_c, $row->pilihan_d);
     ?>
    
    <div class="box-header with-border" style="font-family: Arial; font-size: 20px; padding: 20px;">
    <p><?=$row->idquiz?>. <?=$row->soal?></p>
        <div class="row">
                      <div class="col-md-5" >
                          <?php

                          if($row->type==1){
                              //echo "<img src='".base_url()."assets/katak.png'>";
                             echo "<img src='".base_url()."assets/gambar/".$row->gambar." '  >";
                         
                          }else{

                                echo "";
                          }
                          ?>
                      </div>
                    </div>
    </div>

    <div class="body" style="font-family: Arial; font-size: 20px; padding: 20px;">
    <?php
        if($row->type==2){
    ?>
    <table>
    <tr>
        <td><input type="radio" name="jawaban<?=$row->idquiz?>" value="a" required> A. <?php  echo "<img src='".base_url()."assets/gambar/".$ans_array[0]." '  >";?></td>
         
        <td> <input type="radio" name="jawaban<?=$row->idquiz?>" value="b"> B. <?php  echo "<img src='".base_url()."assets/gambar/".$ans_array[1]." '  >";?></td>
         </tr>
         <tr>
  
        <td><input type="radio" name="jawaban<?=$row->idquiz?>" value="c"> C. <?php  echo "<img src='".base_url()."assets/gambar/".$ans_array[2]." '  >";?></td>
         
   
        <td> <input type="radio" name="jawaban<?=$row->idquiz?>" value="d"> D. <?php  echo "<img src='".base_url()."assets/gambar/".$ans_array[3]." '  >";?></td>

         <td> <input type="text" name="kunci<?=$row->idquiz?>" value="<?=$row->jawaban?>" style="display: none;"></td>
         
    </tr>
    </table>

        <!--     <input type="radio" name="quizid<?=$row->idquiz?>" value="<?=$ans_array[0]?>" required><?php  echo "<img src='".base_url()."assets/gambar/".$ans_array[0]." '  >";?><br>
            <input type="radio" name="quizid<?=$row->idquiz?>" value="<?=$ans_array[1]?>"><?php  echo "<img src='".base_url()."assets/gambar/".$ans_array[1]." '  >";?><br>
            <input type="radio" name="quizid<?=$row->idquiz?>" value="<?=$ans_array[2]?>"><?php  echo "<img src='".base_url()."assets/gambar/".$ans_array[2]." '  >";?><br>
            <input type="radio" name="quizid<?=$row->idquiz?>" value="<?=$ans_array[3]?>"><?php  echo "<img src='".base_url()."assets/gambar/".$ans_array[3]." '  >";?><br> -->

       <?php 
       }else{
        ?>
            <input type="radio" name="jawaban<?=$row->idquiz?>" value="a" required> A. <?=$ans_array[0]?><br>
            <input type="radio" name="jawaban<?=$row->idquiz?>" value="b"> B.  <?=$ans_array[1]?><br>
            <input type="radio" name="jawaban<?=$row->idquiz?>" value="c"> C. <?=$ans_array[2]?><br>
            <input type="radio" name="jawaban<?=$row->idquiz?>" value="d"> D. <?=$ans_array[3]?><br>
            <input type="text" name="kunci<?=$row->idquiz?>" value="<?=$row->jawaban?>" style="display: none;">
            <input type="text" name="iduser" value="<?php echo $user['iduser'];?>" style="display: none;">
             <input type="text" name="tema" value="6" style="display: none;">
     <?php } ?>
    </div>
    
    <?php } 
        echo"</div>";
        $count++;
            }
    ?>

    
    <?php ?>
    </div>
    
    <br><br>
    <div id="button">

     <a href=# class="btn btn-success" id="prev"><i class="fa fa-arrow-circle-left"  ></i>  prev </a>
     <a href=# class="btn btn-success" id="next"> next  <i class="fa fa-arrow-circle-right"  ></i></a>

      <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">";
         
    </div>
    
    </form>
    <div id="display"></div>

    <div id="ModalHasil" class="modal fade">
    <div class="modal-dialog" style="overflow-y:initial !important;">
    <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" style="font-family: arial; font-size: 50px;"><center>Hasil Test</center></h4>
        </div>
        <div class="modal-body" style="overflow-y:auto;height:200px;">
        <!-- <form  role="form" method="post" action="<?=base_url()?>admin_data_user-->
          <form  role="form" method="post" action="#" id="formModalBerita">
            
            <input type="hidden" name="idberita" class="form-control" placeholder="Id Berita" readonly>               
            
            <!--<input type="text" name="isi" class="form-control" placeholder="isi" readonly>-->
            <div id="isihasil" style="font-family: arial; font-size: 70px; text-align: center; font-weight: 100px;">
            </div>
            <br>
                             
        </form>
        </div id="isi">
        </form>
                          
        <div class="modal-footer">
                             <!-- <button type="submit" name="" class="btn btn-primary">Submit 
        <button type="button" id="btnSave" onclick="kembali()" class="btn btn-primary">Kembali</button>-->
        <a href="<?=base_url()?>dashboard" class="btn btn-primary">Kembali</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              
        </div>
        </div>
        </div>
        </div>
        
   

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
