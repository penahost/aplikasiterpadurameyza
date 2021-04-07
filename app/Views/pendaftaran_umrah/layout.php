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

    <link href="<?=base_url('vendor/eternicode/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');?>" rel="stylesheet" />
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
                    <li class="heading">PENDAFTARAN UMRAH</li>
                    <li>
                        <a class="active" href="<?=base_url('/pendaftaran_umrah/paket');?>"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">PAKET</span>
                        </a>
                    </li>

                    <li>
                        <a class="active" href="<?=base_url('/pendaftaran_umrah/jamaah');?>"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">DATA JAMAAH PAKET</span>
                        </a>
                    </li>
                    <li>
                        <a class="active" href="<?=base_url('/pendaftaran_umrah/laporan/jamaah');?>"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">LAPORAN JAMAAH</span>
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

    <script src="<?=base_url('vendor/eternicode/bootstrap-datepicker/dist/js/bootstrap-datepicker.js');?>" type="text/javascript"></script>

    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
     $(function(){
      $(".datepicker1").datepicker({
          format: 'dd-mm-yyyy',
          startDate: '-3d'
      });
     });
    </script>
    <script type="text/javascript">
     $(function(){
      $(".datepicker2").datepicker({
          format: 'dd-mm-yyyy',
          startDate: '-3d'
      });
     });
    </script>
    <script type="text/javascript">
     $(function(){
      $(".datepicker3").datepicker({
          format: 'dd-mm-yyyy',
          startDate: '-3d'
      });
     });
    </script>
    <!-- <script>
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
    </script> -->
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
      $(".popup_detail_jamaah").click(function () {
          var my_id_value = $(this).data('id');
          //alert(my_id_value);
          //alert(my_id_value);
          // $("#preview_image").attr("src", my_id_value);
          //Ajax Load data from ajax
          $.ajax({
            url : "<?php echo base_url('/pendaftaran_umrah/jamaah/preview_data_jamaah/')?>/" + my_id_value,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                console.log(data);

                var event_data = '';
                $.each(data, function(index) {
                    $('[name="jamaah_nama"]').val(data[index].jamaah_nama);
                    $('[name="jamaah_no_passport"]').val(data[index].jamaah_no_passport);
                    $('[name="jamaah_ttl"]').val(data[index].jamaah_ttl);
                    $('[name="jamaah_usia"]').val(data[index].jamaah_usia);
                    $('[name="jamaah_alamat"]').val(data[index].jamaah_alamat);
                    $('[name="jamaah_no_hp"]').val(data[index].jamaah_no_hp);
                    $('[name="jamaah_ket_pembayaran"]').val(data[index].jamaah_ket_pembayaran);
                    $('[name="jamaah_tgl_berangkat"]').val(data[index].jamaah_tgl_berangkat);
                    $("#jamaah_foto").attr("src", "<?= base_url();?>/uploads/jamaah/"+data[index].jamaah_foto);
                    $("#jamaah_foto_ktp").attr("src", "<?= base_url();?>/uploads/jamaah/"+data[index].jamaah_foto_ktp);
                    $("#jamaah_foto_kk").attr("src", "<?= base_url();?>/uploads/jamaah/"+data[index].jamaah_foto_kk);
                    event_data += '<a href="<?php echo base_url();?>/pendaftaran_umrah/jamaah/preview_surat_pernyataan/'+data[index].jamaah_id+'"><i class="fa fa-eye"></i> Surat Depag</a> || ';
                    event_data += '<a href="<?php echo base_url();?>/pendaftaran_umrah/jamaah/download_surat_pernyataan/'+data[index].jamaah_id+'"><i class="fa fa-download"></i> Surat Depag</a> ';
                    event_data += '<a href="<?php echo base_url();?>/pendaftaran_umrah/jamaah/preview_surat_pernyataan2/'+data[index].jamaah_id+'"><i class="fa fa-eye"></i> Surat Depag Kota</a> || ';
                    event_data += '<a href="<?php echo base_url();?>/pendaftaran_umrah/jamaah/download_surat_pernyataan2/'+data[index].jamaah_id+'"><i class="fa fa-download"></i> Surat Depag Kota</a> ';
                    event_data += '<a href="<?php echo base_url();?>/pendaftaran_umrah/jamaah/preview_surat_jaminan/'+data[index].jamaah_id+'"><i class="fa fa-eye"></i> Surat Jaminan</a> || ';
                    event_data += '<a href="<?php echo base_url();?>/pendaftaran_umrah/jamaah/download_surat_jaminan/'+data[index].jamaah_id+'"><i class="fa fa-download"></i> Surat Jaminan</a> ';
                    event_data += '<a href="<?php echo base_url();?>/pendaftaran_umrah/jamaah/preview_surat_rekom_kemenag/'+data[index].jamaah_id+'"><i class="fa fa-eye"></i> Surat Rekom Kemenag</a> || ';
                    event_data += '<a href="<?php echo base_url();?>/pendaftaran_umrah/jamaah/download_surat_rekom_kemenag/'+data[index].jamaah_id+'"><i class="fa fa-download"></i> Surat Rekom Kemenag</a> ';
                    event_data += '<a href="<?php echo base_url();?>/pendaftaran_umrah/jamaah/preview_surat_rekom_rameyza/'+data[index].jamaah_id+'"><i class="fa fa-eye"></i> Surat Rekom Rameyza</a> || ';
                    event_data += '<a href="<?php echo base_url();?>/pendaftaran_umrah/jamaah/download_surat_rekom_rameyza/'+data[index].jamaah_id+'"><i class="fa fa-download"></i> Surat Rekom Rameyza</a> ';

                });
                //alert(data.jamaah_nama);
                $("#dokumen").html(event_data);


            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                console.log(jqXHR);
                alert('Error get data from ajax');
            }
        });

        $.ajax({
          url : "<?php echo base_url('/pendaftaran_umrah/jamaah/preview_data_perlengkapan/')?>/" + my_id_value,
          type: "GET",
          dataType: "JSON",
          success: function(data)
          {
              console.log(data);
              $.each(data, function(index) {
                  $('#perlengkapan').append("&#10004; "+data[index].perlengkapan_nama);
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
    });
    </script>
</body>

</html>
