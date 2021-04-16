<?= $this->extend('pendaftaran_umrah/layout') ?>
<?= $this->section('content') ?>
              <div class="row">
                <div class="col-md-12">
                <form  action="<?=base_url('/pendaftaran_umrah/jamaah/tambahdata_aksii/');?>" method="post" enctype="multipart/form-data">
                </div>
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
                                      <label class="col-sm-3 col-form-label">Date Of Issue</label>
                                      <div class="col-sm-9">
                                          <input class="form-control datepicker" name="jamaah_dateofissue" type="date" data-date-format="yyyy-mm-dd" >
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Date Of Epired</label>
                                      <div class="col-sm-9">
                                          <input class="form-control datepicker" name="jamaah_dateofexpire" type="date" data-date-format="yyyy-mm-dd" >
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">TTL</label>
                                      <div class="col-sm-3">
                                          <input class="form-control" value="" name="jamaah_tempat_lahir" type="text" placeholder="Kediri">
                                      </div>
                                      <div class="col-sm-6">
                                          <input class="form-control" value="" name="jamaah_tanggal_lahir" type="text" placeholder="17 Februari 1995">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Usia</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="" name="jamaah_usia" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                      <div class="col-sm-9">
                                        <div>
                                          <label class="ui-radio ui-radio-inline">
                                              <input type="radio" name="jamaah_jk" value="Laki-laki">
                                              <span class="input-span"></span>Laki-laki</label>
                                          <label class="ui-radio ui-radio-inline">
                                              <input type="radio" name="jamaah_jk" value="Perempuan">
                                              <span class="input-span"></span>Perempuan</label>
                                      </div>
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
                                          <input class="form-control datepicker" value="" name="jamaah_tgl_berangkat" type="date" data-date-format="yyyy-mm-dd">
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

                            </div>
                        </div>
                  </div>

                  <div class="col-md-6">
                          <div class="ibox">
                              <div class="ibox-head">
                                  <div class="ibox-title">Tambah data perlengkapan</div>
                                  <div class="ibox-tools">
                                      <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                      <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                  </div>
                              </div>
                              <div class="ibox-body">

                                    <input class="form-control" value="<?=$paket_id;?>" name="paket_id" type="hidden" >
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Perlengkapan</label>
                                        <div class="col-sm-9">
                                          <?php
                                          foreach($perlengkapan as $row):
                                          ?>
                                            <label><input type="checkbox" name="perlengkapan[]" value="<?=$row->perlengkapan_id;?>"> <?=$row->perlengkapan_nama;?></label><br>
                                          <?php
                                          endforeach;
                                          ?>
                                        </div>
                                    </div>





                              </div>
                          </div>
                    </div>
                    <div class="col-md-12">
                    </form>
                    </div>
              </div>
<?= $this->endSection() ?>
