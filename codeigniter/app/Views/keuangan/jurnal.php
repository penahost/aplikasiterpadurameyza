<?= $this->extend('keuangan/layout') ?>
<?= $this->section('content') ?>
              <div class="row">

                  <div class="col-xl-12">
                      <div class="ibox">
                          <div class="ibox-head">
                              <div class="ibox-title">Jurnal KAS</div>
                          </div>
                          <div class="ibox-body">
                              <table class="table table-striped table-bordered table-hover" id="example-table2" cellspacing="0" width="100%">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>ID Transaksi</th>
                                          <th>Ket. Pembayaran</th>
                                          <th>Tanggal</th>
                                          <th>Kredit</th>
                                          <th>Debit</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $no=1;
                                    foreach($jurnal as $row):
                                    ?>
                                      <tr>
                                          <td><?=$no;?></td>
                                          <td><?=$row->id_transaksi;?></td>
                                          <td><?=$row->keterangan;?></td>
                                          <td><?=$row->tgl_transaksi;?></td>
                                          <td><?=$row->kredit;?></td>
                                          <td><?=$row->debit;?></td>
                                          
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
