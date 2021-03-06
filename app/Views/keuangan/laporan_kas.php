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
                                <form class="form-horizontal" action="<?=base_url();?>/keuangan/laporan_kas/minggu" method="get">
                                <div class="row">
                                <div class="col-sm-6">
                                <input type="hidden" value="minggu" name="mode">
                                <div class="form-group">
                                        <label>Bulan</label>
                                        <select name="bulan" class="form-control">
                                            <option value="01">1</option>
                                            <option value="02">2</option>
                                            <option value="03">3</option>
                                            <option value="04">4</option>
                                            <option value="05">5</option>
                                            <option value="06">6</option>
                                            <option value="07">7</option>
                                            <option value="08">8</option>
                                            <option value="09">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
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
                                  <form class="form-horizontal" action="<?=base_url();?>/keuangan/laporan_kas/bulan" method="get">
                                  <div class="row">
                                  <div class="col-sm-6">
                                  <input type="hidden" value="bulan" name="mode">
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
                                  <form class="form-horizontal" action="<?=base_url();?>/keuangan/laporan_kas/tahun" method="get">
                                    <input type="hidden" value="tahun" name="mode">
                                    <button type="submit" class="btn btn-primary btn-rounded">Per Tahun</button>
                                  </form>
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
                                        <th>Tanggal</th>
                                        <th>Nominal</th>
                                        <th>Jenis kas</th>
                                      </tr>
                                  </thead>
                                  <tbody>


                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>

              </div>
<?= $this->endSection() ?>
