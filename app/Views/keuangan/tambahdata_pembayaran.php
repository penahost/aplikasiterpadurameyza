<?= $this->extend('keuangan/layout') ?>
<?= $this->section('content') ?>
<div class="ibox-head">
    <p class="page-title"><a href="<?=base_url('keuangan/pembayaran/');?>">Data Pembayaran</a> / Tambah Data</p>
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
                                <form class="form-horizontal" action="<?=base_url('/keuangan/pembayaran/tambahdata_aksi/');?>" method="post">
                                    <input class="form-control" name="jamaah_id" value="<?=$jamaah_id;?>" type="hidden">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jumlah Pembayaran</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="pembayaran_jumlah" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="pembayaran_tanggal" type="text" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jenis Pembayaran</label>
                                        <div class="col-sm-10">
                                          <label class="ui-radio ui-radio-inline">
                                             <input type="radio" name="pembayaran_keterangan" value="dp">
                                             <span class="input-span"></span>DP</label>
                                         <label class="ui-radio ui-radio-inline">
                                             <input type="radio" name="pembayaran_keterangan" value="angsuran">
                                             <span class="input-span"></span>Angsuran</label>
                                         <label class="ui-radio ui-radio-inline">
                                             <input type="radio" name="pembayaran_keterangan" value="pelunasan">
                                             <span class="input-span"></span>Pelunasan</label>
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
