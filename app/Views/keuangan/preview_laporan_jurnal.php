<?= $this->extend('keuangan/layout') ?>
<?= $this->section('content') ?>
<div class="ibox-head">
    <p class="page-title">Data Jurnal KAS</p>
</div>
              <div class="row">

                <div class="col-md-4">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Per Tahun</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <?php
                                //echo date("Y-m-d");
                                ?>
                                <form class="form-horizontal" action="<?=base_url();?>/keuangan/jurnal/preview_laporan_jurnal" method="get">
                                <div class="row">
                                <div class="col-sm-6">
                                <div class="form-group">
                                        <label>Periode Tahun</label>
                                        <select name="tahun" class="form-control">
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                </div>
                                </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-rounded">Preview</button>
                              </form>
                            </div>
                        </div>
                  </div>
                  <div class="col-md-4">
                          <div class="ibox">
                              <div class="ibox-head">
                                  <div class="ibox-title">Navigasi</div>
                                  <div class="ibox-tools">
                                      <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                  </div>
                              </div>
                              <div class="ibox-body">
                                  <a href="<?=base_url();?>/keuangan/jurnal/download_laporan_jurnal/<?=$tahun;?>" class="btn btn-primary btn-rounded">Download laporan excell</a>
                              </div>
                          </div>
                    </div>
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
