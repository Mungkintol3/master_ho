<!DOCTYPE html>
<html>
<head>
	<title>exports</title>
</head>
<body>
<table border="1">
	<thead>
	<tr>	
		<th rowspan="2">No</th>
		<th rowspan="2">NPK</th>
		<th rowspan="2">Nama</th>
		<th rowspan="2">Divisi</th>
		<th rowspan="2">Departement</th>
		<th rowspan="2">Posisi</th>
		<th rowspan="2">Promosi Jabatan</th>
		<th rowspan="2">Mutasi Jabatan</th>
		<th rowspan="2">Wilayah</th>
		<th rowspan="2">Tanggal Lahir</th>
		<th rowspan="2">Employment Status</th>
		<th rowspan="2">Company</th>
		<th rowspan="2">Join Date</th>
		<th rowspan="2">Lama Bekerja</th>
		<th rowspan="2">Age</th>
		<th colspan="2">Education</th>
		<th rowspan="2">Kelompok Jabatan</th>
		<th rowspan="2">Golongan Kerja</th>
		<th colspan="2">Status</th>
		<th rowspan="2">Golongan</th>
		<th rowspan="2">Latest Promotion</th>
		<th colspan="2">Nilai PK</th>
		<th colspan="2">POIN</th>
		<th colspan="2">Surat Peringatan</th>
	</tr>
	<tr>
		<th>Join</th>
		<th>Update</th>
		<th>Meet</th>
		<th>Below</th>
		<th>Tahun</th>
		<th>Nilai</th>
		<th>Tahun</th>
		<th>Poin</th>
		<th>Tahun</th>
		<th>Jumlah</th>
	</tr>
	<tbody>
		<?php $no = 1 ; foreach($pegawai as $data) : ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $data->npk ?></td>
				<td><?= $data->nama ?></td>
				<td><?= $data->divisi ?></td>
				<td><?= $data->departement ?></td>
				<td><?= $data->posisi ?></td>
				<td><?= $data->posisi ?></td>
				<td><?= $data->posisi ?></td>
				<td><?= $data->wilayah ?></td>
				<td><?= $data->tgl_lahir ?></td>
				<td><?= $data->status_karyawan ?></td>
				<td><?= $data->company ?></td>
				<td><?= $data->join_date ?></td>
				<td><?= $data->join_date ?></td>
				<td><?= $data->usia ?></td>
				<?php $pend = $this->m_admin->cari(array("npk" => $data->npk),"histori_pendidikan")->result();
					foreach($pend as $pend) {
						echo "<td>". $pend->join ."</td>";
						echo "<td>". $pend->update ."</td>";
					}
				 ?>	
				 <td><?= $data->kel_jabatan ?></td>
				 <td><?= $data->gol_kerja ?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</thead>
</table>
</body>
</html>