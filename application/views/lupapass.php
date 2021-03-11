<!DOCTYPE html>
<html>
<head>
	<title>MASTER DATA HO</title>
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/login.css" media="screen">
</head>
<body>
	<div class="container">
		<div class="brand-logo" ><img class="brand-logo" src="<?php echo base_url()?>assets/img/sigap.png"></div>
		<div class="brand-title">MASTER DATA </div><br>
		<form method="post" onsubmit="return validasi()" action="<?= base_url('Login/Ceklogin')?>">
		<div class="input">
			<!-- <label>NPK</label> -->
			<input type="text" name="npk" id="npk" placeholder="Masukan NPK anda" data-validate="NPK is Required"><br>
			 <!-- <label>PASSWORD</label> -->
		    <input type="email" name="email" id="email" placeholder="Masukan Alamat Email Anda" data-validate="Email is Reuired">
		    <button type="submit" >let's go</button>
		</div>
		</form>

		<div class="copyright">
			<a href="https://wa.me/6287886511096?text=Murray%20are%20you%20there" target="_blank">&copy;<b>Murry Febriansyah Putra</b></a>
		</div>
	</div>
	
</body>
</html>