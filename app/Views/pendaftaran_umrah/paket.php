<?= $this->extend('pendaftaran_umrah/layout') ?>
<?= $this->section('content') ?>
<div class="ibox-head">
    <p class="page-title">Data Paket</p>
</div>
              <div class="row">
                <!-- <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">eeeee</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <a href="<?=base_url('/pendaftaran_umrah/paket/tambahdata');?>" class="btn btn-success">Tambah</a>
                            </div>
                        </div>
                  </div> -->
                  <div class="col-xl-12">
                      <div class="ibox">
                          <div class="ibox-head">
                              <div class="ibox-title">
                              <a href="<?=base_url('/pendaftaran_umrah/paket/tambahdata');?>" class="btn btn-primary"><i class="fa ti-plus"></i> Tambah</a>
                              </div>
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
                                          <th>Harga</th>
                                          <th>Hotel makah</th>
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
                                          <?php
                                          $timestamp1 = strtotime($row->paket_tanggal_berangkat);
                                          $new_date1 = date('d-m-Y', $timestamp1);
                                          $timestamp2 = strtotime($row->paket_tanggal_pulang);
                                          $new_date2 = date('d-m-Y', $timestamp2);
                                          ?>
                                          <td><?=$new_date1;?></td>
                                          <td><?=$new_date2;?></td>
                                          <td><?=$row->paket_harga;?></td>
                                          <td><?=$row->paket_hotel_makah;?></td>
                                          <td><?=$row->paket_hotel_madinah;?></td>
                                          <td><?=$row->paket_pesawat;?></td>
                                          <td>
                                            <a style="width:15px;" class="btn btn-warning" href="<?php echo base_url();?>/pendaftaran_umrah/paket/edit/<?=$row->paket_id;?>"><i class="fa ti-pencil"></i></a>
                                            <a style="width:15px;" class="btn btn-danger" href="<?php echo base_url();?>/pendaftaran_umrah/paket/hapus/<?=$row->paket_id;?>" onclick="javascript: return confirm('Yakin Menghapus Data?')"><i class="fa fa-times"></i></a>
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
