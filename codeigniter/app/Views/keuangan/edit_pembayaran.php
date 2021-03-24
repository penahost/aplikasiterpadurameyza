<?= $this->extend('keuangan/layout') ?>
<?= $this->section('content') ?>
              <div class="row">
                <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Edit data Form</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form-horizontal" action="<?=base_url('/keuangan/pembayaran/updatedata_aksi/');?>" method="post">

                                  <?php
                                  foreach($pembayaran as $row):
                                  ?>
                                  <input class="form-control" name="pembayaran_id" value="<?=$row->pembayaran_id;?>" type="hidden">
                                  <input class="form-control" name="jamaah_id" value="<?=$row->jamaah_id;?>" type="hidden">
                                  <input class="form-control" name="id_transaksi" value="<?=$row->id_transaksi;?>" type="hidden">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jumlah Pembayaran</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="<?=$row->pembayaran_jumlah;?>" name="pembayaran_jumlah" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="<?=$row->pembayaran_tanggal;?>" name="pembayaran_tanggal" type="text" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jenis Pembayaran</label>
                                        <div class="col-sm-10">
                                          <?php
                                          if($row->pembayaran_keterangan=="dp"){
                                          ?>
                                          <label class="ui-radio ui-radio-inline">
                                             <input type="radio" name="pembayaran_keterangan" value="dp" checked>
                                             <span class="input-span"></span>DP</label>
                                         <label class="ui-radio ui-radio-inline">
                                             <input type="radio" name="pembayaran_keterangan" value="angsuran">
                                             <span class="input-span"></span>Angsuran</label>
                                         <label class="ui-radio ui-radio-inline">
                                             <input type="radio" name="pembayaran_keterangan" value="pelunasan">
                                             <span class="input-span"></span>Pelunasan</label>

                                        </div>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        if($row->pembayaran_keterangan=="angsuran"){
                                        ?>
                                        <label class="ui-radio ui-radio-inline">
                                           <input type="radio" name="pembayaran_keterangan" value="dp" >
                                           <span class="input-span"></span>DP</label>
                                       <label class="ui-radio ui-radio-inline">
                                           <input type="radio" name="pembayaran_keterangan" value="angsuran" checked>
                                           <span class="input-span"></span>Angsuran</label>
                                       <label class="ui-radio ui-radio-inline">
                                           <input type="radio" name="pembayaran_keterangan" value="pelunasan">
                                           <span class="input-span"></span>Pelunasan</label>

                                      </div>
                                      <?php
                                      }
                                      ?>
                                      <?php
                                      if($row->pembayaran_keterangan=="pelunasan"){
                                      ?>
                                      <label class="ui-radio ui-radio-inline">
                                         <input type="radio" name="pembayaran_keterangan" value="dp">
                                         <span class="input-span"></span>DP</label>
                                     <label class="ui-radio ui-radio-inline">
                                         <input type="radio" name="pembayaran_keterangan" value="angsuran">
                                         <span class="input-span"></span>Angsuran</label>
                                     <label class="ui-radio ui-radio-inline">
                                         <input type="radio" name="pembayaran_keterangan" value="pelunasan" checked>
                                         <span class="input-span"></span>Pelunasan</label>

                                    </div>
                                    <?php
                                    }
                                    ?>
                                    </div>
                                    <?php
                                    endforeach;
                                    ?>
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                  </div>
              </div>
<?= $this->endSection() ?>
