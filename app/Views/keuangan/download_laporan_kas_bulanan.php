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
                                    $total_pemasukan=0;
                                    $total_pengeluaran=0;
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
                                          if($row->tipe_kas=="masuk"){
                                            $total_pemasukan+=$row->nominal;

                                          }else if($row->tipe_kas=="keluar"){
                                            $total_pengeluaran+=$row->nominal;
                                          }
                                           ?>
                                      <?php
                                      }
                                      ?>
                                      <?php
                                      endforeach;
                                      ?>
                                      <tr style="background-color:red;">
                                        <td>Total Pemasukan </td>
                                        <td><?=$total_pemasukan;?> </td>
                                        <td>Total Pengeluaran </td>
                                        <td><?=$total_pengeluaran;?> </td>
                                      </tr>
                                      <?php
                                      }
                                      ?>

                                  </tbody>
                              </table>
