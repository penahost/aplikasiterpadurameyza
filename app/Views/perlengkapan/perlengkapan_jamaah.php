<?= $this->extend('perlengkapan/layout') ?>
<?= $this->section('content') ?>
<div class="ibox-head">
    <p class="page-title">Data Perlengkapan jamaah</p>
</div>
              <div class="row">



                  <!-- <div class="col-md-6">
                          <div class="ibox">
                              <div class="ibox-head">
                                  <div class="ibox-title">Toolbar</div>
                                  <div class="ibox-tools">
                                      <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                  </div>
                              </div>
                              <div class="ibox-body">
                                  <a href="<?=base_url('/pendaftaran_umrah/jamaah/tambahdata');?>" class="btn btn-success">Tambah</a>
                              </div>
                          </div>
                    </div> -->

                  <div class="col-xl-12">
                      <div class="ibox">
                          <div class="ibox-head">
                              <div class="ibox-title">List Tabel</div>
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
                                            <a style="width:15px;" class="btn btn-info" href="<?php echo base_url();?>/perlengkapan/perlengkapan_jamaah/index/<?=$row->jamaah_id;?>"><i class="fa ti-eye"></i></a>
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
                  if (isset($row->jamaah_id)){
                   ?>
                  <div class="col-xl-12">
                      <div class="ibox">
                          <div class="ibox-head">
                              <div class="ibox-title">List Tabel</div>
                          </div>
                          <div class="ibox-body">
                              <table class="table table-striped table-bordered table-hover" id="example-table2" cellspacing="0" width="100%">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>Nama perlengkapan</th>
                                          <th>Jml diambil</th>
                                          <th>Tgl. diambil</th>
                                          <!-- <th>Jml kembali</th>
                                          <th>Tgl. kembali</th> -->
                                          <th>Option</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $no=1;
                                    foreach($perlengkapan_jamaah as $row):
                                    ?>
                                      <tr>
                                          <td><?=$no;?></td>
                                          <td><?=$row->perlengkapan_nama;?></td>
                                          <td><?=$row->perlengkapan_jamaah_jumlah_diambil;?></td>
                                          <td><?=$row->perlengkapan_jamaah_tgl_diambil;?></td>
                                          <!-- <td><?=$row->perlengkapan_jamaah_jumlah_kembali;?></td>
                                          <td><?=$row->perlengkapan_jamaah_tgl_kembali;?></td> -->
                                          <td>
                                            <a style="width:50px;" class="btn btn-info popup_ambil_perlengkapan" href="" data-toggle="modal" data-target="#exampleModal4" data-perlengkapan_id="<?=$row->perlengkapan_id;?>" data-perlengkapan_jamaah_id="<?=$row->perlengkapan_jamaah_id;?>"><i class="fa ti-hand-open"></i></a>
                                            <?php
                                            if($row->perlengkapan_jamaah_jumlah_diambil!=0){
                                            ?>

                                            <a style="width:50px;" class="btn btn-info" href="<?=base_url();?>/perlengkapan/perlengkapan_jamaah/cancel_ambil_aksi/<?=$row->perlengkapan_jamaah_id;?>/<?=$row->jamaah_id;?>/<?=$row->perlengkapan_id;?>"><i class="fa ti-back-left"></i></a>
                                            <?php
                                            }
                                            ?>
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
                        <h5 class="modal-title" id="exampleModalLabel">Preview Data Perlengkapan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                        <div class="col-md-6">
                                <div class="ibox">
                                    <div class="ibox-body">
                                      <h5>Data Perlengkapan</h5>
                                        <form class="form-horizontal" action="<?=base_url('/perlengkapan/perlengkapan_jamaah/updatedata_ambil_aksi/');?>" method="post">
                                          <input class="form-control" value="" name="perlengkapan_jamaah_id" type="text" >
                                          <input class="form-control" value="" name="jamaah_id" type="text" >
                                          <input class="form-control" value="" name="perlengkapan_id" type="text" >
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Nama</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="" name="perlengkapan_nama" type="text" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Jumlah diambil</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="" name="perlengkapan_jamaah_jumlah_diambil" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Tanggal diambil</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control mydatepicker1" placeholder="yyyy-mm-dd" name="perlengkapan_jamaah_tgl_diambil" type="text" placeholder="Tanggal berangkat">
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

                      </div>

                    </div>
                  </div>
                </div>


                <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Preview Data Perlengkapan</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                      <div class="col-md-6">
                              <div class="ibox">
                                  <div class="ibox-body">
                                    <h5>Data Perlengkapan</h5>
                                      <form class="form-horizontal" action="<?=base_url('/perlengkapan/perlengkapan_jamaah/updatedata_kembali_aksi/');?>" method="post">
                                        <input class="form-control" value="" name="perlengkapan_jamaah_id" type="text" >
                                        <input class="form-control" value="" name="jamaah_id" type="text" >
                                        <input class="form-control" value="" name="perlengkapan_id" type="text" >
                                          <div class="form-group row">
                                              <label class="col-sm-3 col-form-label">Nama</label>
                                              <div class="col-sm-9">
                                                  <input class="form-control" value="" name="perlengkapan_nama" type="text" >
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-3 col-form-label">Jumlah kembali</label>
                                              <div class="col-sm-9">
                                                  <input class="form-control" value="" name="perlengkapan_jamaah_jumlah_kembali" type="text" >
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-3 col-form-label">Tanggal kembali</label>
                                              <div class="col-sm-9">
                                                  <input class="form-control mydatepicker2" placeholder="yyyy-mm-dd" name="perlengkapan_jamaah_tgl_kembali" type="text" placeholder="Tanggal pulang">
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

                    </div>

                  </div>
                </div>
              </div>


              </div>
<?= $this->endSection() ?>
