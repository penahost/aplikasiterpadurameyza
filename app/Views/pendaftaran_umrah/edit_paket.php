<?= $this->extend('pendaftaran_umrah/layout') ?>
<?= $this->section('content') ?>
<div class="ibox-head">
    <p class="page-title"><a href="<?=base_url('/pendaftaran_umrah/paket');?>">Data Paket</a> / Edit Paket</p>
</div>
              <div class="row">
                <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Edit Data</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form-horizontal" action="<?=base_url('/pendaftaran_umrah/paket/updatedata_aksi/');?>" method="post">
                                  <?php
                                  foreach($paket as $row):
                                  ?>
                                  <input class="form-control" name="paket_id" type="hidden" value="<?=$row->paket_id;?>">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nomer paket</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="<?=$row->paket_nomer;?>" name="paket_nomer" type="text" placeholder="Nomer paket">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama paket</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="<?=$row->paket_nama;?>" name="paket_nama" type="text" placeholder="Nama paket">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jumlah hari</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="<?=$row->paket_jumlah_hari;?>" name="paket_jumlah_hari" type="text" placeholder="Jumlah hari">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tamggal berangkat</label>
                                        <div class="col-sm-10">
                                          <?php
                                          $timestamp1 = strtotime($row->paket_tanggal_berangkat);
                                          $new_date1 = date('Y-m-d', $timestamp1);
                                           ?>
                                            <input class="form-control" value="<?=$new_date1;?>" placeholder="dd-mm-yyyy" name="paket_tanggal_berangkat"  type="date" data-date-format="yyyy-mm-dd">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal pulang</label>
                                        <div class="col-sm-10">
                                          <?php
                                          $timestamp2 = strtotime($row->paket_tanggal_pulang);
                                          $new_date2 = date('Y-m-d', $timestamp2);
                                           ?>
                                            <input class="form-control" value="<?=$new_date2;?>" placeholder="dd-mm-yyyy" name="paket_tanggal_pulang"  type="date" data-date-format="yyyy-mm-dd">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">harga</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="<?=$row->paket_harga;?>" name="paket_harga" type="text" placeholder="harga">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Hotel makan</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="<?=$row->paket_hotel_makah;?>" name="paket_hotel_makah" type="text" placeholder="Hotel makan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Hotel madinah</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="<?=$row->paket_hotel_madinah;?>" name="paket_hotel_madinah" type="text" placeholder="Hotel madinah">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Pesawat</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="<?=$row->paket_pesawat;?>" name="paket_pesawat" type="text" placeholder="Pesawat">
                                        </div>
                                    </div>
                                    <?php
                                    endforeach;
                                    ?>
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                  </div>
              </div>
<?= $this->endSection() ?>
