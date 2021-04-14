<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admin CPanel | Dashboard</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="<?=base_url('theme/cpanel/assets/vendors/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet" />
    <link href="<?=base_url('theme/cpanel/assets/vendors/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" />
    <link href="<?=base_url('theme/cpanel/assets/vendors/themify-icons/css/themify-icons.css');?>" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="<?=base_url('theme/cpanel/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css');?>" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="<?=base_url('theme/cpanel/assets/css/main.min.css');?>" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <!-- PLUGINS STYLES-->
    <link href="<?=base_url('theme/cpanel/assets/vendors/DataTables/datatables.min.css');?>" rel="stylesheet" />
</head>
<body>
  <?php
  $no=1;
  foreach($cetakdatajamaah as $row):
  ?>
  <div class="row">
  <div class="col-md-6">
          <div class="ibox">
              <div class="ibox-body">
                <h5>Data Jamaah</h5>
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama</label>
                          <div class="col-sm-9">
                              <input class="form-control" value="<?=$row->paket_nomer;?>" type="text" readonly>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">NO Passport</label>
                          <div class="col-sm-9">
                              <input class="form-control" value="<?=$row->jamaah_no_passport;?>" name="jamaah_no_passport" type="text" readonly>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date Of Issue</label>
                          <div class="col-sm-9">
                              <input class="form-control" value="<?=$row->jamaah_dateofissue;?>" name="jamaah_tgl_berangkat" type="text" readonly>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date Of Expire</label>
                          <div class="col-sm-9">
                              <input class="form-control" value="<?=$row->jamaah_dateofexpire;?>" name="jamaah_tgl_berangkat" type="text" readonly>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">TTL</label>
                          <div class="col-sm-9">
                              <input class="form-control" value="<?=$row->jamaah_ttl;?>" name="jamaah_ttl" type="text" readonly>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Usia</label>
                          <div class="col-sm-9">
                              <input class="form-control" value="<?=$row->jamaah_usia;?>" name="jamaah_usia" type="text" readonly>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                          <div class="col-sm-9">
                              <input class="form-control" value="<?=$row->jamaah_jk;?>" name="jamaah_tgl_berangkat" type="text" readonly>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Alamat</label>
                          <div class="col-sm-9">
                              <input class="form-control" value="<?=$row->jamaah_alamat;?>" name="jamaah_alamat" type="text" readonly>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">No HP</label>
                          <div class="col-sm-9">
                              <input class="form-control" value="<?=$row->jamaah_no_hp;?>" name="jamaah_no_hp" type="text" readonly>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ket. Pembayaran</label>
                          <div class="col-sm-9">
                              <input class="form-control" value="<?=$row->jamaah_ket_pembayaran;?>" name="jamaah_ket_pembayaran" type="text" readonly>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tgl berangkat</label>
                          <div class="col-sm-9">
                              <input class="form-control" value="<?=$row->jamaah_tgl_berangkat;?>" name="jamaah_tgl_berangkat" type="text" readonly>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Pekerjaan</label>
                          <div class="col-sm-9">
                              <input class="form-control" value="<?=$row->jamaah_pekerjaan;?>" name="jamaah_tgl_berangkat" type="text" readonly>
                          </div>
                      </div>
              </div>
          </div>
    </div>
    <div class="col-md-6">
            <div class="ibox">
                <div class="ibox-body">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Foto</label>
                            <div class="col-sm-9">

                                <img src="<?php echo base_url(); ?>/uploads/jamaah/<?=$row->jamaah_foto;?>" class="img-responsive" width="150" style="max-width: 100%;" id="jamaah_foto" src="" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">KTP</label>
                            <div class="col-sm-9">

                                <img src="<?php echo base_url(); ?>/uploads/jamaah/<?=$row->jamaah_foto_ktp;?>" class="img-responsive"  width="150" style="max-width: 100%;" id="jamaah_foto_ktp" src="" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">KK</label>
                            <div class="col-sm-9">

                                <img src="<?php echo base_url(); ?>/uploads/jamaah/<?=$row->jamaah_foto_kk;?>" class="img-responsive"  width="150" style="max-width: 100%;" id="jamaah_foto_kk" src="" >
                            </div>
                        </div>
                    <h5>Data Perlengkapan</h5>
                    <?php
                    $no=1;
                    foreach($dataperlengkapan as $row2):
                    ?>

                    <?=$row2->perlengkapan_nama;?> ,

                    <?php
                    $no++;
                    endforeach;
                    ?>
                </div>
            </div>
      </div>
    </div>
      <?php
      $no++;
      endforeach;
      ?>

</body>
<script src="<?=base_url('theme/cpanel/assets/vendors/jquery/dist/jquery.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('theme/cpanel/assets/vendors/popper.js/dist/umd/popper.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('theme/cpanel/assets/vendors/bootstrap/dist/js/bootstrap.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('theme/cpanel/assets/vendors/metisMenu/dist/metisMenu.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('theme/cpanel/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js');?>" type="text/javascript"></script>
<!-- PAGE LEVEL PLUGINS-->
<script src="<?=base_url('theme/cpanel/assets/vendors/chart.js/dist/Chart.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('theme/cpanel/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('theme/cpanel/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js');?>" type="text/javascript"></script>
<script src="<?=base_url('theme/cpanel/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js');?>" type="text/javascript"></script>
<!-- CORE SCRIPTS-->
<script src="<?=base_url('theme/cpanel/assets/js/app.min.js');?>" type="text/javascript"></script>
<!-- PAGE LEVEL SCRIPTS-->
<script src="<?=base_url('theme/cpanel/assets/js/scripts/dashboard_1_demo.js');?>" type="text/javascript"></script>

<!-- PAGE LEVEL PLUGINS-->
<script src="<?=base_url('theme/cpanel/assets/vendors/DataTables/datatables.min.js');?>" type="text/javascript"></script>

<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script>
window.print();
</script>
</html>
