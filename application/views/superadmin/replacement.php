<html>
<head>
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/')?>sigap.png"> -->
  <link rel="icon" type="favicon" href="<?= base_url('assets/img/')?>sigap.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Master Data HO
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
  <!-- chartis -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/font-google.css" />
  <link rel="stylesheet" href="<?= base_url() ?>/assets/font-awesome/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url()?>assets/css/material-dashboard.css" rel="stylesheet" />
   <!--  <script src="<?php echo base_url()?>assets/js/core/jquery.min.js"></script> -->
  <script src="<?php echo base_url()?>assets/js/jquery-3-1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?= base_url('assets/sweetalert2/')?>sweetalert2.min.css">
  <script src="<?= base_url('assets/sweetalert2/')?>sweetalert2.min.js"></script>


</head>
<style>
body {font-family: tahoma;
	font-size: 10pt;
}
p {	margin: 0pt; }
table.items {
	border: 0.1mm solid #000000;
}
td { vertical-align: top; }
.items td {
	border-left: 0.1mm solid #000000;
	border-right: 0.1mm solid #000000;
}
table thead td { background-color: #EEEEEE;
	text-align: center;
	border: 0.1mm solid #000000;
	font-variant: small-caps;
}
.items td.blanktotal {
	background-color: #EEEEEE;
	border: 0.1mm solid #000000;
	background-color: #FFFFFF;
	border: 0mm none #000000;
	border-top: 0.1mm solid #000000;
	border-right: 0.1mm solid #000000;
}
.items td.totals {
	text-align: right;
	border: 0.1mm solid #000000;
}
.items td.cost {
	text-align: "." center;
}
.Foto_profil{
	position:absolute;
	margin-top:-100px;
	padding-left:20px;
	right:1px;
	top: 70mm; 
	width: 100mm;
	margin-right:10px;
	overflow: auto;
}

</style>
</head>
<body>
<!--mpdf
<htmlpageheader name="myheader">
<table width="100%"><tr>
<td width="50%" style="color:#0000BB; "><span style="font-weight: bold; font-size: 14pt;">SIGAP PRIMA ASTREA.</span><br />Jl. Gaya Motor II Nomor 1<br />Jakarta Utara<br /><br />
<td width="50%" style="text-align: right;"><img src="assets/img/sigap-logo-1.png"><br /><span style="font-weight: bold; font-size: 12pt;"></span></td>
</tr></table>
</htmlpageheader>
<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>
<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />
mpdf-->
<div style="text-align: center;"><p style="font-size: 25pt;"><u>Replacement Karyawan</u></p></div>
<!-- <table width="100%" style="font-family: serif;" cellpadding="10"><tr>
<td width="45%" style="border: 0.1mm solid #888888; "><span style="font-size: 7pt; color: #555555; font-family: sans;">Data Form:</span><br /><br />345 Anotherstreet<br />Little Village<br />Their City<br />CB22 6SO</td>
<td width="10%">&nbsp;</td>
<td width="45%" style="border: 0.1mm solid #888888;"><span style="font-size: 7pt; color: #555555; font-family: sans;">SHIP TO:</span><br /><br />345 Anotherstreet<br />Little Village<br />Their City<br />CB22 6SO</td>
</tr></table> -->
<br/>
					 <div class="form-group">
                      <button type="button " data-toggle="modal" data-target="#selectkaryawan" class="btn btn-success">Cari Karyawan <i class="fa fa-search"></i> </button>
                    </div>

				<div class="Foto_profil">
					 <img height="150" width="150" style  src="<?= base_url("assets/upload/berkas/photo/".$info->photo) ?>">
				 </div>
          		<table width="58%" style="font-family: serif;" cellpadding="3">
                			<tr>
                				<thead>
                					<td><b>INFORMASI KARYAWAN</b></td>
                				</thead>
                			</tr>
                			<tr>
                				<td class="text-left">NPK</td>
                				<td>:</td>
                				<td><?= $info->npk ?></td>
                			</tr>
                			<tr>
                				<td class="text-left">Nama Lengkap</td>
                				<td>:</td>
                				<td><?= $info->nama ?> </td>
                			</tr>
                			<tr >
                				<td class="text-left">Tempat,Tanggal Lahir</td>
                				<td>:</td>

                				<td><?= $info->tempat_lahir . "," . date('d F Y', strtotime($info->tgl_lahir))?></td>
                			</tr>
							<tr >
								<td class="text-left">Job Title</td>
								<td>:</td>
							
								<td><?= $info->kel_jabatan?></td>
							</tr>
							<tr>
                				<td class="text-left">Join Sigap</td>
                				<td>:</td>
                   				<td><?= date('d F Y', strtotime($info->join_date))?></td>
                			</tr>
							<?php foreach($jabatan as $jabatan):?>
                                <tr>
                                    <td class="text-left" >Latest Promotion</td>
                                    <td>:</td>
                                   
                                    <td><?= date('d F Y', strtotime($jabatan->tanggal))?></td>
                                </tr>
                            <?php endforeach?>
                		</table><br>
                            <br>
                		<table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="3">
						<thead>
						<tr>
						<td width="25%"><b>Pendidikan</b></td>
						<td width="25%"><b>Nama Sekolah</b></td>
						<td width="25%"><b>Jurusan</b></td>
						<td width="25%"><b>Tahun Lulus</b></td>
						</tr>
						</thead>
						<tbody>
						<!-- ITEMS HERE -->
                        <?php foreach($pendidikan as $pd) : ?>
    						<tr>
        						<td align="center"><?= $pd->pendidikan ?></td>
        						<td align="center"><?= $pd->institusi?></td>
        						<td align="center"><?= $pd->jurusan?></td>
        						<td align="center"><?= $pd->thn_lulus?></td>
    						</tr>
                        <?php endforeach ?>
						</tbody>
						</table>
						<br>
                        <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="3" >
                            <thead>
                                <tr>
                                    <td width="50%"><b>Perusahaan</b></td>
                                    <td width="50%"><b>Tanggal bergabung</b></td>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- ITEMS HERE -->
								
                                <?php foreach ($company as $company) : ?>
                                <tr>
                                    <td align="center"><?= $company->company?></td>
									<?= $currentDate = date('Y-m-d')
									?>	
                                    <td align="center"><?=date('d F Y', strtotime($company->join_date))?></td>
                                </tr>
								
                            <?php endforeach?>
                            </tbody>
                        </table>
                        <br>
						<table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="3">
						<thead>
						<tr>
						<td width="50%"><b>Penilaian Karyawan</b></td>
						<td width="50%"><b>Tahun</b></td>
						</tr>
						</thead>
						<tbody>
						<!-- ITEMS HERE -->
						<?php foreach($nilai as $nilai) :?>
                            <tr>
                                <td align="center"><?=$nilai->nilai_pk?></td>
                                <td align="center"><?=$nilai->tahun?></td>
                            </tr>
						<?php endforeach?>
                        </tbody>
						</table>
						<br>

                        <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="3">
                            <thead>
                            <tr>
                            <td width="50%"><B>History Golongan</B></td>
                            <td width="50%"><B>History Tahun</B></td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($golongan as $gol):?>
                                <tr>
                                <td align="center"><?= $gol->gol_update?></td>
                                <td align="center"><?= $gol->tahun?></td>
                                </tr>
                            <?php endforeach?>
                            </tbody>
                        </table>
                        <br>
						<br>

						<table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="3">
						<thead>
						<tr>
						<td width="20%"><b>Assets Value</b></td>
						<td width="20%"><b>Kekuatan</b></td>
						<td width="20%"><b>Kelemahan</b></td>
						<td width="20%"><b>Keterangan</b></td>
						<td width="20%"><b>Tahun</b></td>
						</tr>
						</thead>
						<tbody>
						<!-- ITEMS HERE -->
						<?php foreach($human_value_assets as $human) {?>
                        <tr>
                            <td align="center"><?= $human->asset_value?></td>
                            <td align="left"><?= $human->kekuatan?></td>
                            <td align="left"><?= $human->kelemahan?></td>
                            <td align="left"><?= $human->keterangan?></td>
                            <td align="center"><?= $human->tahun?></td>
                        </tr>
                        <?php } ?> 
						</tbody>
						</table>
                	</div>
                </div>
            </div>


<br>
<div>
					<table width="58%" style="font-family: serif;" cellpadding="3">
                		 <form action="<?= base_url('superadmin/karyawan/Cetak')?>" method="post" enctype="multipart/form-data">
							<tr>
                				<thead>
                					<td><b>REPLACEMENT PERSON</b></td>
                				</thead>
                			</tr>
                			<tr>
								<td>Nama Lengkap</td>
								<td>:</td>
                				 <input type="hidden" name="id" id="id">
                     			 <input type="hidden" name="id_user" id="id_user">
                				<td><input readonly="" type="text" name="nama" id="nama" placeholder="Enter Nama" class="form-control"></td>
                			</tr>
                			<tr>
                				<td class="text-left">NPK</td>
                				<td>:</td>
                				<td><input readonly="" type="text" name="npk" id="npk" placeholder="Enter NPK" class="form-control"></td>
                			</tr>
                			<tr >
                				<td class="text-left">Position</td>
                				<td>:</td>
                				<td><input type="text" readonly="" name="position" id="position" placeholder="Posisi Sekarang" class="form-control"></td>
                			</tr>
							<tr >
								<td class="text-left">Grade</td>
								<td>:</td>
								<td><input type="text" readonly="" name="grade" id="grade" placeholder="Gol Sekarang" class="form-control"></td>
							</tr>
							<tr>
                				<td class="text-left">Age</td>
                				<td>:</td>
                   				<td><input type="text" readonly="" name="age" id="age" placeholder="Umur" class="form-control"></td>
                			</tr>
							<tr>
							<td class="text-left">Length Of Service</td>
							<td>:</td>
							<td><input type="text" readonly="" name="promosi_old" id="jabatan_old" placeholder="Jabatan Sekarang" class="form-control"></td>
							</tr>
							<tr>
							<td>
							 <button type="submit" id="submit" class="btn btn-info">Simpan Perubahan</button>
							</td>
							</tr>
						</form>
                		</table>
</div>
</html>
</body>
	<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="selectkaryawan" class="modal fade">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
				Data Karyawan
					<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
				</div>
				<div class="modal-body" id="hstatus">
					<table class="table" id="table_id">
					<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>NPK</th>
					</tr>
					</thead>
					<tbody>
						<?php $no = 1 ; foreach($replacement as $f) : ?>
						<tr>
						<td><?= $no++ ?></td>
						<td>
							<a class="btn btn-success btn-sm click"
							data-id="<?= $f->id ?>"
							data-id_user="<?= $f->id_user ?>" 
							data-npk="<?= $f->npk ?>" 
							data-nama="<?= $f->nama ?>"
							data-position="<?= $f->kel_jabatan?>"
							data-grade="<?= $f->gol_kerja ?>"
							data-age="<?= $f->age?>"
							>
								<?= $f->nama ?>
							</a>
						</td>
						<td><?= $f->npk ?></td>
						</tr>
						<?php endforeach ?>
					</tbody>
					</table>
					</div>
				</div>
			</div>
		</form>
		</div>
		<div name="myFooter	" style="text-align: center; font-style: italic; font-size: 10pt;">&copy;Murry Febriansyah Putra</div>

  <script type="text/javascript">
     function cekexe(){
        const file = document.getElementById('file');
        const path  = file.value ;
        const exe = /(\.pdf)$/i;
        if(!exe.exec(path)){
          alert("file harus berbentuk pdf");
          file.value = "";
          return ;
        }
      }

      $(function(){
        
          $("#replacement").on('submit',function(e){
            var postData = new FormData(this);
            e.preventDefault();
            if(document.getElementById('npk').value == "" ){
              alert("data karyawan masih kosong")
            }else if(document.getElementById('new_jabatan').value == "" ){
              alert("jabatan baru masih kosong")
            }else if(document.getElementById('range').value == "" ){
              alert("range golongan masih kosong")
            }else if(document.getElementById('golongan').value == "" ){
              alert("golongan kerja masih kosong")
            }else if(document.getElementById('status').value == "" ){
              alert("status masih kosong")
            }else if(document.getElementById('tanggal').value == "" ){
              alert("tanggal masih kosong")
            }else if(document.getElementById('file').value == "" ){
              alert("berkas pendukung masih kosong")
            }else {
              $.ajax({
                url : "<?= base_url('superadmin/karyawan/Cetak') ?>" ,
                method : "POST" ,
                data : postData,
                processData: false,
                contentType: false,
                cache  : false ,
                beforeSend : function(){
                  $("#submit").attr("disabled",true);   
                },
                complete : function(){
                  $("#submit").attr("disabled",false);    
                },
                success : function(e){
                   //alert(e);
                   if(e = "sukses"){
                     alert(e);
                     window.location.href="<?= base_url('superadmin/Karyawan/Cetak') ?>"
                   }else {
                      alert("gagal")
                   }
                }
              })
            }
          })

    })

    $('.click').on('click',function(e){
	  document.getElementById("id").value        = $(this).attr('data-id');
      document.getElementById("id_user").value   = $(this).attr('data-id_user');
      document.getElementById("npk").value       = $(this).attr('data-npk');
      document.getElementById("nama").value      = $(this).attr('data-nama');
	  document.getElementById("position").value  = $(this).attr('data-position');
      document.getElementById("grade").value  	 = $(this).attr('data-grade');
	  document.getElementById("age").value		 = $(this).attr('data-age');
      $('#selectkaryawan').modal('hide');
  })

  </script>