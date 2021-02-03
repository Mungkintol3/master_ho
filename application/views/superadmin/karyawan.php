<div class="content">
<div class="col-md-12">
  <a href="<?= base_url('superadmin/TambahKaryawan') ?>" class="btn btn-danger">Tambah Data </a>
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> DAFTAR KARYAWAN</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th class="text-center">NO</th>
                        <th>NPK</th>
                      	<th >NAMA</th>
                  		<th>Department</th>
                  		<th>Gol</th>
                  		<th class="text-right">Action</th>
                       </thead>
                  			<tbody>
                          <?php foreach($karyawan as $result) :  ?>
                      			<tr>
                      				<td class="text-center">1</td>
                      				<td><?= $result->npk ?></td>
                              <td><?= $result->nama ?></td>
                              <td><?= $result->departement ?></td>
                              <td><?= $result->gol_kerja ?></td>
                      				<td class="td-actions text-right">
                                <a href="<?= base_url('superadmin/Karyawan/Edit_karyawan/' . $result->id_user) ?>" class="btn-danger btn-sm">
      					                    <i class="material-icons">edit</i>
                                </a>
                                <a href="#" class="btn-danger btn-sm">
                                    <i class="material-icons">close</i>
                                </a>
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
