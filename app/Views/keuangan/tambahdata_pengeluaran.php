<?= $this->extend('keuangan/layout') ?>
<?= $this->section('content') ?>
<div class="ibox-head">
    <p class="page-title"><a href="<?=base_url('keuangan/pengeluaran/');?>">Data Pengeluaran</a> / Tambah Data</p>
</div>
              <div class="row">
                <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Tambah data Form</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form-horizontal" action="<?=base_url('/keuangan/pengeluaran/tambahdata_aksi/');?>" method="post">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Ket. Pengeluaran</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="pengeluaran_keterangan" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jumlah Pengeluaran</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="pengeluaran_nominal" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="pengeluaran_tanggal" type="text" >
                                        </div>
                                    </div>
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
