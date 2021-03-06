<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Request
            <small>surat izin absensi</small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Log TU</li>
            <li>Request Surat Izin Absensi</li>
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
              <div class="row">
                  <form action="<?php echo base_url()."mahasiswa/log_tu_absensi/".$nim; ?>" method="post">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" type="text" class="form-control" value="<?php echo $nama_mahasiswa;?>" disabled>
                  </div> 
                   <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label>Tanggal absen</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input name="hari_absen" type="text" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                </div><!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nim</label>
                    <input id="nim" name="nim" type="text" class="form-control" value="<?php echo $nim;?>" disabled>
                  </div> 
                  <!-- textarea -->
                    <div class="form-group">
                      <label>Keterangan Absen</label>
                      <textarea name="keterangan_absen" class="form-control" rows="7" placeholder="<?php echo "Tuliskan tanggal anda tidak mengikuti perkuliahan. (Jam, tanggal, matakuliah)\nTuliskan alasan anda tidak mengikuti perkuliahan secara lengkap dan jelas.\n\nContoh:\nPada tanggal 21/06/2016 matakuliah PSI\nSaya izin untuk tidak mengikuti perkuliahan karena sebab sakit radang tenggorokan yang dirawat di RS Husana dirawat oleh dokter Ramelan."; ?>" class="form-control" value="<?php echo $nim;?>"></textarea>
                    </div>
                  <div class="form-group">
                  <button type="submit" class="btn btn-info pull-right">Submit</button>
                  </div>
                </div><!-- /.col -->
                </form>
              </div><!-- /.row -->
            </div><!-- /.box-body -->
            <div class="box-footer">
              Note : Jika ada yang kurang jelas silakan menghubungi TU yang sedang bertugas berjaga.
            </div>
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->