<div class="content">
<div class="col-md-12">
  <a href="<?= base_url('superadmin/Jabatan/form_add') ?>" class="btn btn-danger">Tambah Data </a>
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> DAFTAR Jabatan</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th class="text-center">NO</th>
                        <th>Kode Jabatan</th>
                      	<th >Nama Jabatan</th>
                  		<th>Keterangan</th>
                  		<th class="text-right">Action</th>
                       </thead>
                  			<tbody>
                          <?php foreach($jabatan as $result) :  ?>
                      			<tr>
                      				<td class="text-center">1</td>
                      				<td><?= $result->kode_jabatan ?></td>
                              <td><?= $result->nama_jabatan ?></td>
                              <td><?= $result->keterangan ?></td>
                      				<td class="td-actions text-right">
                                <a href="#" class="btn-danger btn-sm">
      					                    <i class="material-icons">edit</i>
                                </a>
                                <a onclick="return confirm('hapus ?')" href="<?= base_url('superadmin/Jabatan/delete/'. $result->id) ?>" class="btn-danger btn-sm">
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
