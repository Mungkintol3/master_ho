
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
                				<td><?= $karyawan->no_ktp ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">NPWP</td>
                				<td>:</td>
                				<td><?= $karyawan->no_npwp ?></td>
                			</tr>
                            <tr class="text-right">
                                <td class="text-left">Status Pajak</td>
                                <td>:</td>
                                <td>K/0</td>
                            </tr>
                			<tr class="text-right">
                				<td class="text-left">Kartu Keluarga</td>
                				<td>:</td>
                				<td><?= $karyawan->no_kk ?></td>
                			</tr>
                            <tr class="text-right">
                                <td class="text-left">Status Perkawinan</td>
                                <td>:</td>
                                <td>Single</td>
                            </tr>
                			<tr class="text-right">
                				<td class="text-left">Tempat,Tanggal Lahir</td>
                				<td>:</td>
                				<td><?=  $karyawan->tgl_lahir ?></td>
                			</tr>
                            <tr class="text-right">
                                <td class="text-left">Jenis Kelamin</td>
                                <td>:</td>
                                <td>Laki Laki</td>
                            </tr>
                            <tr class="text-right">
                                <td class="text-left">Umur</td>
                                <td>:</td>
                                <td>22 </td>
                            </tr>
                			<tr class="text-right">
                				<td class="text-left">Alamat KTP</td>
                				<td>:</td>
                				<td><?= $karyawan->alamat_ktp ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Alamat Sekarang</td>
                				<td>:</td>
                				<td><?= $karyawan->address ?></td>
                			</tr>
                			<tr class="text-right">
                				<td class="text-left">Nomor Telepon</td>
                				<td>:</td>
                				<td><?= $karyawan->no_telp ?></td>
                			</tr>
                            <tr class="text-right">
                                <td class="text-left">Email</td>
                                <td>:</td>
                                <td>murry.febrian@gmail.com</td>
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
                <table class="table table-hover">
                            <tr class="text-left">
                                <td class="text-left">Perusahaan</td>
                                <td>:</td>
                                <td>PT SIGAP GARDA PRATAMA</td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Tanggal Bergabung</td>
                                <td>:</td>
                                <td><?= $karyawan->join_date ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Department</td>
                                <td>:</td>
                                <td><?= $karyawan->departement ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Division</td>
                                <td>:</td>
                                <td><?= $karyawan->divisi ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Position</td>
                                <td>:</td>
                                <td><?= $karyawan->position ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Kelompok Jabatan</td>
                                <td>:</td>
                                <td><?= $karyawan->kel_jabatan ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Wilayah</td>
                                <td>:</td>
                                <td><?= $karyawan->wilayah ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Nomor BPJS Ketenagakerjaan</td>
                                <td>:</td>
                                <td><?= $karyawan->bpjs_tenagakerja ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Nomor BPJS Kesehatan</td>
                                <td>:</td>
                                <td><?= $karyawan->bpjs_kesehatan ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">No.DPLK/Asuransi</td>
                                <td>:</td>
                                <td><?= $karyawan->no_dplk ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Nama Bank / Nomor Rekening</td>
                                <td>:</td>
                                <td><?= $karyawan->nama_bank ?> / <?= $karyawan->no_rekening ?> </td>
                            </tr>

                        </table>
            </div>
            <div class="tab-pane" id="history">
                <p> I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
            </div>
        </div>
    </div>
  </div>

</div>