<div class="container" style="padding-right:8%; margin-top: -50px;">
    <h3>Grafik Monitoring Siswa </h3>
    <br>

    <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-3">
              <!-- AREA CHART -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Siswa</h3>

                    <div class="row" style="margin-top: 20px;">
                      <div class="col-md-5" >
                          <?php
                              echo "<img src='".base_url()."assets/katak.png'>";
                          ?>
                      </div>
                    </div>

                 <div class="row" style="margin-top: 20px;">
                      <div class="col-md-5" >
                          <table id="data_siswa" style="padding-right: 10px">
                          <?php foreach ($data_siswa as $u_key){ ?>
                            <tr>
                              <th>Nama</th>
                              <td></td>
                              <th>:</th>
                               <td></td>
                                <td></td>
                              <td>
                              <th><?php echo $u_key->nama; ?></th>
                              </td>
                            </tr>
                            <tr>
                              <th>Kelas</th>
                               <td></td>
                              <th>:</th>
                              <td></td>
                               <td></td>
                                <td>
                              <th><?php echo $u_key->kelas; ?></th>
                              </td>
                            </tr>
                            <tr>
                              <th>Absen</th>
                              <td></td>
                              <th>:</th>
                               <td></td>
                                <td></td>
                              <td>
                              <th><?php echo $u_key->absen; ?></th>
                              </td>
                            </tr>

                            <?php } ?>
                          </table>
                      </div>
                    </div>
                 
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>

            <!-- /.col (LEFT) -->
            <div class="col-md-5">
              <!-- LINE CHART -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Hasil Quiz</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
                </div>
                
                <div class="box-body">
                
                  <div id="charts">
                    <canvas id="barChart2" style="height:350px">
                    
                </canvas>
                  </div>
                  
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->

            </div>
            <!-- /.col (RIGHT) -->
            <div class="row">
            <div class="col-md-4">
              <!-- AREA CHART -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Kurikulum</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>

                    <div class="row" style="margin-top: 20px;">
                      <div class="col-md-5" >
                         

                    </div>
                 
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
          <!-- /.row -->
          

        </section>
        <!-- /.content -->

</div>
