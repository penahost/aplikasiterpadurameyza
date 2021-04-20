<?= $this->extend('perlengkapan/layout') ?>
<?= $this->section('content') ?>
    <div class="row">
        <div class="col-md-12">
            <div class="ibox bg-success color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">Selamat Datang</h2>
                    <div class="m-b-5">DATA PERLENGKAPAN JAMAAH</div><i class="ti-angle-double-left widget-stat-icon"></i>

                </div>
            </div>
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
