<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Request
            <small>pengajuan proposal</small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Log TU</li>
            <li>Request Pengajuan Proposal</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <?php 
          if(isset($ket)){
          echo "
          <div class='alert alert-success alert-dismissable'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h4>  <i class='icon fa fa-check'></i> Input Success</h4>
                    Data sudah terinput dalam database. Silakan lanjutkan pekerjaan anda.
                  </div>";
                }
                  ?>
          <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
                <div class="box-tools pull-right">
                    <div class="col-md-12"></div>
                    <div class="col-md-12"><h4>Today : <?php echo date('d-m-Y');?></h4></div>
                    
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form action="<?php echo base_url(); ?>mahasiswa/log_tu_proposal/081311633027" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" type="text" class="form-control" value="Rio Ramadhan Dharmawan" disabled>
                  </div>
                  <div class="form-group">
                    <label>Nim</label>
                    <input name="nim" type="text" class="form-control" value="081311633027" disabled>
                  </div>  
                </div><!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Telepon</label>
                    <input name="telp" type="text" class="form-control" value="089678482575" disabled>
                  </div>                  
                </div><!-- /.col -->
              </div><!-- /.row -->
              
              <div class="row">
                  <div class="col-md-6">
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Judul Proposal</label>
                      <textarea name="judul" class="form-control" rows="3" placeholder="Text here ..."></textarea>
                    </div> 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Topik Proposal</label>
                      <select name="topik" class="form-control select2" style="width: 100%;">
                      <option selected="selected">--Pilih--</option>
                      <option>Data Mining</option>
                      <option>Penelitian Dosen</option>
                      <option>Rekayasan Sistem Informasi</option>
                      <option>Sistem Pendukung Keputusan</option>
                    </select>
                    </div> 
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                        <div class="form-group">
                    <label>Dosen Wali</label>
                    <select name="doswal" class="form-control select2" style="width: 100%;">
                      <option selected="selected">--Pilih--</option>
                      <?php                      
                        for($i=0; $i<$jumlah; $i++){
                            echo "<option value='".$dosen[$i]['id_dosen']."'>".$dosen[$i]['nama_dosen']."</option>";
                        }
                      ?>
                    </select>
                  </div><!-- /.form-group --> 
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                    <label>Dosen Pembimbing 1</label>
                    <select name="dosbing1" class="form-control select2" style="width: 100%;">
                      <option selected="selected">--Pilih--</option>
                      <?php                      
                        for($i=0; $i<$jumlah; $i++){
                            echo "<option value='".$dosen[$i]['id_dosen']."'>".$dosen[$i]['nama_dosen']."</option>";
                        }
                      ?>
                    </select>
                  </div><!-- /.form-group --> 
                    <div class="form-group">
                        <label>Dosen Pembimbing 2</label>
                        <select name="dosbing2" class="form-control select2" style="width: 100%;">
                        <option selected="selected">--Pilih--</option>
                        <?php                      
                        for($i=0; $i<$jumlah; $i++){
                            echo "<option value='".$dosen[$i]['id_dosen']."'>".$dosen[$i]['nama_dosen']."</option>";
                        }
                        ?>
                        </select>
                    </div><!-- /.form-group --> 
                    <div class="form-group">
                  <button type="submit" class="btn btn-info pull-right">Submit</button>
                  </div>
                  </div>
              </div><!-- /.row -->
              </form>
            </div><!-- /.box-body -->
            <div class="box-footer">
              Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about the plugin.
            </div>
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->