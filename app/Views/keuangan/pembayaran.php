<?= $this->extend('keuangan/layout') ?>
<?= $this->section('content') ?>
              <div class="row">

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
                                          <th>Nama Paket</th>
                                          <th>Harga Paket</th>
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
                                          <td><?=$row->paket_nama;?></td>
                                          <td><?=$row->paket_harga;?></td>
                                          <td>
                                            <a href="<?php echo base_url();?>/keuangan/pembayaran/index/<?=$row->jamaah_id;?>">Lihat Pembayaran</a>
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
                  <div class="col-md-6">
                          <div class="ibox">
                              <div class="ibox-head">
                                  <div class="ibox-title">Toolbar</div>
                                  <div class="ibox-tools">
                                      <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                  </div>
                              </div>
                              <div class="ibox-body">
                                  <a href="<?=base_url('/keuangan/pembayaran/tambahdata');?>/<?=$jamaah_id;?>" class="btn btn-success">Tambah</a>
                              </div>
                          </div>
                    </div>
                  <div class="col-xl-12">
                      <div class="ibox">
                          <div class="ibox-head">
                              <div class="ibox-title">DAFTAR pembayaran</div>
                          </div>
                          <div class="ibox-body">
                              <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>No Transaksi</th>
                                          <th>Nama jamaah</th>
                                          <th>Jumlah</th>
                                          <th>Tgl</th>
                                          <th>Ket. Bayar</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $no=1;
                                    foreach($pembayaran as $row):
                                    ?>
                                      <tr>
                                          <td><?=$no;?></td>
                                          <td><?=$row->id_transaksi;?></td>
                                          <td><?=$row->jamaah_nama;?></td>
                                          <td><?=$row->pembayaran_jumlah;?></td>
                                          <td><?=$row->pembayaran_tanggal;?></td>
                                          <td><?=$row->pembayaran_keterangan;?></td>
                                          <td>
                                            <a href="<?php echo base_url();?>/keuangan/pembayaran/edit/<?=$row->pembayaran_id;?>">Edit</a>
                                            ||
                                            <a href="<?php echo base_url();?>/keuangan/pembayaran/hapus/<?=$row->pembayaran_id;?>/<?=$row->jamaah_id;?>/<?=$row->id_transaksi;?>">Hapus</a>
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
