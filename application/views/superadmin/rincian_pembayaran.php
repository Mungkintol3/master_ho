<div class="content">
<div class="col-md-12">

            <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> Rincian Pembayaran Peminjaman Karyawan </h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th class="text-center">NO</th>
                        <th>Tanggal Bayar</th>
                        <th>Nama</th>
                        <th>NPK</th>
                        <th>Pembayaran Bulanan</th>
                        <th>Bunga</th>
                        <th>Pokok</th>
                        <th>Jumlah Bayar</th>
                       </thead>
                        <tbody>
                          <?php $total = 0 ; $no = 1 ;  foreach($pinjaman as $result) :  ?>
                            <tr>
                              <td class="text-center"><?= $no++ ?></td>
                              <td><?= $result->tanggal ?></td>
                              <td><?= $result->nama ?></td>
                              <td><?= $result->npk ?></td>
                              <td>Ke - <?= $result->pembayaran_ke ?>  </td>
                              <td>Rp.<?= number_format($result->bunga) ?>  </td>
                              <td>Rp.<?= number_format($result->pokok) ?>  </td>
                              <td>Rp.<?= number_format($result->jumlah_bayar) ?>  </td>
                            </tr>
                          <?php $total+= $result->pokok  ; endforeach  ?>                                         
                        </tbody>
                    </table>
                </div>
              </div>
          </div>
          <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> Sisa Pembayaran  </h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th class="text-center">NO</th>
                        <th>Tanggal Pinjam</th>
                        <th>Nama</th>
                        <th>NPK</th>
                        <th>Jumlah Pinjaman</th>
                        <th>Sisa Tenor</th>
                        <th>Sisa Pembayaran</th>
                       </thead>
                        <tbody>
                          <?php  $no = 1 ;  foreach($data_pinjam as $result) :  ?>
                            <tr>
                              <td class="text-center"><?= $no++ ?></td>
                              <td><?= $result->tanggal ?></td>
                              <td><?= $result->nama ?></td>
                              <td><?= $result->npk ?></td>
                              <td>Rp. <?= number_format($result->total_pinjam ) ?></td>
                              <td><?= $result->tenor -  $sisa_tenor ?> x </td>
                              <td>
                                <?php 
                                  $sisa_pinjam = $result->total_pinjam - $total ;
                                  echo "Rp." . number_format($sisa_pinjam) ;
                                  ?>
                              </td>
                            </tr>
                          <?php endforeach  ?>                                         
                        </tbody>
                    </table>
                </div>
              </div>
          </div>
      </div>
  </div>
