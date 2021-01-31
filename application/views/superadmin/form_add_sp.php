<?php include 'header.php'; ?>
	<section class="container">
		<div class="row">
		<?php if($this->session->flashdata("success"))  { ?>
			<div class="alert alert-info">
				<?= $this->session->flashdata("success") ?>
			</div>
		<?php }else if($this->session->flashdata("error"))  { ?>
			<div class="alert alert-danger">
				<?= $this->session->flashdata("error") ?>
			</div>
		<?php } ?>
		<h4>Input Surat Peringatan</h4>
			<form method="post"  action="#" id="addSP">
				<label>NPK</label>
				<div class="form-group">
					<input type="text" readonly=""  name="npk" id="npk" class="form-control">
					<button  type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">cari npk</button>
				</div>
				<label>Nama</label>
				<div class="form-group">
					<input type="text" readonly=""  name="nama" id="nama" class="form-control">
				</div>
				<label>Tipe Surat Peringatan</label>
				<div class="form-group">
					<input type="text"  name="tipe_sp" id="tipe_sp" class="form-control">
				</div>
				<label>Tanggal</label>
				<div class="form-group">
					<input type="text"  name="tgl" id="tgl" class="form-control">
				</div>
				<label>Keterangan</label>
				<div class="form-group">
					<textarea id="keterangan" class="form-control" name="keterangan"></textarea>
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
                                			<td><a class="btn btn-info btn-xs click"
                                			 data-npk="<?= $r->npk ?>" 
                                			 data-nama="<?= $r->nama ?>" 
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
			$("#addSP").on('submit',function(e){
				e.preventDefault();
				if(document.getElementById('npk').value == "" ){
					alert("npk masih kosong")
				}else if(document.getElementById('tipe_sp').value == "" ){
					alert("jenis surat Peringatan kosong")
				}else if(document.getElementById('tgl').value == "" ){
					alert("tanggal masih kosong")
				}else {
					$.ajax({
						url : "<?= base_url('Surat_peringatan/add') ?>" ,
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
              $('#myModal').modal('hide');
        	})
		})
	</script>
</body>
</html>