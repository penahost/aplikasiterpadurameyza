<?= $this->extend('keuangan/layout') ?>
<?= $this->section('content') ?>
<div class="ibox-head">
    <p class="page-title">Data Pengeluaran</p>
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
                                <a href="<?=base_url('/keuangan/pengeluaran/tambahdata');?>" class="btn btn-success">Tambah</a>
                            </div>
                        </div>
                  </div> -->
                  <div class="col-xl-12">
                      <div class="ibox">
                          <div class="ibox-head">
                              <div class="ibox-title">
                                <a href="<?=base_url('/keuangan/pengeluaran/tambahdata');?>" class="btn btn-primary"><i class="fa ti-plus"></i> Tambah</a>
                              </div>
                          </div>
                          <div class="ibox-body">
                              <table class="table table-striped table-bordered table-hover" id="example-table2" cellspacing="0" width="100%">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>ID Transaksi</th>
                                          <th>Ket. Pengeluaran</th>
                                          <th>Tanggal</th>
                                          <th>Nominal</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $no=1;
                                    foreach($pengeluaran as $row):
                                    ?>
                                      <tr>
                                          <td><?=$no;?></td>
                                          <td><?=$row->id_transaksi;?></td>
                                          <td><?=$row->pengeluaran_keterangan;?></td>
                                          <td><?=$row->pengeluaran_tanggal;?></td>
                                          <td><?=$row->pengeluaran_nominal;?></td>
                                          <td>
                                            <a style="width:15px;" class="btn btn-warning" href="<?php echo base_url();?>/keuangan/pengeluaran/edit/<?=$row->pengeluaran_id;?>"><i class="fa ti-pencil"></i></a>
                                            <a style="width:15px;" class="btn btn-danger" href="<?php echo base_url();?>/keuangan/pengeluaran/hapus/<?=$row->pengeluaran_id;?>/<?=$row->id_transaksi;?>" onclick="javascript: return confirm('Yakin Menghapus Data?')"><i class="fa fa-times"></i></a>
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
