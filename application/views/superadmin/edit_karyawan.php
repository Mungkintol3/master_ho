<div class="content">
    <div class="container-fluid">
        <!-- info error  -->
        <?php if ($this->session->flashdata('delInfo')) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Berhasil </strong><?= $this->session->flashdata('delInfo') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>


        <!-- end of info error  -->
        <hr>
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
                                        <a class="dropdown-item" href="#Kelengkapan_berkas" data-toggle="tab">Kelengkapan Berkas</a>
                                        <a class="dropdown-item" href="#fasilitas" data-toggle="tab">History Fasilitas</a>
                                        <a class="dropdown-item" href="#historyNilai" data-toggle="tab">History Nilai</a>
                                        <a class="dropdown-item" href="#historyDeptDiv" data-toggle="tab">History Departmen & Divisi</a>
                                        <a class="dropdown-item" href="#historyPoint" data-toggle="tab">History Point</a>
                                        <a class="dropdown-item" href="#historyGol" data-toggle="tab">History Golongan</a>
                                        <a class="dropdown-item" href="#historyComp" data-toggle="tab">History Company</a>
                                        <a class="dropdown-item" href="#historySp" data-toggle="tab">History Peringatan</a>
                                        <a class="dropdown-item" href="#historyHAV" data-toggle="tab">Human Assets Value</a>
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
                            <img height="300" width="300" src="<?php echo base_url('assets/upload/berkas/photo/'.$karyawan->photo)?>"/>
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
                                        <td><?= $karyawan->status_pajak ?></td>
                                    </tr>
                                    <tr class="text-right">
                                        <td class="text-left">Kartu Keluarga</td>
                                        <td>:</td>
                                        <td><?= $karyawan->no_kk ?></td>
                                    </tr>
                                    <tr class="text-right">
                                        <td class="text-left">Status Perkawinan</td>
                                        <td>:</td>
                                        <td><?= $karyawan->status_kawin ?></td>
                                    </tr>
                                    <tr class="text-right">
                                        <td class="text-left">Tempat,Tanggal Lahir</td>
                                        <td>:</td>
                                        <td><?= $karyawan->tempat_lahir . "," .  $karyawan->tgl_lahir ?></td>
                                    </tr>
                                    <tr class="text-right">
                                        <td class="text-left">Jenis Kelamin</td>
                                        <td>:</td>
                                        <td><?= $karyawan->gender ?></td>
                                    </tr>
                                    <tr class="text-right">
                                        <td class="text-left">Umur</td>
                                        <td>:</td>
                                        <td><?php 
                                                $today = new DateTime("today");
                                                if ($karyawan->tgl_lahir > $today)
                                                {
                                                echo $today->diff($karyawan->tgl_lahir);
                                                }
                                        ?></td>
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
                                        <td><?= $karyawan->email ?></td>
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
                        <button style="float: right;" data-id="<?php echo $karyawan->id ?>" type="button" class="btn btn-primary" data-toggle="modal" data-target="#update_biodata">Update Biodata</button>
                    </div>

                    <div class="tab-pane" id="employee">
                        <table class="table table-hover">
                            <tr class="text-left">
                                <td class="text-left">Perusahaan</td>
                                <td>:</td>
                                <td align="right"><?= $karyawan->company ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Tanggal Bergabung</td>
                                <td>:</td>
                                <td align="right"><?= $karyawan->join_date ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Department</td>
                                <td>:</td>
                                <td align="right"><?= $karyawan->departement ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Division</td>
                                <td>:</td>
                                <td align="right"><?= $karyawan->divisi ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Position</td>
                                <td>:</td>
                                <td align="right"><?= $karyawan->position ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Kelompok Jabatan Awal</td>
                                <td>:</td>
                                <td align="right"><?= $karyawan->kel_jabatan ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Promosi Jabtan</td>
                                <td>:</td>
                                <td align="right"><?= $karyawan->promosi_jabatan ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Wilayah</td>
                                <td>:</td>
                                <td align="right"><?= $karyawan->wilayah ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Nomor BPJS Ketenagakerjaan</td>
                                <td>:</td>
                                <td align="right"><?= $karyawan->bpjs_tenagakerja ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Nomor BPJS Kesehatan</td>
                                <td>:</td>
                                <td align="right"><?= $karyawan->bpjs_kesehatan ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">No.DPLK/Asuransi</td>
                                <td>:</td>
                                <td align="right"><?= $karyawan->no_dplk ?></td>
                            </tr>
                            <tr class="text-left">
                                <td class="text-left">Nama Bank / Nomor Rekening</td>
                                <td>:</td>
                                <td align="right"><?= $karyawan->nama_bank ?> / <?= $karyawan->no_rekening ?> </td>
                            </tr>
                        </table>
                        <button style="float: right;" data-info="<?= $karyawan->id ?>" type="button" class="btn btn-primary" data-toggle="modal" data-target="#update_informasi">Update Informasi Karyawan</button>
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
                                <?php foreach ($join_pendidikan as $p) { ?>
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
                                <?php foreach ($pendidikan as $pendidikan) { ?>
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
                    <div class="tab-pane" id="historyDeptDiv">
                        <table class="table">
                            <tr>
                                <th>Department</th>
                                <th>Divisi</th>
                                <th>Posisi</th>
                                <th>Tahun</th>
                                <th>Opsi</th>
                            </tr>
                            <tbody>
                                <?php foreach ($dept_divi as $dept_divi) : ?>
                                    <tr>
                                        <td><?= $dept_divi->departement ?></td>
                                        <td><?= $dept_divi->divisi ?></td>
                                        <td><?= $dept_divi->position ?></td>
                                        <td><?= $dept_divi->tahun ?></td>
                                        <td>
                                            <a class="btn btn-info btn-sm" onclick="return confirm('Yakin Hapus ?')" href="<?= base_url('superadmin/Karyawan/delDepatertement/' . $dept_divi->id . "/" . $dept_divi->id_user) ?>">
                                                hapus
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane" id="historyPoint">
                        <table class="table">
                            <tr>
                                <th>Poin</th>
                                <th>Tanggal</th>
                                <th>Tahun</th>
                                <th>Opsi</th>
                            </tr>
                            <tbody>
                                <?php foreach ($point as $point) : ?>
                                    <tr>
                                        <td><?= $point->poin ?></td>
                                        <td><?= $point->tgl ?></td>
                                        <td><?= $point->tahun ?></td>
                                        <td>
                                            <a class="btn btn-info btn-sm" onclick="return confirm('Yakin Hapus ?')" href="<?= base_url('superadmin/Karyawan/delPoint/' . $point->id . "/" . $point->id_user) ?>">
                                                hapus
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane" id="sertifikat">
                        <table class="table">
                            <tr>
                                <th>NPK</th>
                                <th>Jenis Training</th>
                                <th>Status</th>
                                <th>Tahun</th>
                                <th>Berkas</th>
                                <th>Opsi</th>
                            </tr>
                            <tbody>
                                <?php foreach ($training as $training) { ?>
                                    <tr>
                                        <td><?= $training->npk ?></td>
                                        <td><?= $training->jenis_training ?></td>
                                        <td><?= $training->keterangan ?></td>
                                        <td><?= $training->tahun ?></td>
                                        <td>
                                            <?php
                                            if (empty($training->file)) { ?>
                                                <button class="btn btn-sm btn-danger">Tidak Ada</button>
                                            <?php } else { ?>
                                                <a href="javascript:open0('<?= $training->file ?>')" class="btn btn-sm btn-success">Ada</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a onclick="return confirm('Yakin hapus ?')" class="btn btn-sm btn-info" href="<?= base_url('superadmin/Karyawan/delTraining/' . $training->id . "/" . $training->id_user . "/" . $training->file) ?>">
                                                hapus
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="historySert">

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
                                <?php foreach ($keluarga as $keluarga) { ?>
                                    <tr>
                                        <td><?= $keluarga->nama ?></td>
                                        <td><?= $keluarga->nik ?></td>
                                        <td><?= $keluarga->no_kk ?></td>
                                        <td><?= $keluarga->status ?></td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="<?= base_url('superadmin/Karyawan/delkel/' . $keluarga->id . "/" . $keluarga->id_user) ?>" onclick="return confirm('hapus ?')">hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                     <div class="tab-pane" id="Kelengkapan_berkas">
                        <table class="table">
                        <?php foreach ($berkas as $berkas) : ?>
                            <tr>
                            <td>KTP</td>
                            <td>:</td>
                            <td>   <?php
                                 if (empty($berkas->ktp)) { ?>
                                <button class="btn btn-sm btn-danger">Tidak Ada</button>
                                <?php } else { ?>
                                <a href="javascript:open5('<?= $berkas->ktp ?>')" class="btn btn-sm btn-success">Ada</a>
                                <?php } ?></td>
                            </tr>
                            <tr>
                            <td>NPWP</td>
                            <td>:</td>
                            <td> <?php
                                 if (empty($berkas->npwp)) { ?>
                                <button class="btn btn-sm btn-danger">Tidak Ada</button>
                                <?php } else { ?>
                                <a href="javascript:open6('<?= $berkas->npwp ?>')" class="btn btn-sm btn-success">Ada</a>
                                <?php } ?></td>
                            </tr>
                            <tr>
                            <td>Buku Rekening</td>
                            <td>:</td>
                            <td> <?php
                                 if (empty($berkas->buku_rekening)) { ?>
                                <button class="btn btn-sm btn-danger">Tidak Ada</button>
                                <?php } else { ?>
                                <a href="javascript:open0('<?= $berkas->buku_rekening ?>')" class="btn btn-sm btn-success">Ada</a>
                                <?php } ?></td>
                            </tr>
                            <tr>
                            <td>Surat Lamaran</td>
                            <td>:</td>
                            <td> <?php
                                 if (empty($berkas->surat_lamaran)) { ?>
                                <button class="btn btn-sm btn-danger">Tidak Ada</button>
                                <?php } else { ?>
                                <a href="javascript:open9('<?= $berkas->surat_lamaran ?>')" class="btn btn-sm btn-success">Ada</a>
                                <?php } ?></td>
                            </tr>
                            <tr>
                            <td>Daftar Riwayat Hidup</td>
                            <td>:</td>
                            <td> <?php
                                 if (empty($berkas->daftar_riwayat_hidup)) { ?>
                                <button class="btn btn-sm btn-danger">Tidak Ada</button>
                                <?php } else { ?>
                                <a href="javascript:open1('<?= $berkas->daftar_riwayat_hidup ?>')" class="btn btn-sm btn-success">Ada</a>
                                <?php } ?></td>
                            </tr>
                            <tr>
                            <td>Ijazah Sekolah</td>
                            <td>:</td>
                            <td> <?php
                                 if (empty($berkas->ijazah_sekolah)) { ?>
                                <button class="btn btn-sm btn-danger">Tidak Ada</button>
                                <?php } else { ?>
                                <a href="javascript:open3('<?= $berkas->ijazah_sekolah ?>')" class="btn btn-sm btn-success">Ada</a>
                                <?php } ?></td>
                            </tr>
                            <tr>
                            <td>Kartu Keluarga</td>
                            <td>:</td>
                            <td> <?php
                                 if (empty($berkas->kartu_keluarga)) { ?>
                                <button class="btn btn-sm btn-danger">Tidak Ada</button>
                                <?php } else { ?>
                                <a href="javascript:open4('<?= $berkas->kartu_keluarga?>')" class="btn btn-sm btn-success">Ada</a>
                                <?php } ?></td>
                            </tr>
                            <tr>
                            <td>Surat Kesehatan</td>
                            <td>:</td>
                            <td> <?php
                                 if (empty($berkas->surat_kesehatan)) { ?>
                                <button class="btn btn-sm btn-danger">Tidak Ada</button>
                                <?php } else { ?>
                                <a href="javascript:open8('<?= $berkas->surat_kesehatan ?>')" class="btn btn-sm btn-success">Ada</a>
                                <?php } ?></td>
                            </tr>
                            <tr>
                            <td>Surat Domisili</td>
                            <td>:</td>
                            <td> <?php
                                 if (empty($berkas->surat_domisili)) { ?>
                                <button class="btn btn-sm btn-danger">Tidak Ada</button>
                                <?php } else { ?>
                                <a href="javascript:open2('<?= $berkas->surat_domisili ?>')" class="btn btn-sm btn-success">Ada</a>
                                <?php } ?></td>
                            </tr>
                            <tr>
                            <td>SKCK</td>
                            <td>:</td>
                            <td> <?php
                                 if (empty($berkas->skck)) { ?>
                                <button class="btn btn-sm btn-danger">Tidak Ada</button>
                                <?php } else { ?>
                                <a href="javascript:open10('<?= $berkas->skck ?>')" class="btn btn-sm btn-success">Ada</a>
                                <?php } ?></td>
                            </tr>
                            
                            <?php endforeach ?>
                        </table>
                        <button style="float: right;" data-info="<?= $karyawan->id ?>" type="button" class="btn btn-primary" data-toggle="modal" data-target="#update_berkas">Update Berkas Karyawan</button>
                    </div>

                    <div class="tab-pane" id="fasilitas">
                        <table class="table">
                            <tr>
                                <th>Fasilitas Karyawan</th>
                                <th>Tahun</th>
                            </tr>
                            <tbody>
                                <?php foreach ($fasilitas as $fasilitas) : ?>
                                    <tr>
                                        <td><?= $fasilitas->fasilitas ?></td>
                                        <td><?= $fasilitas->tanggal ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane" id="historyNilai">
                        <table class="table">
                            <tr>
                                <th>Penilaian Karyawan</th>
                                <th>Tahun</th>
                                <th>Opsi</th>
                            </tr>
                            <tbody>
                                <?php foreach ($nilai as $nilai) : ?>
                                    <tr>
                                        <td><?= $nilai->nilai_pk ?></td>
                                        <td><?= $nilai->tahun ?></td>
                                        <td>
                                            <a onclick="return confirm('Yakin hapus ?')" class="btn btn-sm btn-info" href="<?= base_url('superadmin/Karyawan/delHistoriNilai/' . $nilai->id . "/" . $nilai->id_user) ?>">
                                                hapus
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
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
                                <?php foreach ($golongan as $golongan) { ?>
                                    <tr>
                                        <td><?= $golongan->npk ?></td>
                                        <td><?= $golongan->gol_update ?></td>
                                        <td><?= $golongan->tahun ?></td>
                                        <!-- <td>
                                    <a href='javascript:open<?= $golongan->id ?>("<?= $golongan->berkas ?>")' >bukti</td> -->
                                        <td>
                                            <?php
                                            if (empty($golongan->berkas)) { ?>
                                                <button class="btn btn-sm btn-danger">Tidak Ada</button>
                                            <?php } else { ?>
                                                <a href="javascript:open3('<?= $golongan->berkas ?>')" class="btn btn-sm btn-success">Ada</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('superadmin/Karyawan/delgol/' . $golongan->id . "/" . $golongan->id_user . "/"  . $golongan->berkas) ?>" onclick="return confirm('hapus ?')">hapus</a>
                                        </td>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane" id="historyHAV">
                        <table class="table">
                            <tr>
                                <th>Human Assets Value</th>
                                <th>Kekuatan</th>
                                <th>Kelemahan</th>
                                <th>Keterangan</th>
                                <th>Tahun</th>
                                <th>Opsi</th>

                            </tr>
                            <tbody>
                                <?php foreach ($human_value_assets as $human) { ?>
                                    <tr>
                                        <td><?= $human->asset_value ?></td>
                                        <td><?= $human->kekuatan ?></td>
                                        <td><?= $human->kelemahan ?></td>
                                        <td><?= $human->keterangan ?></td>
                                        <td><?= $human->tahun ?></td>
                                        <td>
                                            <a onclick="return confirm('Yakin hapus ?')" class="btn btn-sm btn-info" href="<?= base_url('superadmin/Karyawan/delHumanAssetValue/' . $human->id . "/" . $human->id_user) ?>">
                                                hapus
                                            </a>
                                        </td>
                                    </tr>
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
                                <?php foreach ($company as $company) { ?>
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

                    <div class="tab-pane" id="historySp">
                        <table class="table">
                            <tr>
                                <th>NPK</th>
                                <th>Surat Peringatan</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Berkas</th>
                                <th>Opsi</th>
                            </tr>
                            <tbody>
                                <?php foreach ($sp as $sp) { ?>
                                    <tr>
                                        <td><?= $sp->npk ?></td>
                                        <td><?= $sp->jenis_surat_peringatan ?></td>
                                        <td><?= $sp->tahun ?></td>
                                        <td><?= $sp->keterangan ?></td>
                                        <td>
                                            <?php
                                            if (empty($sp->file)) { ?>
                                                <button class="btn btn-sm btn-danger">Tidak Ada</button>
                                            <?php } else { ?>
                                                <a href="javascript:open4('<?= $sp->file ?>')" class="btn btn-sm btn-success">Ada</a>
                                            <?php } ?>

                                        </td>
                                        <td>
                                            <a onclick="return confirm('Yakin hapus ?')" class="btn btn-sm btn-info" href="<?= base_url('superadmin/Karyawan/delPeringatan/' . $sp->id . "/" . $sp->id_user . "/" . $sp->file) ?>">
                                                hapus
                                            </a>
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
    <!-- modal detail edit biodata karyawan -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="update_biodata" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Perbarui Biodata <?= $karyawan->nama ?></h4>
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                </div>
                <div class="modal-body" id="editbiodataKaryawan">

                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
        </form>
    </div>
    <!-- end of modal  -->

    <!-- modal detail update berkas karyawan -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="update_berkas" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Perbarui Berkas Karyawan <?= $karyawan->nama ?></h4>
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                </div>
                <div class="modal-body" id="updateberkaskaryawan">

                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
        </form>
    </div>
    <!-- end of modal  -->

    <!-- modal detail edit informasi karyawan -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="update_informasi" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Perbarui Informasi <?= $karyawan->nama ?></h4>
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                </div>
                <div class="modal-body" id="editinformasiKaryawan">

                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
        </form>
    </div>
    <!-- end of modal  -->



    <script type="text/javascript">
        //load modal update biodata karyawan
        $("#update_biodata").on("show.bs.modal", function(event) {
            var div = $(event.relatedTarget);
            var modal = $(this);
            var id = div.data('id');
            //kirim data ke controller supplier
            $.ajax({
                url: "<?php echo base_url("superadmin/Karyawan/modaleditBiodata/") ?>",
                data: "id=" + id,
                method: "POST",
                success: function(response) {
                    $("#editbiodataKaryawan").html(response);
                }
            })
        })


        $("#update_berkas").on("show.bs.modal", function(event) {
            var div = $(event.relatedTarget);
            var modal = $(this);
            var id = div.data('berkas');
            //kirim data ke controller supplier
            $.ajax({
                url: "<?php echo base_url("superadmin/Upload_berkas/Update/") ?>",
                data: "id=" + id,
                method: "POST",
                success: function(response) {
                    $("#updateberkaskaryawan").html(response);
                }
            })
        })


        //load modal update informasi karyawan
        $("#update_informasi").on("show.bs.modal", function(event) {
            var div = $(event.relatedTarget);
            var modal = $(this);
            var id = div.data('info');
            //kirim data ke controller supplier
            $.ajax({
                url: "<?php echo base_url("superadmin/Karyawan/modaleditInformasi/") ?>",
                data: "id=" + id,
                method: "POST",
                success: function(response) {
                    $("#editinformasiKaryawan").html(response);
                }
            })
        })
    </script>
    <?php
    $folder = array('sertifikat', 'demosi_jabatan', 'mutasi', 'promosi_jabatan', 'surat_peringatan');
    for ($i = 0; $i < count($folder); $i++) { ?>
        <script type="text/javascript">
            function open<?= $i ?>(file) {
                window.open("<?= base_url("assets/upload/" . $folder[$i] . "/") ?>" + file, "width=650", "height=650", "menubar=yes", "resizeable=yes");
            }
        </script>
    <?php } ?>

     <?php
    $folder = array('buku rekening', 'daftar riwayat hidup', 'domisili', 'ijazah', 'kartu keluarga','ktp','npwp','photo','surat kesehatan','surat lamaran','skck');
    for ($i = 0; $i < count($folder); $i++) { ?>
        <script type="text/javascript">
            function open<?= $i ?>(file) {
                window.open("<?= base_url("assets/upload/berkas/" . $folder[$i] . "/") ?>" + file, "width=650", "height=650", "menubar=yes", "resizeable=yes");
            }
        </script>
    <?php } ?>