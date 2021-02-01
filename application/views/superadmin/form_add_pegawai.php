
 <div class="content" style="background-image: url('assets/img/sigap.png')">
        <div class="container-fluid">
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
		<h4>Tambah Data Pegawai</h4>
		<a href="<?= base_url('assets/upload/format/form_kar_upload.xlsx') ?>">download format upload</a>
			<form method="post" onsubmit="return validasi()" enctype="multipart/form-data" action="" id="uploadpegawai">
				<label>Posting File</label>
					<input type="file" onchange="return cekexe()" name="file" id="file" class="form-control">
				<button type="submit" name="submit" class="btn btn-info">review</button>
			</form>
		</div>

		<?php 
			if(isset($_POST['submit'])){ ?>
		<form action="<?= base_url('superadmin/TambahKaryawan/upload') ?>" method="post" >
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>NPK</th>
						<th>Wilayah</th>
						<th>Divisi</th>
					</tr>
				</thead>
				<tbody>
				<?php $no =1 ; foreach($sheet as $r ) :  ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $r['C'] ?></td>
						<td><?= $r['B'] ?></td>
						<td><?= $r['G']  ?></td>
						<td><?= $r['D']  ?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<div class="form-group">
				<button class="btn btn-info">posting data</button>
			</div>
		</form>	
		<?php	}
		?>
</div>
</div>

	<script type="text/javascript">
		function cekexe(){
			const file = document.getElementById('file');
			const path  = file.value ;
			const exe	= /(\.xlsx)$/i;
			if(!exe.exec(path)){
				alert("file salah");
				file.value = "";
				return ;
			}
		}

		function validasi(){
			const file = document.getElementById('file');
			if(file.value == "" || file.value == null){
				alert("file masih kosong");
				return false  ;
			}
		}
	</script>
