<?= $this->extend('perlengkapan/layout') ?>
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
                                <a href="<?=base_url('/perlengkapan/perlengkapan/tambahdata');?>" class="btn btn-success">Tambah</a>
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
                                          <th>Nama perlengkapan</th>
                                          <th>Stok</th>
                                          <th>Keterangan Perlengkapan</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $no=1;
                                    foreach($perlengkapan as $row):
                                    ?>
                                      <tr>
                                          <td><?=$no;?></td>
                                          <td><?=$row->perlengkapan_nama;?></td>
                                          <td><?=$row->perlengkapan_stok;?></td>
                                          <td><?=$row->perlengkapan_keterangan;?></td>
                                          <td>
                                            <a href="<?php echo base_url();?>/perlengkapan/perlengkapan/edit/<?=$row->perlengkapan_id;?>">Edit</a>
                                            ||
                                            <a href="<?php echo base_url();?>/perlengkapan/perlengkapan/hapus/<?=$row->perlengkapan_id;?>">Hapus</a>
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
