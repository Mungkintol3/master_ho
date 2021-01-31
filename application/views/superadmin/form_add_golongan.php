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
		<h4>Tambah Data Golongan</h4>
			<form method="post"  action="#" id="addgolongan">
				<label>Kode Golongan</label>
				<div class="form-group">
					<input type="text"  name="kode_golongan" id="kode_golongan" class="form-control">
				</div>
				<label>Nama Golongan</label>
				<div class="form-group">
					<input type="text"  name="golongan_kerja" id="nama_golongan" class="form-control">
				</div>
				<label>Keterangan</label>
				<div class="form-group">
					<textarea id="keterangan" class="form-control" name="keterangan"></textarea>
				</div>
				<button type="submit" id="submit" class="btn btn-info">posting</button>
			</form>
		</div>
	</section>

	<script type="text/javascript">
		$(function(){
			$("#addgolongan").on('submit',function(e){
				e.preventDefault();
				if(document.getElementById('kode_golongan').value == "" ){
					alert("kode golongan kosong")
				}else if(document.getElementById('nama_golongan').value == "" ){
					alert("nama golongan kosong")
				}else {
					$.ajax({
						url : "<?= base_url('Golongan/add') ?>" ,
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
	</script>
</body>
</html>