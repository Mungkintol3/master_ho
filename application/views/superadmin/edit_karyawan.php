
<div class="content">
<div class="container-fluid">
	<div class="card card-nav-tabs card-plain">
    <div class="card-header card-header-info">
        <div class="nav-tabs-navigation">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#biodata" data-toggle="tab">Biodata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#employee" data-toggle="tab">Informasi Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#elementary" data-toggle="tab">Pendidikan</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#sertifikat" data-toggle="tab">Sertifikat</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#fams" data-toggle="tab">Data Keluarga</a>
                    </li>
                    <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            History Karyawan
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" data-toggle="tab">
                            <a  class="dropdown-item" href="#historyGol" data-toggle="tab">History Golongan</a>
                            <a class="dropdown-item" href="#historyComp" data-toggle="tab">History Company</a>
                            <a class="dropdown-item" href="#historySert" data-toggle="tab">History Training</a>
                            <a class="dropdown-item" href="#historySp" data-toggle="tab">History Peringatan</a>
                          </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card-body ">
        <div class="tab-content text-center">
            <div class="tab-pane active" id="biodata">
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
                <button style="float: right;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#update_biodata<?= $karyawan->id_user?>">Update Biodata</button>

                
            </div>
            <div class="tab-pane" id="employee">
                <table class="table table-hover">
                            <tr class="text-left">
                                <td class="text-left">Perusahaan</td>
                                <td>:</td>
                                <td><?= $karyawan->company ?></td>
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
                                <td class="text-left">Kelompok Jabatan Awal</td>
                                <td>:</td>
                                <td><?= $karyawan->kel_jabatan ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Promosi Jabtan</td>
                                <td>:</td>
                                <td><?= $karyawan->promosi_jabatan ?></td>
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
                        <button style="float: right;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#update_informasi">Update Informasi Karyawan</button>
            </div>
            <div class="tab-pane" id="elementary">
                Education Join
                <table class="table">
                    <tr>
                        <th>NPK</th>
                        <th>Pendidikan</th>
                        <th>Sekolah / Universitas</th>
                        <th>Tahun Lulus</th>
                        <th>Opsi</th>
                    </tr>
                    <tbody>
                        <?php foreach($join_pendidikan as $p) { ?>
                            <tr>
                                <td><?= $p->npk ?></td>
                                <td><?= $p->education_join ?></td>
                                <td><?= $p->institusi ?></td>
                                <td><?= $p->thn_lulus ?></td>
                                <td>
                                    <a href="">hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <hr>
                Education Update
                <table class="table">
                    <tr>
                        <th>NPK</th>
                        <th>Pendidikan</th>
                        <th>Sekolah / Universitas</th>
                        <th>Tahun Lulus</th>
                        <th>Opsi</th>
                    </tr>
                    <tbody>
                        <?php foreach($pendidikan as $pendidikan) { ?>
                            <tr>
                                <td><?= $pendidikan->npk ?></td>
                                <td><?= $pendidikan->pendidikan ?></td>
                                <td><?= $pendidikan->institusi ?></td>
                                <td><?= $pendidikan->thn_lulus ?></td>
                                <td>
                                    <a href="">hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="sertifikat">
                <table class="table">
                    <tr>
                        <th>NPK</th>
                        <th>Jenis Training</th>
                        <th>Sertifikat</th>
                        <th>Opsi</th>
                    </tr>
                    <tbody>
                        <?php foreach($training as $t) { ?>
                            <tr>
                                <td><?= $t->npk ?></td>
                                <td><?= $t->jenis_training ?></td>
                                <td>
                                    <a href="javascript:openT<?=  $t->id ?>('<?= $t->file ?>')">
                                        klik here
                                    </a>
                                </td>
                                <td>
                                    <a href="#">hapus</a>
                                </td>
                            </tr>
                             <script type="text/javascript">
                                function openT<?= $t->id ?>(file) {
                                 window.open("<?= base_url('assets/upload/sertifikat/') ?>" + file, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=500,width=680,height=500"); 
                                }
                            </script>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="fams">
                <table class="table">
                    <tr>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>NO KK</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                    <tbody>
                        <?php foreach($keluarga as $keluarga) { ?>
                            <tr>
                                <td><?= $keluarga->nama ?></td>
                                <td><?= $keluarga->nik ?></td>
                                <td><?= $keluarga->no_kk ?></td>
                                <td><?= $keluarga->status ?></td>
                                <td>
                                <a href="<?= base_url('superadmin/Karyawan/delkel/' . $keluarga->id . "/" . $keluarga->id_user ) ?>" onclick="return confirm('hapus ?')">hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="historyGol">
                <table class="table">
                    <tr>
                        <th>NPK</th>
                        <th>Golongan Kerja</th>
                        <th>Tahun</th>
                        <th>Berkas</th>
                        <th>Opsi</th>
                    </tr>
                    <tbody>
                        <?php foreach($golongan as $golongan) { ?>
                            <tr>
                                <td><?= $golongan->npk ?></td>
                                <td><?= $golongan->gol_update ?></td>
                                <td><?= $golongan->tahun ?></td>
                                <td>
                                    <a href='javascript:open<?= $golongan->id ?>("<?= $golongan->berkas ?>")' >bukti</td>
                                <td>
                                    <a href="<?= base_url('superadmin/Karyawan/delgol/' . $golongan->id . "/" . $golongan->id_user . "/"  . $golongan->berkas) ?>" onclick="return confirm('hapus ?')">hapus</a>
                                </td>
                            </tr>

                            <script type="text/javascript">
                                function open<?= $golongan->id ?>(file) {
                                 window.open("<?= base_url('assets/upload/histori_golongan/') ?>" + file, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=500,width=680,height=500"); 
                                }
                            </script>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="historyComp">
                <table class="table">
                    <tr>
                        <th>NPK</th>
                        <th>Company</th>
                        <th>Tahun</th>
                        <th>Opsi</th>
                    </tr>
                    <tbody>
                        <?php foreach($company as $company) { ?>
                            <tr>
                                <td><?= $company->npk ?></td>
                                <td><?= $company->company ?></td>
                                <td><?= $company->tahun ?></td>
                                <td>
                                    <a href="">hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="historySert">
                <table class="table">
                    <tr>
                        <th>NPK</th>
                        <th>Jenis Training</th>
                        <th>Tahun</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                    <tbody>
                        <?php foreach($training as $training) { ?>
                            <tr>
                                <td><?= $training->npk ?></td>
                                <td><?= $training->jenis_training ?></td>
                                <td><?= $training->tahun ?></td>
                                <td><?= $training->keterangan ?></td>
                                <td>
                                    <a href="">hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="historySp">
                <table class="table">
                    <tr>
                        <th>NPK</th>
                        <th>Surat Peringatan</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Opsi</th>
                    </tr>
                    <tbody>
                        <?php foreach($sp as $sp) { ?>
                            <tr>
                                <td><?= $sp->npk ?></td>
                                <td><?= $sp->jenis_surat_peringatan ?></td>
                                <td><?= $sp->tahun ?></td>
                                <td><?= $sp->keterangan ?></td>
                                <td>
                                    <a href="">hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>

</div>
<!-- Modal Update Biodata Karyawan -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="update_biodata<?= $karyawan->id_user?>" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                       <h3 align="center">Update Biodata</h3>
                        <form method="post" id="#">
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <input type="text" name="no_ktp" id="no_ktp" class="form-control" placeholder=" Nomor Induk Kependudukan">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <input type="text" name="no_npwp" id="no_npwp" class="form-control" placeholder="  Nomor Pokok Wajib Pajak">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <input type="text" name="status_pajak" id="status_pajak" class="form-control" placeholder=" Status Pajak">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <input type="text" name="no_kk" id="no_kk" class="form-control" placeholder=" Nomor Kartu Keluarga">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <input type="text" name="status_kawin" id="status_kawin" class="form-control" placeholder=" Status Perkawinan">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <input type="text" name="alamat_ktp" id="alamat_ktp" class="form-control" placeholder=" Alamat KTP">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <input type="text" name="address" id="address" class="form-control" placeholder=" Alamat Sesuai Domisili">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <input type="email" name="email" id="email" class="form-control" placeholder=" Alamat Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <input type="tel" name="no_telp" id="no_telp" class="form-control" placeholder="  Nomor Handphone">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <input type="tel" name="kontak_darurat" id="kontak_darurat" class="form-control" placeholder="  Nomor Kontak Darurat">
                                    </div>
                                  </div>
                      <button type="submit" id="submit" class="btn btn-primary">Simpan Data</button>
                    </form>
                    </div>
                  </div>
                </div>
<!-- End of modal update biodata karyawan -->
<script type="text/javascript">
    
      $(document).ready(function(){
          $("#update_biodata<?=$karyawan->id_user?>").on('submit',function(e){
            var postData = new FormData(this);
            e.preventDefault();
            if(document.getElementById('no_ktp').value == "" ){
              alert("data karyawan masih kosong")
            }else if(document.getElementById('no_npwp').value == "" ){
              alert("departement masih kosong")
            }else if(document.getElementById('status_pajak').value == "" ){
              alert("divisi masih kosong")
            }else if(document.getElementById('no_kk').value == "" ){
              alert("posisi masih kosong")
            }else if(document.getElementById('status_kawin').value == "" ){
              alert("tanggal masih kosong")
            }else if(document.getElementById('alamat_ktp').value == "" ){
              alert("berkas masih kosong")
            }else if(document.getElementById('address').value == "" ){
              alert("tanggal masih kosong")
            }else if(document.getElementById('email').value == "" ){
              alert("tanggal masih kosong")
            }else if(document.getElementById('no_telp').value == "" ){
              alert("tanggal masih kosong")
            }else if(document.getElementById('kontak_darurat').value == "" ){
              alert("tanggal masih kosong")
            }else {
              $.ajax({
                url : "<?= base_url('superadmin/karyawan/UpdateBiodata') ?>" ,
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
                     window.location.href="<?= base_url('superadmin/karyawan/edit_karyawan') ?>"
                   }else {
                      alert("gagal")
                   }
                }
              })
            }
          })

    })

</script>
<!-- Modal Update Informasi Karyawan -->
             <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="update_informasi" aria-hidden="true">
                          <div class="modal-dialog modal-lg" >
                            <div class="modal-content">
                                <label align="center">UPDATE INFORMASI KARYAWAN</label>
                                <form method="post" id="#">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" name="" placeholder=" NOMOR BPJS KETENAGAKERJAAN">
                                            <input type="text" class="form-control" name="" placeholder=" NOMOR BPJS KESEHATAN">
                                            <input type="text" class="form-control" name="" placeholder=" NOMOR DPLK ATAU ASURANSI">
                                            <input type="text" class="form-control" name="" placeholder=" NAMA BANK & REKENING">
                                            <button type="submit" id="submit" class="btn btn-primary">Simpan Data</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                          </div>
                        </div>
<!-- End of modal informasi karyawan -->

