<?= $this->extend('pendaftaran_haji_khusus/layout') ?>
<?= $this->section('content') ?>
<div class="ibox-head">
    <p class="page-title">Data Jamaah</p>
</div>
              <div class="row">
                  <div class="col-xl-12">
                      <div class="ibox">
                          <div class="ibox-head">
                              <div class="ibox-title">List Tabel</div>
                          </div>
                          <div class="ibox-body">
                              <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>No Paket</th>
                                          <th>Nama paket</th>
                                          <th>Jumlah Hari</th>
                                          <th>Tgl. Berangkat</th>
                                          <th>Tgl. Pulang</th>
                                          <th>Pesawat</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $no=1;
                                    foreach($paket as $row):
                                    ?>
                                      <tr>
                                          <td><?=$no;?></td>
                                          <td><?=$row->paket_nomer;?></td>
                                          <td><?=$row->paket_nama;?></td>
                                          <td><?=$row->paket_jumlah_hari;?></td>
                                          <td><?=$row->paket_tanggal_berangkat;?></td>
                                          <td><?=$row->paket_tanggal_pulang;?></td>
                                          <td><?=$row->paket_pesawat;?></td>
                                          <td>
                                            <a style="width:15px;" class="btn btn-info" href="<?php echo base_url();?>/pendaftaran_haji_khusus/jamaah/index/<?=$row->paket_id;?>"><i class="fa ti-eye"></i></a>
                                          </td>
                                      </tr>
                                      <?php
                                      $no++;
                                      endforeach;
                                      ?>

                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                  <?php
                  if(isset($paket_id)){
                   ?>
                  <!-- <div class="col-md-6">
                          <div class="ibox">
                              <div class="ibox-head">
                                  <div class="ibox-title">Toolbar</div>
                                  <div class="ibox-tools">
                                      <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                  </div>
                              </div>
                              <div class="ibox-body">
                                  <a href="<?=base_url('/pendaftaran_haji_khusus/jamaah/tambahdata');?>/<?=$paket_id;?>" class="btn btn-success">Tambah</a>
                              </div>
                          </div>
                    </div> -->
                  <div class="col-xl-12">
                      <div class="ibox">
                          <div class="ibox-head">
                              <div class="ibox-title">
                                <a href="<?=base_url('/pendaftaran_haji_khusus/jamaah/tambahdata');?>/<?=$paket_id;?>" class="btn btn-primary"><i class="fa ti-plus"></i> Tambah</a>
                                <a href="<?php echo base_url();?>/pendaftaran_haji_khusus/jamaah/download_report_manifest/<?=$paket_id;?>" class="btn btn-success"><i class="fa ti-import"></i> Report Manifest</a>
                              </div>
                          </div>
                          <div class="ibox-body">
                              <table class="table table-striped table-bordered table-hover" id="example-table2" cellspacing="0" width="100%">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>Nama Jamaah</th>
                                          <th>No Passport</th>
                                          <th>TTL</th>
                                          <th>Usia</th>
                                          <th>Option</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $no=1;
                                    foreach($jamaah as $row):
                                    ?>
                                      <tr>
                                          <td><?=$no;?></td>
                                          <td><?=$row->jamaah_nama;?></td>
                                          <td><?=$row->jamaah_no_passport;?></td>
                                          <td><?=$row->jamaah_ttl;?></td>
                                          <td><?=$row->jamaah_usia;?></td>
                                          <td>
                                              <a style="width:15px;" class="btn btn-warning" href="<?php echo base_url();?>/pendaftaran_haji_khusus/jamaah/edit/<?=$row->jamaah_id;?>"><i class="fa ti-pencil"></i></a>
                                              <a style="width:15px;" class="btn btn-danger" href="<?php echo base_url();?>/pendaftaran_haji_khusus/jamaah/hapus/<?=$row->jamaah_id;?>/<?=$paket_id;?>"><i class="fa fa-times"></i></a>
                                              <a style="width:15px;" class="btn btn-info popup_detail_jamaah" data-toggle="modal" data-target="#exampleModal4" data-id="<?=$row->jamaah_id;?>"><i class="fa ti-layers-alt"></i></a>
                                          </td>
                                      </tr>
                                      <?php
                                      $no++;
                                      endforeach;
                                      ?>

                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                  <?php
                  }
                  ?>
                  <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Preview Data Jamaah</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-12">
                                  <div class="ibox">
                                      <div class="ibox-body">
                                        <div id="dokumen"></div>
                                      </div>
                                  </div>
                          </div>
                        <div class="col-md-6">
                                <div class="ibox">
                                    <div class="ibox-body">
                                      <h5>Data Jamaah</h5>
                                        <form class="form-horizontal" action="<?=base_url('/pendaftaran_haji_khusus/paket/updatedata_aksi/');?>" method="post">

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Nama</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="" name="jamaah_nama" type="text" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">NO Passport</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="" name="jamaah_no_passport" type="text" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">TTL</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="" name="jamaah_ttl" type="text" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Usia</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="" name="jamaah_usia" type="text" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Alamat</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="" name="jamaah_alamat" type="text" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">No HP</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="" name="jamaah_no_hp" type="text" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Ket. Pembayaran</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="" name="jamaah_ket_pembayaran" type="text" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Tgl berangkat</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="" name="jamaah_tgl_berangkat" type="text" readonly>
                                                </div>
                                            </div>


                                        </form>

                                    </div>
                                </div>
                          </div>
                          <div class="col-md-6">
                                  <div class="ibox">
                                      <div class="ibox-body">
                                          <form class="form-horizontal" action="<?=base_url('/pendaftaran_haji_khusus/paket/updatedata_aksi/');?>" method="post">

                                              <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">Foto</label>
                                                  <div class="col-sm-9">

                                                      <img class="img-responsive" width="150" style="max-width: 100%;" id="jamaah_foto" src="" >
                                                  </div>
                                              </div>
                                              <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">KTP</label>
                                                  <div class="col-sm-9">

                                                      <img class="img-responsive"  width="150" style="max-width: 100%;" id="jamaah_foto_ktp" src="" >
                                                  </div>
                                              </div>
                                              <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">KK</label>
                                                  <div class="col-sm-9">

                                                      <img class="img-responsive"  width="150" style="max-width: 100%;" id="jamaah_foto_kk" src="" >
                                                  </div>
                                              </div>


                                          </form>
                                          <h5>Data Perlengkapan</h5>
                                          <div id="perlengkapan"></div>
                                      </div>
                                  </div>
                            </div>
                          </div>

                      </div>

                    </div>
                  </div>
                </div>
              </div>
<?= $this->endSection() ?>
