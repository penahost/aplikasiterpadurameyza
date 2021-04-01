<?= $this->extend('pendaftaran_haji_khusus/layout') ?>
<?= $this->section('content') ?>
<div class="ibox-head">
    <p class="page-title"><a href="<?=base_url('/pendaftaran_haji_khusus/paket');?>">Data Paket</a> / Tambah Paket</p>
</div>
              <div class="row">
                <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Tambah Data</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form-horizontal" action="<?=base_url('/pendaftaran_haji_khusus/paket/tambahdata_aksi/');?>" method="post">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nomer paket</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="paket_nomer" type="text" placeholder="Nomer paket">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama paket</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="paket_nama" type="text" placeholder="Nama paket">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jumlah hari</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="paket_jumlah_hari" type="text" placeholder="Jumlah hari">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tamggal berangkat</label>
                                        <div class="col-sm-10">
                                            <input class="form-control mydatepicker1" placeholder="yyyy-mm-dd" name="paket_tanggal_berangkat" type="text" placeholder="Tanggal berangkat">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal pulang</label>
                                        <div class="col-sm-10">
                                            <input class="form-control mydatepicker2" placeholder="yyyy-mm-dd" name="paket_tanggal_pulang" type="text" placeholder="Tanggal pulang">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">harga</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="paket_harga" type="text" placeholder="harga">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Hotel makan</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="paket_hotel_makah" type="text" placeholder="Hotel makah">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Hotel madinah</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="paket_hotel_madinah" type="text" placeholder="Hotel madinah">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Pesawat</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="paket_pesawat" type="text" placeholder="Pesawat">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="ml-sm-auto">
                                            <button class="btn btn-info" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                  </div>
              </div>
<?= $this->endSection() ?>
