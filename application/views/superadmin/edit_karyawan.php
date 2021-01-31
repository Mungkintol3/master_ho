
<div class="content">
<div class="container-fluid">
	<div class="card card-nav-tabs card-plain">
    <div class="card-header card-header-info">
        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home" data-toggle="tab">Biodata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#updates" data-toggle="tab">Informasi Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#history" data-toggle="tab">Pendidikan</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#history" data-toggle="tab">Sertifikat</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#history" data-toggle="tab">Data Keluarga</a>
                    </li>
                </ul>
            </div>
        </div>
    </div><div class="card-body ">
        <div class="tab-content text-center">
            <div class="tab-pane active" id="home">
                <div class="row">
                	<div class="col-lg-4">
                		<img height="300" width="300" src="<?php echo base_url()?>assets/upload/berkas/Foto_Profil/Murry.jpeg">
                	</div>
                	<div class="col-lg-8">
                		<table class="table table-hover">
                			<tr class="text-right">
                				<td class="text-left">NPK</td>
                				<td>:</td>
                				<td><?= $karyawan->npk ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Nama</td>
                				<td>:</td>
                				<td><?= $karyawan->nama ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">NIK</td>
                				<td>:</td>
                				<td><?= $karyawan->nik ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">NPWP</td>
                				<td>:</td>
                				<td><?= $karyawan->npwp ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Kartu Keluarga</td>
                				<td>:</td>
                				<td><?= $karyawan->no_kk ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Tempat,Tanggal Lahir</td>
                				<td>:</td>
                				<td><?= $karyawan->tempat_lahir . "," . $karyawan->tgl_lahir ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Alamat KTP</td>
                				<td>:</td>
                				<td><?= $karyawan->alamat ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Alamat Sekarang</td>
                				<td>:</td>
                				<td><?= $karyawan->domisili ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Nomor Telepon</td>
                				<td>:</td>
                				<td><?= $karyawan->no_telpon ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Nomor Kontak Darurat</td>
                				<td>:</td>
                				<td><?= $karyawan->kontak_darurat ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Golongan Darah</td>
                				<td>:</td>
                				<td><?= $karyawan->gol_darah ?></td>
                			</tr>

                		</table>
                	</div>
                </div>
            </div>
            <div class="tab-pane" id="updates">
                <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
            </div>
            <div class="tab-pane" id="history">
                <p> I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
            </div>
        </div>
    </div>
  </div>

</div>