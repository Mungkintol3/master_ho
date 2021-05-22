<html>
<head>
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
	border: 5px solid #000000;
	position:absolute;
	left:200mm;
	top: 70mm; 
	width: 100mm;
	margin-right:500px;
	overflow: auto;
}
	@media{
		
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
<br />
<a href="#">Cari Karyawan</a>

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
                				<td class="text-center">:</td>
                				<td>    </td>
                				<td class="text-right"><?= $info->npk ?></td>
                			</tr>
                			<tr>
                				<td class="text-left">Nama Lengkap</td>
                				<td class="text-center">:</td>
                				<td>    </td>
                				<td class="text-right"><?= $info->nama ?> </td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Tempat,Tanggal Lahir</td>
                				<td>:</td>
                				<td>     </td>
                				<td><?= $info->tempat_lahir . "," . date('d F Y', strtotime($info->tgl_lahir))?></td>
                			</tr>
							<tr class="text-right">
								<td class="text-left">Job Title</td>
								<td>:</td>
								<td>	</td>
								<td><?= $info->kel_jabatan?></td>
							</tr>
							<tr>
                				<td class="text-left">Join Sigap</td>
                				<td class="text-center">:</td>
                				<td>    </td>
                				<td class="text-right"><?= date('d F Y', strtotime($info->join_date))?></td>
                			</tr>
							<?php foreach($jabatan as $jabatan):?>
                                <tr>
                                    <td >Latest Promotion</td>
                                    <td >:</td>
                                    <td >	</td>
                                    <td ><?= date('d F Y', strtotime($jabatan->tanggal))?></td>
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
</body>
<div name="myFooter	" style="text-align: center; font-style: italic; font-size: 10pt;">&copy;Murry Febriansyah Putra</div>

<div>
				<form id="updatejabatan" enctype="multipart/form-data" method="post" action="#" class="form-horizontal">
                    <div class="form-group">
                      <input type="hidden" name="id" id="id">
                      <input type="hidden" name="id_user" id="id_user">
                      <input readonly="" type="text" name="nama" id="nama" placeholder="Enter Nama" class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly="" type="text" name="npk" id="npk" placeholder="Enter NPK" class="form-control">
                    </div>

                    <div class="form-group">
                      <input type="text" readonly="" name="promosi_old" id="jabatan_old" placeholder="Jabatan Sekarang" class="form-control">
                    </div>
                     <div class="form-group">
                      <input type="text"  name="golongan" id="golongan" placeholder="Input Golongan Kerja" class="form-control">
                    </div>
                    <div class="form-group">
                      <input  type="text" id="tanggal" name="tanggal"  placeholder="Enter Tahun" class="form-control">
                    </div>
                    <button type="submit" id="submit" class="btn btn-info">Simpan Perubahan</button>
                  </form>
</div>
</html>