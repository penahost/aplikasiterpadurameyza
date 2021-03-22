<?= $this->extend('pendaftaran/layout') ?>
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
                              <!-- Success Upload -->
                              <?php if(!empty(session()->getFlashdata('success'))){ ?>
                                  <div class="alert alert-success">
                                      <?php echo session()->getFlashdata('success');?>
                                  </div>
                              <?php } ?>

                              <?php
                                  $errors = $validation->getErrors();
                                  if(!empty($errors))
                                  {
                                      echo $validation->listErrors('my_list');
                                  }
                              ?>
                              <form class="form-horizontal" action="<?=base_url('/pendaftaran/jamaah/tambahdata_aksii/');?>" method="post" enctype="multipart/form-data">
                                  <input class="form-control" value="<?=$paket_id;?>" name="paket_id" type="hidden" >
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Nama</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="" name="jamaah_nama" type="text" >
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">NO Passport</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="" name="jamaah_no_passport" type="text" >
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">TTL</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="" name="jamaah_ttl" type="text" >
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Usia</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="" name="jamaah_usia" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Alamat</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="" name="jamaah_alamat" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">No HP</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="" name="jamaah_no_hp" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Ket. Pembayaran</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="" name="jamaah_ket_pembayaran" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Tgl berangkat</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="" name="jamaah_tgl_berangkat" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Foto</label>
                                      <div class="col-sm-9">
                                          <input type="file" name="file_foto" id="">

                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">KTP</label>
                                      <div class="col-sm-9">
                                          <input type="file" name="file_ktp" id="">

                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">KK</label>
                                      <div class="col-sm-9">
                                          <input type="file" name="file_kk" id="">

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