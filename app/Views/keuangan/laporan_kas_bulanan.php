<?= $this->extend('keuangan/layout') ?>
<?= $this->section('content') ?>
<div class="ibox-head">
    <p class="page-title">Laporan KAS</p>
</div>
              <div class="row">
                <div class="col-md-4">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Per Minggu</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <?php
                                //echo date("Y-m-d");
                                ?>
                                <br>
                                Periode :
                                <br>
                                <form class="form-horizontal" action="<?=base_url();?>/keuangan/laporan_kas/minggu" method="post">
                                <div class="row">
                                <div class="col-sm-6">
                                <div class="form-group">
                                        <label>Bulan</label>
                                        <select name="bulan" class="form-control">
                                            <option value="01">1</option>
                                            <option value="02">2</option>
                                            <option value="03">3</option>
                                        </select>
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                        <label>Tahun</label>
                                        <select name="tahun" class="form-control">
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                </div>
                                </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-rounded">Per Minggu</button>
                              </form>
                            </div>
                        </div>
                  </div>
                  <div class="col-md-4">
                          <div class="ibox">
                              <div class="ibox-head">
                                  <div class="ibox-title">Per Bulan</div>
                                  <div class="ibox-tools">
                                      <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                  </div>
                              </div>
                              <div class="ibox-body">
                                  <?php
                                  //echo date("Y-m-d");
                                  ?>
                                  <br>
                                  Periode :
                                  <br>
                                  <form class="form-horizontal" action="<?=base_url();?>/keuangan/laporan_kas/bulan" method="post">
                                  <div class="row">
                                  <div class="col-sm-6">
                                  <div class="form-group">
                                          <label>Tahun</label>
                                          <select name="tahun" class="form-control">
                                              <option value="2021">2021</option>
                                              <option value="2022">2022</option>
                                              <option value="2023">2023</option>
                                          </select>
                                  </div>
                                  </div>
                                  </div>
                                  <button type="submit" class="btn btn-primary btn-rounded">Per Bulan</button>
                                </form>
                              </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                            <div class="ibox">
                                <div class="ibox-head">
                                    <div class="ibox-title">Per Tahun</div>
                                    <div class="ibox-tools">
                                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    </div>
                                </div>
                                <div class="ibox-body">
                                  <form class="form-horizontal" action="<?=base_url();?>/keuangan/laporan_kas/tahun" method="post">
                                    <button type="submit" class="btn btn-primary btn-rounded">Per Tahun</button>
                                  </form>
                                </div>
                            </div>
                      </div>

                  <div class="col-xl-12">
                      <div class="ibox">
                          <div class="ibox-head">
                              <div class="ibox-title">Laproran KAS</div>
                          </div>
                          <div class="ibox-body">
                              <table class="table table-striped table-bordered table-hover" id="example-table2" cellspacing="0" width="100%">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>Tanggal</th>
                                          <th>Nominal</th>

                                          <th>Jenis kas</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php

                                        // blok kode yang akan diulang di sini!





                                    //$filter=0;

                                    for ($i = 1; $i<=12; $i++){
                                      //echo "minggu".$i;
                                      //echo $no2;
                                    ?>
                                    <tr>
                                        <td>Bulan <?php echo $i;?></td>
                                    </tr>
                                    <?php
                                    foreach($laporan_kas as $row):
                                    ?>
                                    <?php
                                    $tanggal=$row->tgl_transaksi;
                                    $createDate = new DateTime($tanggal);
                                    $strip = $createDate->format('Y-m-j');
                                    $pecahkan = explode('-', $strip);
                                    //echo $i;
                                    //echo $pecahkan[2];

                                    ?>

                                      <?php
                                      if($pecahkan[1]==$i){
                                      ?>
                                      <tr>
                                          <td></td>
                                          <td><?=$row->tgl_transaksi;?></td>
                                          <td><?=$row->nominal;?></td>

                                          <td><?=$row->tipe_kas;?></td>

                                      </tr>
                                      <?php

                                      }
                                      ?>
                                      <?php

                                      endforeach;
                                      ?>
                                      <?php
                                      }
                                      ?>

                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>

              </div>
<?= $this->endSection() ?>
