<?= $this->extend('pendaftaran/layout') ?>
<?= $this->section('content') ?>
              <div class="row">
                <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Toolbar</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <a href="<?=base_url('/pendaftaran/paket/tambahdata');?>" class="btn btn-success">Tambah</a>
                            </div>
                        </div>
                  </div>
                  <div class="col-xl-12">
                      <div class="ibox">
                          <div class="ibox-head">
                              <div class="ibox-title">DAFTAR paket</div>
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
                                          <th>harga</th>
                                          <th>Hotel makan</th>
                                          <th>Hotel madinah</th>
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
                                          <td><?=$row->paket_harga;?></td>
                                          <td><?=$row->paket_hotel_makah;?></td>
                                          <td><?=$row->paket_hotel_madinah;?></td>
                                          <td><?=$row->paket_pesawat;?></td>
                                          <td>
                                            <a href="<?php echo base_url();?>/pendaftaran/jamaah/index/<?=$row->paket_id;?>">Lihat Jamaah</a>
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

                  <div class="col-xl-12">
                      <div class="ibox">
                          <div class="ibox-head">
                              <div class="ibox-title">DAFTAR Jamaah</div>
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
                                          <th>Alamat</th>
                                          <th>No Hp</th>
                                          <th>Ket bayar</th>
                                          <th>Tgl berangkat</th>
                                          <th>Foto</th>
                                          <th>KTP</th>
                                          <th>KK</th>
                                          <th>Aksi</th>
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
                                          <td><?=$row->jamaah_alamat;?></td>
                                          <td><?=$row->jamaah_no_hp;?></td>
                                          <td><?=$row->jamaah_ket_pembayaran;?></td>
                                          <td><?=$row->jamaah_tgl_berangkat;?></td>
                                          <td><?=$row->jamaah_foto;?></td>
                                          <td><?=$row->jamaah_foto_ktp;?></td>
                                          <td><?=$row->jamaah_foto_kk;?></td>
                                          <td>
                                            <a href="<?php echo base_url();?>/pendaftaran/jamaah/edit/<?=$row->jamaah_id;?>">Edit</a>
                                            ||
                                            <a href="<?php echo base_url();?>/pendaftaran/jamaah/hapus/<?=$row->jamaah_id;?>">Hapus</a>
                                            ||
                                              <a href="" data-toggle="modal" data-target="#exampleModal4"  class="popup_detail_jamaah" data-id="<?=$row->jamaah_id;?>">Detail</a>
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
                        <div class="col-md-6">
                                <div class="ibox">
                                    <div class="ibox-body">
                                        <form class="form-horizontal" action="<?=base_url('/pendaftaran/paket/updatedata_aksi/');?>" method="post">
                                          <?php
                                          foreach($jamaah as $row):
                                          ?>
                                          <input class="form-control" name="paket_id" type="hidden" value="<?=$row->paket_id;?>">
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
                                                <label class="col-sm-3 col-form-label">TTL</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="<?=$row->jamaah_ttl;?>" name="jamaah_ttl" type="text" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Usia</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="<?=$row->jamaah_usia;?>" name="jamaah_usia" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Alamat</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="<?=$row->jamaah_alamat;?>" name="jamaah_alamat" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">No HP</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="<?=$row->jamaah_no_hp;?>" name="jamaah_no_hp" type="text">
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
                                                    <input class="form-control" value="<?=$row->jamaah_tgl_berangkat;?>" name="jamaah_tgl_berangkat" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Foto</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="<?=$row->jamaah_foto;?>" name="jamaah_foto" type="text" >
                                                    <img class="img-responsive" style="max-width: 100%;" id="jamaah_foto" src="" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">KTP</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="<?=$row->jamaah_foto_ktp;?>" name="jamaah_foto_ktp" type="text">
                                                    <img class="img-responsive" style="max-width: 100%;" id="jamaah_foto_ktp" src="" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">KK</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="<?=$row->jamaah_foto_kk;?>" name="jamaah_foto_kk" type="text">
                                                    <img class="img-responsive" style="max-width: 100%;" id="jamaah_foto_kk" src="" >
                                                </div>
                                            </div>
                                            <?php
                                            endforeach;
                                            ?>

                                        </form>
                                    </div>
                                </div>
                          </div>

                      </div>

                    </div>
                  </div>
                </div>
              </div>
<?= $this->endSection() ?>
