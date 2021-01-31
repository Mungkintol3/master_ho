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
		<h4>Tambah Data Jabatan</h4>
			<form method="post"  action="#" id="addjabatan">
				<label>Kode Jabatan</label>
				<div class="form-group">
					<input type="text"  name="kode_jabatan" id="kode_jabatan" class="form-control">
				</div>
				<label>Nama Jabatan</label>
				<div class="form-group">
					<input type="text"  name="nama_jabatan" id="nama_jabatan" class="form-control">
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
			$("#addjabatan").on('submit',function(e){
				e.preventDefault();
				if(document.getElementById('kode_jabatan').value == "" ){
					alert("kode jabatan kosong")
				}else if(document.getElementById('nama_jabatan').value == "" ){
					alert("nama jabatan kosong")
				}else {
					$.ajax({
						url : "<?= base_url('Jabatan/add') ?>" ,
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