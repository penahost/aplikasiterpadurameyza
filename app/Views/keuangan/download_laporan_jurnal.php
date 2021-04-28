<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
                              <table class="table table-striped table-bordered table-hover" id="example-table2" cellspacing="0" width="100%">
                                  <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Tanggal</th>
                                          <th>Ket. Pembayaran</th>
                                          <th>Pemasukan</th>
                                          <th>Pengeluaran</th>
                                          <th>SISA</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>SALDO TAHUN LALU</td>
                                        <td></td>
                                        <td></td>
                                        <td style="background-color: green;text-align: center;">
                                        <?php
                                        if($saldo_tahun_lalu->saldo_tahun_lalu==""){
                                          echo 0;
                                        }else{
                                          echo $saldo_tahun_lalu->saldo_tahun_lalu;
                                        }
                                        ?>
                                      </td>
                                    </tr>
                                    <?php
                                    $no=1;
                                    $pemasukan=0;
                                    $pengeluaran=0;
                                    foreach($jurnal as $row):
                                    ?>
                                      <tr>
                                          <td style="text-align: center;"><?=$no;?></td>
                                          <td style="text-align: center;"><?=$row->tgl_transaksi;?></td>
                                          <td><?=$row->keterangan;?></td>
                                          <td style="text-align: center;"><?=$row->debit;?></td>
                                          <td style="text-align: center;"><?=$row->kredit;?></td>
                                          <td></td>
                                      </tr>
                                      <?php
                                      $pemasukan+=$row->debit;
                                      $pengeluaran+=$row->kredit;
                                      $no++;
                                      endforeach;
                                      ?>
                                      <tr style="background-color: green;">
                                          <td style="text-align: center;"><?=$no;?></td>
                                          <td></td>
                                          <td></td>
                                          <td style="text-align: center;"><?=$pemasukan;?></td>
                                          <td style="text-align: center;"><?=$pengeluaran;?></td>
                                          <td style="text-align: center;"><?=$pemasukan-$pengeluaran;?></td>
                                      </tr>
                                  </tbody>
                              </table>
