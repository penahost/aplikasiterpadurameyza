<?= $this->extend('pendaftaran_umrah/layout') ?>
<?= $this->section('content') ?>
<div class="ibox-head">
    <p class="page-title"><a href="<?=base_url('/pendaftaran_umrah/jamaah');?>">Data Jamaah</a> / Edit Jamaah</p>
</div>
              <div class="row">
                <div class="col-md-12">
                <form class="form-horizontal" action="<?=base_url('/pendaftaran_umrah/jamaah/updatedata_aksi/');?>" method="post" enctype="multipart/form-data">
                </div>
                <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Edit Data Jamaah</div>
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
                                foreach($jamaah as $row):
                                ?>
                                <input class="form-control" name="jamaah_id" type="hidden" value="<?=$row->jamaah_id;?>">
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Nama</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="<?=$row->jamaah_nama;?>" name="jamaah_nama" type="text" >
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">NO Passport</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="<?=$row->jamaah_no_passport;?>" name="jamaah_no_passport" type="text" >
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Date Of Issue</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="<?=$row->jamaah_dateofissue;?>" name="jamaah_dateofissue" type="date" data-date-format="yyyy-mm-dd" >
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Date Of Epired</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="<?=$row->jamaah_dateofexpire;?>" name="jamaah_dateofexpire" type="date" data-date-format="yyyy-mm-dd" >
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Jenis Identitas</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="<?=$row->jamaah_jenis_identitas;?>" name="jamaah_jenis_identitas" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">No Identitas</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="<?=$row->jamaah_no_identitas;?>" name="jamaah_jenis_identitas" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">TTL</label>
                                      <?php
                                      $pecahkan = explode(',', $row->jamaah_ttl);
                                       ?>
                                      <div class="col-sm-3">
                                          <input class="form-control" value="<?=$pecahkan[0];?>" name="jamaah_tempat_lahir" type="text" placeholder="Kediri">
                                      </div>
                                      <div class="col-sm-6">
                                          <input class="form-control" value="<?=$pecahkan[1];?>" name="jamaah_tanggal_lahir" type="text" placeholder="17 Februari 1995">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Usia</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="<?=$row->jamaah_usia;?>" name="jamaah_usia" type="text">
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                      <div class="col-sm-9">
                                        <div>
                                          <?php
                                          if($row->jamaah_jk=="Laki-laki"){
                                           ?>
                                          <label class="ui-radio ui-radio-inline">
                                              <input type="radio" name="jamaah_jk" value="Laki-laki" checked>
                                              <span class="input-span"></span>Laki-laki</label>
                                          <label class="ui-radio ui-radio-inline">
                                              <input type="radio" name="jamaah_jk" value="Perempuan">
                                              <span class="input-span"></span>Perempuan</label>
                                              <?php
                                            } ?>
                                            <?php
                                            if($row->jamaah_jk=="Perempuan"){
                                             ?>
                                            <label class="ui-radio ui-radio-inline">
                                                <input type="radio" name="jamaah_jk" value="Laki-laki">
                                                <span class="input-span"></span>Laki-laki</label>
                                            <label class="ui-radio ui-radio-inline">
                                                <input type="radio" name="jamaah_jk" value="Perempuan" checked>
                                                <span class="input-span"></span>Perempuan</label>
                                                <?php
                                              } ?>
                                      </div>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Alamat</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="<?=$row->jamaah_alamat;?>" name="jamaah_alamat" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Desa / Kel</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="<?=$row->jamaah_desa_kel;?>" name="jamaah_desa_kel" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Kecamatan</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="<?=$row->jamaah_kecamatan;?>" name="jamaah_kecamatan" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Kota / Kabupaten</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="<?=$row->jamaah_kota_kab;?>" name="jamaah_kota_kab" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">No HP</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="<?=$row->jamaah_no_hp;?>" name="jamaah_no_hp" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Kewarganeraan</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="<?=$row->jamaah_kewarganegaraan;?>" name="jamaah_kewarganegaraan" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="<?=$row->jamaah_pekerjaan;?>" name="jamaah_pekerjaan" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Ket. Pembayaran</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="<?=$row->jamaah_ket_pembayaran;?>" name="jamaah_ket_pembayaran" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Tgl berangkat</label>
                                      <div class="col-sm-9">
                                          <input class="form-control" value="<?=$row->jamaah_tgl_berangkat;?>" name="jamaah_tgl_berangkat" type="date" data-date-format="yyyy-mm-dd">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Foto</label>
                                      <div class="col-sm-9">
                                          <input type="file" name="file_foto" id="">
                                          <img src="<?=base_url();?>/uploads/jamaah/<?=$row->jamaah_foto;?>" class="img-responsive" width="100" style="max-width: 100%;" id="jamaah_foto" src="" >
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">KTP</label>
                                      <div class="col-sm-9">
                                          <input type="file" name="file_ktp" id="">
                                          <img src="<?=base_url();?>/uploads/jamaah/<?=$row->jamaah_foto_ktp;?>" class="img-responsive" width="100" style="max-width: 100%;" id="jamaah_foto_ktp" src="" >
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">KK</label>
                                      <div class="col-sm-9">
                                          <input type="file" name="file_kk" id="">
                                          <img src="<?=base_url();?>/uploads/jamaah/<?=$row->jamaah_foto_kk;?>" class="img-responsive" width="100" style="max-width: 100%;" id="jamaah_foto_kk" src="" >
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

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Perlengkapan</label>
                                    <div class="col-sm-9">
                                      <?php

                                      foreach($perlengkapan_jamaah as $row2):
                                        ?>

                                      <?php
                                          if($row2->perlengkapan_jamaah_status=="cek"){
                                      ?>

                                        <label><input type="checkbox" name="perlengkapan[]" value="<?=$row2->perlengkapan_id;?>" checked> <?=$row2->perlengkapan_nama;?></label><br>
                                      <?php
                                        }else{
                                        ?>
                                        <label><input type="checkbox" name="perlengkapan[]" value="<?=$row2->perlengkapan_id;?>" > <?=$row2->perlengkapan_nama;?></label><br>
                                      <?php
                                        }
                                      ?>
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
