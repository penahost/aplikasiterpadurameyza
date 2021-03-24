<?= $this->extend('perlengkapan/layout') ?>
<?= $this->section('content') ?>
              <div class="row">
                <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Tambah data Form</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form-horizontal" action="<?=base_url('/perlengkapan/perlengkapan/tambahdata_aksi/');?>" method="post">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Nama perlengkapan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="perlengkapan_nama" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Stok</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="perlengkapan_stok" type="text" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Keterangan perlengkapan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="perlengkapan_keterangan" type="text">
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
