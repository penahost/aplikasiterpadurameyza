<?= $this->extend('pendaftaran_umrah/layout') ?>
<?= $this->section('content') ?>
<div class="ibox-head">
    <p class="page-title">Laporan Jamaah</p>
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
                                  <a href="<?php echo base_url();?>/pendaftaran_umrah/laporan/download_report_manifest/"  class="btn btn-success">Report Manifest</a>
                              </div>
                          </div>
                    </div> -->
                  <div class="col-xl-12">
                      <div class="ibox">
                          <div class="ibox-head">
                              <div class="ibox-title">
                                <a href="<?php echo base_url();?>/pendaftaran_umrah/laporan/download_report_manifest/" class="btn btn-success"><i class="fa ti-import"></i> Report Manifest</a>
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
                                            <a style="width:15px;" class="btn btn-danger" href="<?php echo base_url();?>/pendaftaran_umrah/laporan/hapus/<?=$row->jamaah_id;?>" onclick="javascript: return confirm('Yakin Menghapus Data?')"><i class="fa fa-times"></i></a>
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
