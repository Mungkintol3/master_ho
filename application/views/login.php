<!DOCTYPE html>
<html>
<head>
	<title>MASTER DATA HO</title>
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/login.css" media="screen">
	<link rel="stylesheet" type="text/css" href="">
	<script type="text/javascript" src="<?= base_url() ?>"></script>
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
		    <input type="password" name="password" id="password" placeholder="Masukan Password anda" data-validate="Password is Reuired">
		    <button type="submit" >LOGIN</button>
		</div>
		</form>
		<div class="alert">
			<?php if($this->session->flashdata("nouser")) { ?>
				<span style="color:red">user tidak di temukan</span>
			<?php } ?>
		</div>
	</div>
	<script type="text/javascript">
		function validasi(){
			if(document.getElementById('npk').value == ""){
				alert('npk masih kosong');
				return false ;
			}else if (document.getElementById('password').value == "") {
				alert('password masih kosong');
				return false ;
			}
		}
	</script>
</body>
</html>