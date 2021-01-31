<?php include 'header.php'; ?>
	<section class="container">
		<div class="row">
		<h4>Tambah Penilaian Pegawai</h4>
			<form method="post"  action="#" id="updatenilai">
				<label>NPK</label>
				<div class="form-group">
					<input type="text"  readonly=""   name="npk" id="npk" class="form-control">
					<button  type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">cari npk</button>
				</div>
				<label>Nama</label>
				<div class="form-group">
					<input type="text" readonly=""  name="nama" id="nama" class="form-control">
				</div>
				<label>Nilai Pegawai</label>
				<div class="form-group">
					<input type="text"  name="nilai_pk" id="nilai_pk" class="form-control">
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
			$("#updatenilai").on('submit',function(e){
				e.preventDefault();
				if(document.getElementById('npk').value == "" ){
					alert("npk masih kosong")
				}else if(document.getElementById('nilai_pk').value == "" ){
					alert("nilai masih kosong")
				}else if(document.getElementById('tgl').value == "" ){
					alert("tanggal masih kosong")
				}else {
					$.ajax({
						url : "<?= base_url('Penilaian_pegawai/input_histori') ?>" ,
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
		})
		$('.click').on('click',function(e){
              document.getElementById("npk").value = $(this).attr('data-npk');
              document.getElementById("nama").value = $(this).attr('data-nama');
              $('#myModal').modal('hide');
        	})
	</script>
</body>
</html>