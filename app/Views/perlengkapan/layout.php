<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admin CPanel | Dashboard</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="<?=base_url('theme/cpanel/assets/vendors/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet" />
    <link href="<?=base_url('theme/cpanel/assets/vendors/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" />
    <link href="<?=base_url('theme/cpanel/assets/vendors/themify-icons/css/themify-icons.css');?>" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="<?=base_url('theme/cpanel/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css');?>" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="<?=base_url('theme/cpanel/assets/css/main.min.css');?>" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <!-- PLUGINS STYLES-->
    <link href="<?=base_url('theme/cpanel/assets/vendors/DataTables/datatables.min.css');?>" rel="stylesheet" />
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="<?=base_url('dashboard');?>">
                    <span class="brand">CPanel
                        <span class="brand-tip">Rameyza</span>
                    </span>
                    <span class="brand-mini">AC</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>

                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">

                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="<?=base_url('theme/cpanel/assets/img/admin-avatar.png');?>" />
                            <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="<?=base_url('/Login/logout');?>"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">

                <ul class="side-menu metismenu">
                    <li class="heading">PERLENGKAPAN</li>
                    <li>
                        <a class="active" href="<?=base_url('/perlengkapan/perlengkapan');?>"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">PERLENGKAPAN</span>
                        </a>
                    </li>
                    <li>
                        <a class="active" href="<?=base_url('/perlengkapan/perlengkapan_jamaah');?>"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">DATA PENGAMBILAN</span>
                            <span class="nav-label" style="margin-left:30px;">PERLENGKAPAN</span>
                        </a>
                    </li>




                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
          <div class="page-content fade-in-up">
            <!-- START PAGE CONTENT-->
            <?= $this->renderSection('content') ?>
          </div>
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">2018 © <b>AdminCAST</b> - All rights reserved.</div>
                <a class="px-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">BUY PREMIUM</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->

    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="<?=base_url('theme/cpanel/assets/vendors/jquery/dist/jquery.min.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('theme/cpanel/assets/vendors/popper.js/dist/umd/popper.min.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('theme/cpanel/assets/vendors/bootstrap/dist/js/bootstrap.min.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('theme/cpanel/assets/vendors/metisMenu/dist/metisMenu.min.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('theme/cpanel/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js');?>" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="<?=base_url('theme/cpanel/assets/vendors/chart.js/dist/Chart.min.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('theme/cpanel/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('theme/cpanel/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('theme/cpanel/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js');?>" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="<?=base_url('theme/cpanel/assets/js/app.min.js');?>" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="<?=base_url('theme/cpanel/assets/js/scripts/dashboard_1_demo.js');?>" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGINS-->
    <script src="<?=base_url('theme/cpanel/assets/vendors/DataTables/datatables.min.js');?>" type="text/javascript"></script>

    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script>
        $('.mydatepicker1').datetimepicker({
            uiLibrary: 'bootstrap4',
            modal: true,
            footer: true,
            format: 'yyyy-mm-dd hh:mm:ss',
        });
    </script>
    <script>
        $('.mydatepicker2').datetimepicker({
            uiLibrary: 'bootstrap4',
            modal: true,
            footer: true,
            format: 'yyyy-mm-dd hh:mm:ss',
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
        $(function() {
            $('#example-table2').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>
    <script type="text/javascript">
    $( document ).ready(function() {
      $(".popup_ambil_perlengkapan").click(function () {
          var perlengkapan_id = $(this).data('perlengkapan_id');
          var perlengkapan_jamaah_id = $(this).data('perlengkapan_jamaah_id');
          alert(perlengkapan_id);
          alert(perlengkapan_jamaah_id);
          //alert(my_id_value);
          // $("#preview_image").attr("src", my_id_value);
          //Ajax Load data from ajax
          $.ajax({
            url : "<?php echo base_url('/perlengkapan/perlengkapan_jamaah/preview_data_perlengkapan/')?>/" + perlengkapan_id+"/"+perlengkapan_jamaah_id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                console.log(data);
                $.each(data, function(index) {
                    $('[name="perlengkapan_jamaah_id"]').val(data[index].perlengkapan_jamaah_id);
                    $('[name="jamaah_id"]').val(data[index].jamaah_id);
                    $('[name="perlengkapan_id"]').val(data[index].perlengkapan_id);
                    $('[name="perlengkapan_nama"]').val(data[index].perlengkapan_nama);
                    $('[name="perlengkapan_jamaah_jumlah_diambil"]').val(data[index].perlengkapan_jamaah_jumlah_diambil);
                    $('[name="perlengkapan_jamaah_tgl_diambil"]').val(data[index].perlengkapan_jamaah_tgl_diambil);

                });
                //alert(data.jamaah_nama);

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                console.log(jqXHR);
                alert('Error get data from ajax');
            }
        });

        })

      //   $(".popup_kembalikan_perlengkapan").click(function () {
      //       var my_id_value = $(this).data('id');
      //       //alert(my_id_value);
      //       //alert(my_id_value);
      //       // $("#preview_image").attr("src", my_id_value);
      //       //Ajax Load data from ajax
      //       $.ajax({
      //         url : "<?php echo base_url('/perlengkapan/perlengkapan_jamaah/preview_data_perlengkapan/')?>/" + my_id_value,
      //         type: "GET",
      //         dataType: "JSON",
      //         success: function(data)
      //         {
      //             console.log(data);
      //             $.each(data, function(index) {
      //                 $('[name="perlengkapan_jamaah_id"]').val(data[index].perlengkapan_jamaah_id);
      //                 $('[name="jamaah_id"]').val(data[index].jamaah_id);
      //                 $('[name="perlengkapan_id"]').val(data[index].perlengkapan_id);
      //                 $('[name="perlengkapan_nama"]').val(data[index].perlengkapan_nama);
      //                 $('[name="perlengkapan_jamaah_jumlah_kembali"]').val(data[index].perlengkapan_jamaah_jumlah_kembali);
      //                 $('[name="perlengkapan_jamaah_tgl_kembali"]').val(data[index].perlengkapan_jamaah_tgl_kembali);
      //
      //             });
      //             //alert(data.jamaah_nama);
      //
      //         },
      //         error: function (jqXHR, textStatus, errorThrown)
      //         {
      //             console.log(jqXHR);
      //             alert('Error get data from ajax');
      //         }
      //     });
      //
      //
      //
      // })
    });
    </script>
</body>

</html>
