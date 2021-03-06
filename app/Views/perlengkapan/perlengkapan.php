<?= $this->extend('perlengkapan/layout') ?>
<?= $this->section('content') ?>
<div class="ibox-head">
    <p class="page-title">Data Perlengkapan</p>
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
                                <a href="<?=base_url('/perlengkapan/perlengkapan/tambahdata');?>" class="btn btn-success">Tambah</a>
                            </div>
                        </div>
                  </div> -->
                  <div class="col-xl-12">
                      <div class="ibox">
                          <div class="ibox-head">
                              <div class="ibox-title">
                                <a href="<?=base_url('/perlengkapan/perlengkapan/tambahdata');?>" class="btn btn-primary"><i class="fa ti-plus"></i> Tambah</a>
                              </div>
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
                                            <a style="width:15px;" class="btn btn-warning" href="<?php echo base_url();?>/perlengkapan/perlengkapan/edit/<?=$row->perlengkapan_id;?>"><i class="fa ti-pencil"></i></a>
                                            <a style="width:15px;" class="btn btn-danger" href="<?php echo base_url();?>/perlengkapan/perlengkapan/hapus/<?=$row->perlengkapan_id;?>" onclick="javascript: return confirm('Yakin Menghapus Data?')"><i class="fa fa-times"></i></a>
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
