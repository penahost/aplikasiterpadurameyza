<?= $this->extend('pendaftaran_umrah/layout') ?>
<?= $this->section('content') ?>
              <div class="row">
                <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Edit data Form</div>
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
                                            <input class="form-control mydatepicker1" value="<?=$row->paket_tanggal_berangkat;?>" placeholder="yyyy-mm-dd" name="paket_tanggal_berangkat" type="text" placeholder="Tanggal berangkat">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal pulang</label>
                                        <div class="col-sm-10">
                                            <input class="form-control mydatepicker2" value="<?=$row->paket_tanggal_pulang;?>" placeholder="yyyy-mm-dd" name="paket_tanggal_pulang" type="text" placeholder="Tanggal pulang">
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