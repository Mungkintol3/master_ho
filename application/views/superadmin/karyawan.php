<div class="content">
<div class="col-md-12">
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
					                 <!--Modal berkas anggota -->
                              <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <i class="material-icons" >person</i>
                              </button>
                              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content" >
                                   <div class="modal-header" >
                                     <h5 class="modal-title"><b>Kelengkapan Berkas Karyawan</b></h5>
                                   </div>
                                  </div>
                                </div>
                              </div>

					                <button type="button" rel="tooltip" class="btn btn-success" >
                            <a href="<?php echo base_url('superadmin/karyawan/Edit_karyawan/' . $result->id_user)?>">
					                    <i class="material-icons">view</i>
                            </a>
					                </button>
					                <button type="button" rel="tooltip" class="btn btn-danger">
					                    <i class="material-icons">close</i>
					                </button>
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
