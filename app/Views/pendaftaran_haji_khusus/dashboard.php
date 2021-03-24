<?= $this->extend('pendaftaran_haji_khusus/layout') ?>
<?= $this->section('content') ?>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-success color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">Welcome</h2>
                    <div class="m-b-5">Pendaftaran haji khusus</div><i class="ti-user widget-stat-icon"></i>

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
