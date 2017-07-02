<head>
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

</head>

<div id="container" style="margin-left: 200px;">
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
        
    </div>
    </div>
    
</div>
 </section>