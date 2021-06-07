<html>
<head>
<style>
body {font-family: sans-serif;
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
<div style="text-align: center;"><p style="font-size: 25pt;"><u>Biodata Karyawan</u></p></div>
<!-- <table width="100%" style="font-family: serif;" cellpadding="10"><tr>
<td width="45%" style="border: 0.1mm solid #888888; "><span style="font-size: 7pt; color: #555555; font-family: sans;">Data Form:</span><br /><br />345 Anotherstreet<br />Little Village<br />Their City<br />CB22 6SO</td>
<td width="10%">&nbsp;</td>
<td width="45%" style="border: 0.1mm solid #888888;"><span style="font-size: 7pt; color: #555555; font-family: sans;">SHIP TO:</span><br /><br />345 Anotherstreet<br />Little Village<br />Their City<br />CB22 6SO</td>
</tr></table> -->
<br />
          		<table width="100%" style="font-family: serif;" cellpadding="3">
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
                			<tr>
                				<td class="text-left">Nomor Induk Kependudukan</td>
                				<td class="text-center">:</td>
                				<td>    </td>
                				<td class="text-right"><?= $info->no_ktp ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">NPWP</td>
                				<td>:</td>
                				<td>    </td>
                				<td><?= $info->no_npwp ?></td>
                			</tr>
                            <tr class="text-right">
                                <td class="text-left">Status Pajak</td>
                                <td>:</td>
                                <td>     </td>
                                <td><?= $info->status_pajak ?></td>
                            </tr>
                			<tr class="text-right">
                				<td class="text-left">Kartu Keluarga</td>
                				<td>:</td>
                				<td>     </td>
                				<td><?= $info->no_kk ?></td>
                			</tr>
                            <tr class="text-right">
                                <td class="text-left">Status Perkawinan</td>
                                <td>:</td>
                                <td></td>
                                <td><?= $info->status_kawin ?></td>
                            </tr>
                			<tr class="text-right">
                				<td class="text-left">Tempat,Tanggal Lahir</td>
                				<td>:</td>
                				<td>     </td>
                				<td><?= $info->tempat_lahir . "," . $info->tgl_lahir ?></td>
                			</tr>
                            <tr class="text-right">
                                <td class="text-left">Jenis Kelamin</td>
                                <td>:</td>
                                <td>     </td>
                                <td><?= $info->gender ?></td>
                            </tr>
                            <tr class="text-right">
                                <td class="text-left">Umur</td>
                                <td>:</td>
                                <td>     </td>
                                <td><?= $info->age ?></td>
                            </tr>
                			<tr class="text-right">
                				<td class="text-left">Alamat KTP</td>
                				<td>:</td>
                				<td>      </td>
                				<td><?= $info->alamat_ktp ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Alamat Sekarang</td>
                				<td>:</td>
                				<td>     </td>
                				<td><?= $info->address ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Nomor Telepon</td>
                				<td>:</td>
                				<td>     </td>
                				<td><?= $info->no_telp ?></td>
                			</tr>
                            <tr class="text-right">
                                <td class="text-left">Email</td>
                                <td>:</td>
                            	<td>    </td>
                                <td><?= $info->email ?></td>
                            </tr>
                			<tr class="text-right">
                				<td class="text-left">Nomor Kontak Darurat</td>
                				<td>:</td>
                				<td>       </td>
                				<td><?= $info->kontak_darurat ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Golongan Darah</td>
                				<td>:</td>
                				<td>     </td>
                				<td><?= $info->gol_darah ?></td>
                			</tr>
                		</table><br>

                		<table width="80%" style="font-family: serif;" cellpadding="3">
                			<tr>
                				<thead>
                					<td><b>INFORMASI PEKERJAAN</b></td>
                				</thead>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Perusahaan</td>
                				<td>:</td>
                                <td>     </td>
                				<td>SIGAP PRIMA ASTREA</td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Tanggal Bergabung</td>
                				<td>:</td>
                                <td>     </td>
                  				<td><?= $info->join_date ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Departmen</td>
                				<td>:</td>
                                <td>     </td>
                				<td><?= $info->departement ?></td>
                			</tr>	
                			<tr class="text-right">
                				<td class="text-left">Divisi</td>
                				<td>:</td>
                                <td>     </td>
                				<td><?= $info->divisi ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Golongan Darah</td>
                				<td>:</td>
                                <td>     </td>
                				<td><?= $info->gol_darah ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Posisi</td>
                				<td>:</td>
                                <td>     </td>
                				<td><?= $info->position ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Kelompok Jabatan</td>
                				<td>:</td>
                                <td>     </td>
                				<td><?= $info->kel_jabatan ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Promosi Jabatan</td>
                				<td>:</td>
                                <td>     </td>
                				<td><?= $info->promosi_jabatan ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Wilayah</td>
                				<td>:</td>
                                <td>     </td>
                				<td><?= $info->wilayah ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Nomor BPJS Ketenagakerjaan</td>
                				<td>:</td>
                                <td>     </td>
                				<td><?= $info->bpjs_tenagakerja ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Nomor BPJS Kesehatan</td>
                				<td>:</td>
                                <td>     </td>
                				<td><?= $info->bpjs_kesehatan ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Nomor DPLK/Asuransi</td>
                				<td>:</td>
                                <td>     </td>
                				<td><?= $info->no_dplk ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Nama Bank / Nomor Rekening</td>
                				<td>:</td>
                                <td>     </td>
                				<td><?= $info->nama_bank .' / ' . $info->no_rekening ?></td>
                			</tr>
                		</table>
                            <br>
                        <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse;" 
                        cellpadding="3">
                            <thead>
                                <tr>
                                    <td>Nama</td>
                                    <td>NIK</td>
                                    <td>No KK</td>
                                    <td>Status</td>
                                    <td>BPJS Kesehatan</td>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- ITEMS HERE -->
                                <?php foreach($keluarga as $keluarga):?>
                                <tr>
                                    <td align="center"><?= $keluarga->nama?></td>
                                    <td align="center"><?= $keluarga->nik?></td>
                                    <td align="center"><?= $keluarga->no_kk?></td>
                                    <td align="center"><?= $keluarga->status?></td>
                                    <td align="center"><?= $keluarga->bpjs_kesehatan?></td>
                                </tr>
                            <?php endforeach?>
                            </tbody>
                        </table><br>
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
                                    <td>Perusahaan</td>
                                    <td>Tanggal bergabung</td>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- ITEMS HERE -->
								
                                <?php foreach ($company as $company) : ?>
                                <tr>
                                    <td align="center"><?= $company->company?></td>
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

						<table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="3">
						<thead>
						<tr>
						<td width="50%"><b>History Jabatan</b></td>
						<td width="50%"><b>Tahun</b></td>
						</tr>
						</thead>
						<tbody>
						<!-- ITEMS HERE -->
					   <?php foreach ($jabatan as $jab ) :?>
                        <tr>
						  <td align="center"><?= $jab->latest_promosi?></td>
                          <td align="center"><?= $jab->tahun?></td>
                        </tr>
                        <?php endforeach?>
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

						<table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="3">
						<thead>
						<tr>
						<td width="50%"><b>Jenis Pelatihan</b></td>
						<td width="25%"><b>Tahun</b></td>
                        <td width="25%"><b>Sertifikat</b></td>
						</tr>
						</thead>
						<tbody>
						<!-- ITEMS HERE -->
						<?php foreach($training as $training ) :?>
                            <tr>
                                <td align="center"><?= $training->jenis_training?></td>
                                <td align="center"><?= $training->tahun?></td>
                                <td align="center"><?= $training->keterangan?></td>
                            </tr>
                        <?php endforeach?>
						</tbody>
						</table>
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
</html>