<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
    <div class="row">
      <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-body">
                              <center>
                                <marquee><strong>Selamat Datang di Aplikasi Sistem Terpadu PT. Rameyza Wisata Jaya</strong></marquee>
                              </center>
                            </div>
                        </div>
                        <div class="ibox">
                            <div class="ibox-body">
                              <center>
                                <h1>SISTEM APLIKASI TERPADU</h1>
                                <H1>PT. RAMEYZA WISATA JAYA</h1>
                              </center>
                            </div>
                        </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="<?=base_url('pendaftaran_umrah/dashboard');?>">
            <div class="ibox bg-success color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">PENDAFTARAN</h2>
                    <div class="m-b-5">Pendaftaran UMRAH</div><i class="ti-user widget-stat-icon"></i>

                </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
            <a href="<?=base_url('pendaftaran_haji_khusus/dashboard');?>">
              <div class="ibox bg-info color-white widget-stat">
                  <div class="ibox-body">
                      <h2 class="m-b-5 font-strong">PENDAFTARAN</h2>
                          <div class="m-b-5">Pendaftaran HAJI KHUSUS</div><i class="ti-user widget-stat-icon"></i>
                  </div>
              </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="<?=base_url('perlengkapan/dashboard');?>">
              <div class="ibox bg-warning color-white widget-stat">
                  <div class="ibox-body">
                      <h2 class="m-b-5 font-strong">PERLENGKAPAN</h2>
                          <div class="m-b-5">Perlengkapan JAMAAH</div><i class="ti-widget widget-stat-icon"></i>
                  </div>
              </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6">
          <a href="<?=base_url('keuangan/dashboard');?>">
              <div class="ibox bg-danger color-white widget-stat">
                  <div class="ibox-body">
                      <h2 class="m-b-5 font-strong">KEUANGAN</h2>
                          <div class="m-b-5">Keluar masuk Kas Keuangan</div><i class="fa fa-money widget-stat-icon"></i>
                  </div>
              </div>
          </a>
        </div>

    </div>


    <style>
        .visitors-table tbody tr td:last-child {
            display: flex;
            align-items: center;
        }

        .visitors-table .progress {
            flex: 1;
        }

        .visitors-table .progress-parcent {
            text-align: right;
            margin-left: 10px;
        }
    </style>
<?= $this->endSection() ?>
