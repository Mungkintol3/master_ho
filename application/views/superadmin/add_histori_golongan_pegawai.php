<?php include 'header.php'; ?>
	<section class="container">
		<div class="row">
		<h4>Update Golongan Kerja Pegawai</h4>
			<form method="post"  action="#" id="updategol">
				<label>NPK</label>
				<div class="form-group">
					<input type="text" readonly=""  name="npk" id="npk" class="form-control">
					<button  type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">cari npk</button>
				</div>
				<label>Nama</label>
				<div class="form-group">
					<input type="text" readonly=""  name="nama" id="nama" class="form-control">
				</div>
				<label>Golongan Sebelumnya</label>
				<div class="form-group">
					<input type="text" readonly="" name="gol_sebelumnya" id="gol_sebelumnya" class="form-control">
				</div>
				<label>Golongan Terbaru</label>
				<div class="form-group">
					<select name="gol_update" id="gol_update" class="form-control">
						<option value="">pilih golongan</option>
						<?php foreach($data as $r ) : ?>
							<option><?= $r->golongan_kerja ?></option>
						<?php endforeach ?>
					</select>
				</div>	
				<label>Tanggal</label>
				<div class="form-group">
					<input type="text"  name="tgl" id="tgl" class="form-control">
				</div>
				<button type="submit" id="submit" class="btn btn-info">posting</button>
			</form>
		</div>
	</section>
<!-- Modal data  -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cari Pegawai</h4>
                    </div>
                    <div class="modal-body">
                        <table id="dataTables2" width="100%" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NPK</th>
                                    <th>Nama</th>
                                    <th>Golongan Kerja</th>
                                    <th>Pilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tbody>
                                	<?php $no = 1 ; foreach($pegawai as $r) : ?>
                                		<tr>
                                			<td><?= $no++ ?></td>
                                			<td><?= $r->npk ?></td>
                                			<td><?= $r->nama ?></td>
                                			<td><?= $r->gol_kerja ?></td>
                                			<td><a class="btn btn-info btn-xs click"
                                			 data-npk="<?= $r->npk ?>" 
                                			 data-nama="<?= $r->nama ?>" 
                                			 data-gol="<?= $r->gol_kerja ?>" 
                                			 >pilih</a></td>
                                		</tr>
                                	<?php endforeach ?>
                                </tbody>
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
        <!-- end of modal pegawai -->
	<script type="text/javascript">
		$(function(){
			$("#updategol").on('submit',function(e){
				e.preventDefault();
				if(document.getElementById('npk').value == "" ){
					alert("npk masih kosong")
				}else if(document.getElementById('gol_update').value == "" ){
					alert("golongan kerja  baru kosong")
				}else if(document.getElementById('tgl').value == "" ){
					alert("tanggal masih kosong")
				}else {
					$.ajax({
						url : "<?= base_url('Golongan/input_histori') ?>" ,
						method : "POST" ,
						data : new FormData(this),
			            processData : false ,
			            contentType : false ,
			            cache  : false, 
						beforeSend : function(){
							$("#submit").attr("disabled",true);		
						},
						complete : function(){
							$("#submit").attr("disabled",false);		
						},
						success : function(e){
							alert(e)
						}
					})
				}
			})

			$('.click').on('click',function(e){
              document.getElementById("npk").value = $(this).attr('data-npk');
              document.getElementById("nama").value = $(this).attr('data-nama');
              document.getElementById("gol_sebelumnya").value = $(this).attr('data-gol');
              $('#myModal').modal('hide');
        	})
		})

	</script>
</body>
</html>