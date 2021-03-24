<?= $this->extend('pendaftaran_haji_khusus/layout') ?>
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
                                <a href="<?=base_url('/pendaftaran_haji_khusus/paket/tambahdata');?>" class="btn btn-success">Tambah</a>
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
                                            <a href="<?php echo base_url();?>/pendaftaran_haji_khusus/paket/edit/<?=$row->paket_id;?>">Edit</a>
                                            ||
                                            <a href="<?php echo base_url();?>/pendaftaran_haji_khusus/paket/hapus/<?=$row->paket_id;?>">Hapus</a>
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
              </div>
<?= $this->endSection() ?>
