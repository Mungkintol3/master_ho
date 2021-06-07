<!DOCTYPE html>
<html>
<head>
	<title>MASTER DATA HO</title>
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/login.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/sweetalert2/sweetalert2.min.css" media="screen">
	<script src="<?= base_url('assets/sweetalert2/') ?>sweetalert2.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="brand-logo" ><img class="brand-logo" src="<?php echo base_url()?>assets/img/sigap.png"></div>
		<div class="brand-title">MASTER DATA </div><br>
		<form class="akun" onsubmit="return validasi()" method="post" action="<?= base_url('Login/Create')?>">
		<div class="input">
			<!-- <label>NPK</label> -->
			<input type="text" name="npk" id="npk" placeholder="Masukan NPK anda" data-validate="NPK is Required"><br>
			<!--  -->
			<input type="text" name="nama" id="nama" placeholder="Masukan Nama  Anda" data-validate="Password is required"><br>
			 <!-- <label>PASSWORD</label> -->
		    <input type="email" name="email" id="email" placeholder="Masukan Alamat Email Anda" data-validate="Email is Reuired"><br>
		    <!-- Passsword -->
		    <button type="submit">Daftar</button>
		</div>
		</form>
		<div class="akun">
			<label><a href="<?php echo base_url('Login')?>">Sudah Punya Akun?</a></label>
		</div>
		<div class="copyright">
			<a href="https://wa.me/6287886511096?text=Murray%20are%20you%20there" target="_blank">&copy;<b>Murry Febriansyah Putra</b></a>
		</div>
	</div>

	
</body>
</html>

<?php if($this->session->flashdata('message')){?>
	<script type="text/javascript">
			Swal.fire({
			title: 'Error!',
			text: 'Akun Sudah Terdaftar',
			icon: 'error',
			confirmButtonText: 'Cool'
			})
	</script>

<?php }?>

