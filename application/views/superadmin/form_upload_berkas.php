<div class="content">
  <div class="col-md-12">
    <div class="card card-plain">
      <div class="card-header card-header-info">
        <h4 class="card-title mt-0"> Upload Berkas Karyawan</h4>
        <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
      </div>
      <div class="card-body">
        <?php if ($this->session->flashdata('failed')) { ?>
          <div class="alert alert-danger">
            <?= $this->session->flashdata('failed') ?>
          </div>
        <?php  } else if ($this->session->flashdata('upload ok')) { ?>
          <div class="alert alert-success">
            <?= $this->session->flashdata('upload ok') ?>
          </div>
        <?php  } else if ($this->session->flashdata('warning')) { ?>
          <div class="alert alert-warning">
            <?= $this->session->flashdata('warning') ?>
          </div>
        <?php  } ?>

        <div class="form-group">
          <button type="button " data-toggle="modal" data-target="#selectkaryawan" class="btn btn-success">Cari Karyawan <i class="fa fa-search"></i> </button>
        </div>
        <!--  -->
        <form onsubmit="return beforeSubmit()" id="uploadBerkas" class="form-horizontal" name="uploadBerkas" method="post" action="<?= base_url('superadmin/Upload_berkas/uploadTrial') ?>" enctype="multipart/form-data">
          <div class="form-group">
            <input type="hidden" name="id" id="id">
            <input type="hidden" name="id_user" id="id_user">
            <input readonly="" type="text" id="nama" name="nama" placeholder="Enter Nama" class="form-control">
          </div>

          <div class="form-group">
            <input readonly="" type="text" id="npk" name="npk" placeholder="Enter NPK" class="form-control">
          </div>

          <div class="form-group form-file-upload form-file-multiple">
            <input type="file" name="ktp" id="ktp" class="inputFileHidden">
            <div class="input-group">
              <input type="text" name="namaKTP" autocomplete="off" class="form-control form-file-upload inputFileVisible" id="namaKTP" placeholder="Kartu Tanda Penduduk">
              <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-round btn-primary">
                  <i class="material-icons">attach_file</i>
                </button>
              </span>
            </div>
          </div>
          <div class="form-group form-file-upload form-file-multiple">
            <input type="file" name="kartu_keluarga" id="kartu_keluarga" class="inputFileHidden">
            <div class="input-group">
              <input type="text" autocomplete="off" class="form-control form-file-upload inputFileVisible" name="idKK" id="idKK" placeholder="Kartu Keluarga">
              <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-round btn-primary">
                  <i class="material-icons">attach_file</i>
                </button>
              </span>
            </div>
          </div>
          <div class="form-group form-file-upload form-file-multiple">
            <input type="file" name="buku_rekening" id="buku_rekening" class="inputFileHidden">
            <div class="input-group">
              <input type="text" autocomplete="off" class="form-control form-file-upload inputFileVisible" name="idrekening" id="idrekening" placeholder="Buku Rekening">
              <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-round btn-primary">
                  <i class="material-icons">attach_file</i>
                </button>
              </span>
            </div>
          </div>
          <div class="form-group form-file-upload form-file-multiple">
            <input type="file" name="surat_lamaran" id="surat_lamaran" class="inputFileHidden">
            <div class="input-group">
              <input type="text" autocomplete="off" class="form-control form-file-upload inputFileVisible" name="idLamaran" id="idLamaran" placeholder="Surat Lamaran">
              <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-round btn-primary">
                  <i class="material-icons">attach_file</i>
                </button>
              </span>
            </div>
          </div>
          <div class="form-group form-file-upload form-file-multiple">
            <input type="file" name="riwayat_hidup" id="riwayat_hidup" class="inputFileHidden">
            <div class="input-group">
              <input type="text" autocomplete="off" class="form-control form-file-upload inputFileVisible" name="idRiwayat" id="idRiwayat" placeholder="Daftar Riwayat Hidup">
              <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-round btn-primary">
                  <i class="material-icons">attach_file</i>
                </button>
              </span>
            </div>
          </div>
          <div class="form-group form-file-upload form-file-multiple">
            <input type="file" name="ket_domisili" id="ket_domisili" class="inputFileHidden">
            <div class="input-group">
              <input type="text" autocomplete="off" class="form-control form-file-upload inputFileVisible" name="idDomisili" id="idDomisili" placeholder="Surat Keterangan Domisili">
              <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-round btn-primary">
                  <i class="material-icons">attach_file</i>
                </button>
              </span>
            </div>
          </div>
          <div class="form-group form-file-upload form-file-multiple">
            <input type="file" name="npwp" id="npwp" class="inputFileHidden">
            <div class="input-group">
              <input type="text" autocomplete="off" class="form-control form-file-upload inputFileVisible" name="idNPWP" id="idNPWP" placeholder="Nomor Pokok Wajib pajak">
              <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-round btn-primary">
                  <i class="material-icons">attach_file</i>
                </button>
              </span>
            </div>
          </div>
          <div class="form-group form-file-upload form-file-multiple">
            <input type="file" name="skck" id="skck" class="inputFileHidden">
            <div class="input-group">
              <input type="text" autocomplete="off" class="form-control form-file-upload inputFileVisible" name="idSKCK" id="idSKCK" placeholder="Surat Keterangan Catatan Kepolisian">
              <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-round btn-primary">
                  <i class="material-icons">attach_file</i>
                </button>
              </span>
            </div>
          </div>
          <div class="form-group form-file-upload form-file-multiple">
            <input type="file" name="ket_kesehatan" id="ket_kesehatan" class="inputFileHidden">
            <div class="input-group">
              <input type="text" autocomplete="off" class="form-control form-file-upload inputFileVisible" name="idKesehatan" id="idKesehatan" placeholder="Surat Keterangan Kesehatan">
              <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-round btn-primary">
                  <i class="material-icons">attach_file</i>
                </button>
              </span>
            </div>
          </div>
          <div class="form-group form-file-upload form-file-multiple">
            <input type="file" name="ijazah_sekolah" id="ijazah_sekolah" class="inputFileHidden">
            <div class="input-group">
              <input type="text" autocomplete="off" class="form-control form-file-upload inputFileVisible" name="idIjazah" id="idIjazah" placeholder="Ijazah Sekolah">
              <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-round btn-primary">
                  <i class="material-icons">attach_file</i>
                </button>
              </span>
            </div>
          </div>
          <div class="form-group form-file-upload form-file-multiple">
            <input type="file" name="photo" id="photo" class="inputFileHidden">
            <div class="input-group">
              <input type="text" autocomplete="off" id="idPhoto" name="idPhoto" class="form-control form-file-upload inputFileVisible" placeholder="Foto Karyawan">
              <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-round btn-primary">
                  <i class="material-icons">attach_file</i>
                </button>
              </span>
            </div>
          </div>
          <button type="submit" class="btn btn-info">Upload Berkas</button>
        </form>


        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="selectkaryawan" class="modal fade">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                Data Karyawan
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
              </div>
              <div class="modal-body" id="hstatus">
                <table class="table">
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NPK</th>
                  </tr>
                  <tbody>
                    <?php $no = 1;
                    foreach ($karyawan as $f) : ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td>
                          <a class="btn btn-success btn-sm click" data-id="<?= $f->id ?>" data-id_user="<?= $f->id_user ?>" data-npk="<?= $f->npk ?>" data-nama="<?= $f->nama ?>">
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

        <script type="text/javascript">
          document.getElementById('ktp').addEventListener('change', function() {
            var file = this.files[0].name;
            var path = document.getElementById('ktp').value;
            var exe = /(\.pdf)$/i;
            var minSize = 2000000;
            if (!exe.exec(path)) {
              alert("file harus berbentuk pdf");
              document.getElementById('ktp').value = "";
              document.getElementById('namaKTP').value = "";
              return;
            } else if (this.files[0].size > minSize) {
              alert('maksimum file 2 MB ! ');
              document.getElementById('ktp').value = "";
              document.getElementById('namaKTP').value = "";
              return;
            }
          })

          document.getElementById('kartu_keluarga').addEventListener('change', function() {
            var file = this.files[0].name;
            var path = document.getElementById('kartu_keluarga').value;
            var exe = /(\.pdf)$/i;
            var minSize = 2000000;
            if (!exe.exec(path)) {
              alert("file harus berbentuk pdf");
              document.getElementById('kartu_keluarga').value = "";
              document.getElementById('idKK').value = "";
              return;
            } else if (this.files[0].size > minSize) {
              alert('maksimum file 2 MB ! ');
              document.getElementById('kartu_keluarga').value = "";
              document.getElementById('idKK').value = "";
              return;
            }
          })

          document.getElementById('buku_rekening').addEventListener('change', function() {
            var file = this.files[0].name;
            var path = document.getElementById('buku_rekening').value;
            var exe = /(\.pdf)$/i;
            var minSize = 2000000;
            if (!exe.exec(path)) {
              alert("file harus berbentuk pdf");
              document.getElementById('buku_rekening').value = "";
              document.getElementById('idRekening').value = "";
              return;
            } else if (this.files[0].size > minSize) {
              alert('maksimum file 2 MB ! ');
              document.getElementById('buku_rekening').value = "";
              document.getElementById('idRekening').value = "";
              return;
            }
          })

          document.getElementById('surat_lamaran').addEventListener('change', function() {
            var file = this.files[0].name;
            var path = document.getElementById('surat_lamaran').value;
            var exe = /(\.pdf)$/i;
            var minSize = 2000000;
            if (!exe.exec(path)) {
              alert("file harus berbentuk pdf");
              document.getElementById('surat_lamaran').value = "";
              document.getElementById('idLamaran').value = "";
              return;
            } else if (this.files[0].size > minSize) {
              alert('maksimum file 2 MB ! ');
              document.getElementById('surat_lamaran').value = "";
              document.getElementById('idLamaran').value = "";
              return;
            }
          })


          document.getElementById('riwayat_hidup').addEventListener('change', function() {
            var file = this.files[0].name;
            var path = document.getElementById('riwayat_hidup').value;
            var exe = /(\.pdf)$/i;
            var minSize = 2000000;
            if (!exe.exec(path)) {
              alert("file harus berbentuk pdf");
              document.getElementById('riwayat_hidup').value = "";
              document.getElementById('idRiwayat').value = "";
              return;
            } else if (this.files[0].size > minSize) {
              alert('maksimum file 2 MB ! ');
              document.getElementById('riwayat_hidup').value = "";
              document.getElementById('idRiwayat').value = "";
              return;
            }
          })

          document.getElementById('ket_domisili').addEventListener('change', function() {
            var file = this.files[0].name;
            var path = document.getElementById('ket_domisili').value;
            var exe = /(\.pdf)$/i;
            var minSize = 2000000;
            if (!exe.exec(path)) {
              alert("file harus berbentuk pdf");
              document.getElementById('ket_domisili').value = "";
              document.getElementById('idDomisili').value = "";
              return;
            } else if (this.files[0].size > minSize) {
              alert('maksimum file 2 MB ! ');
              document.getElementById('ket_domisili').value = "";
              document.getElementById('idDomisili').value = "";
              return;
            }
          })

          document.getElementById('npwp').addEventListener('change', function() {
            var file = this.files[0].name;
            var path = document.getElementById('npwp').value;
            var exe = /(\.pdf)$/i;
            var minSize = 2000000;
            if (!exe.exec(path)) {
              alert("file harus berbentuk pdf");
              document.getElementById('npwp').value = "";
              document.getElementById('idNPWP').value = "";
              return;
            } else if (this.files[0].size > minSize) {
              alert('maksimum file 2 MB ! ');
              document.getElementById('npwp').value = "";
              document.getElementById('idNPWP').value = "";
              return;
            }
          })

          document.getElementById('skck').addEventListener('change', function() {
            var file = this.files[0].name;
            var path = document.getElementById('skck').value;
            var exe = /(\.pdf)$/i;
            var minSize = 2000000;
            if (!exe.exec(path)) {
              alert("file harus berbentuk pdf");
              document.getElementById('skck').value = "";
              document.getElementById('idSKCK').value = "";
              return;
            } else if (this.files[0].size > minSize) {
              alert('maksimum file 2 MB ! ');
              document.getElementById('skck').value = "";
              document.getElementById('idSKCK').value = "";
              return;
            }
          })

          document.getElementById('ket_kesehatan').addEventListener('change', function() {
            var file = this.files[0].name;
            var path = document.getElementById('ket_kesehatan').value;
            var exe = /(\.pdf)$/i;
            var minSize = 2000000;
            if (!exe.exec(path)) {
              alert("file harus berbentuk pdf");
              document.getElementById('ket_kesehatan').value = "";
              document.getElementById('idKesehatan').value = "";
              return;
            } else if (this.files[0].size > minSize) {
              alert('maksimum file 2 MB ! ');
              document.getElementById('ket_kesehatan').value = "";
              document.getElementById('idKesehatan').value = "";
              return;
            }
          })

          document.getElementById('ijazah_sekolah').addEventListener('change', function() {
            var file = this.files[0].name;
            var path = document.getElementById('ijazah_sekolah').value;
            var exe = /(\.pdf)$/i;
            var minSize = 2000000;
            if (!exe.exec(path)) {
              alert("file harus berbentuk pdf");
              document.getElementById('ijazah_sekolah').value = "";
              document.getElementById('idIjazah').value = "";
              return;
            } else if (this.files[0].size > minSize) {
              alert('maksimum file 2 MB ! ');
              document.getElementById('ijazah_sekolah').value = "";
              document.getElementById('idIjazah').value = "";
              return;
            }
          })


          document.getElementById('photo').addEventListener('change', function() {
            var file = this.files[0].name;
            var path = document.getElementById('photo').value;
            var exe = /(\.jpg|\.png|\.jpeg)$/i;
            var minSize = 2000000;
            if (!exe.exec(path)) {
              alert("file harus berbentuk jpg jpeg png");
              document.getElementById('photo').value = "";
              document.getElementById('idPhoto').value = "";
              return;
            } else if (this.files[0].size > minSize) {
              alert('maksimum file 2 MB ! ');
              return;
            }
          })

          function beforeSubmit() {
            if (document.getElementById('npk').value == "") {
              alert("Data Karyawan masih kosong");
              return false;
            }
            //else if (document.getElementById('ktp').value == "") {
            //  alert("Kartu Tanda Penduduk masih kosong");
            //  return false;
            // } 
            //else if (document.getElementById('kartu_keluarga').value == "") {
            //   alert("Kartu Keluarga  masih kosong");
            //   return false;
            // } else if (document.getElementById('surat_lamaran').value == "") {
            //   alert("Surat Lamaran  masih kosong");
            //   return false;
            // } else if (document.getElementById('buku_rekening').value == "") {
            //   alert("Buku Rekening  masih kosong");
            //   return false;
            // } else if (document.getElementById('riwayat_hidup').value == "") {
            //   alert("Daftar Riwayat Hidup  masih kosong");
            //   return false;
            // } else if (document.getElementById('ket_domisili').value == "") {
            //   alert("Surat Keterangan Domisili  masih kosong");
            //   return false;
            // } else if (document.getElementById('npwp').value == "") {
            //   alert("Nomor Pokok Wajib Pajak masih kosong");
            //   return false;
            // } else if (document.getElementById('ket_kesehatan').value == "") {
            //   alert("Surat Keterangan Kesehatan kosong");
            //   return false;
            // } else if (document.getElementById('skck').value == "") {
            //   alert("Surat Keterangan Kepolisian  masih kosong");
            //   return false;
            // } else if (document.getElementById('photo').value == "") {
            //   alert("Foto karyawan masih kosong");
            //   return false;
            // } else if (document.getElementById('ijazah_sekolah').value == "") {
            //   alert("Ijazah Sekolah masih kosong");
            //   return false;
            // }

            return;
          }




          // FileInput
          $('.form-file-simple .inputFileVisible').click(function() {
            $(this).siblings('.inputFileHidden').trigger('click');
          });

          $('.form-file-simple .inputFileHidden').change(function() {
            var filename = $(this).val().replace(/C:\\fakepath\\/i, '');
            $(this).siblings('.inputFileVisible').val(filename);
          });

          $('.form-file-multiple .inputFileVisible, .form-file-multiple .input-group-btn').click(function() {
            $(this).parent().parent().find('.inputFileHidden').trigger('click');
            $(this).parent().parent().addClass('is-focused');
          });

          $('.form-file-multiple .inputFileHidden').change(function() {
            var names = '';
            for (var i = 0; i < $(this).get(0).files.length; ++i) {
              if (i < $(this).get(0).files.length - 1) {
                names += $(this).get(0).files.item(i).name + ',';
              } else {
                names += $(this).get(0).files.item(i).name;
              }
            }
            $(this).siblings('.input-group').find('.inputFileVisible').val(names);
          });

          $('.form-file-multiple .btn').on('focus', function() {
            $(this).parent().siblings().trigger('focus');
          });

          $('.form-file-multiple .btn').on('focusout', function() {
            $(this).parent().siblings().trigger('focusout');
          });


          $(function() {
            $('.click').on('click', function(e) {
              // e.preventDefault();
              document.getElementById("npk").value = $(this).attr('data-npk');
              document.getElementById("nama").value = $(this).attr('data-nama');
              document.getElementById("id").value = $(this).attr('data-id');
              document.getElementById("id_user").value = $(this).attr('data-id_user');
              let idUser = $(this).attr('data-id_user');
              $.ajax({
                url: "<?= base_url('superadmin/Upload_berkas/cekFile') ?>",
                method: "POST",
                data: 'id=' + idUser,
                success: function(result) {
                  const data = result.replace('`', "");
                  const hasil = JSON.parse(data);
                  console.log(hasil.result);
                  if (hasil.result == 0) {
                    document.getElementById('namaKTP').value = "";
                    document.getElementById('idKK').value = "";
                    document.getElementById('idrekening').value = "";
                    document.getElementById('idLamaran').value = "";
                    document.getElementById('idRiwayat').value = "";
                    document.getElementById('idDomisili').value = "";
                    document.getElementById('idNPWP').value = "";
                    document.getElementById('idSKCK').value = "";
                    document.getElementById('idKesehatan').value = "";
                    document.getElementById('idIjazah').value = "";
                    document.getElementById('idPhoto').value = "";
                  } else {
                    document.getElementById('namaKTP').value = hasil.ktp;
                    document.getElementById('idKK').value = hasil.kartu_keluarga;
                    document.getElementById('idrekening').value = hasil.buku_rekening;
                    document.getElementById('idLamaran').value = hasil.surat_lamaran;
                    document.getElementById('idRiwayat').value = hasil.daftar_riwayat_hidup;
                    document.getElementById('idDomisili').value = hasil.surat_domisili;
                    document.getElementById('idNPWP').value = hasil.npwp;
                    document.getElementById('idSKCK').value = hasil.skck;
                    document.getElementById('idKesehatan').value = hasil.surat_kesehatan;
                    document.getElementById('idIjazah').value = hasil.ijazah_sekolah;
                    document.getElementById('idPhoto').value = hasil.foto_karyawan;
                  }
                }
              })
              $('#selectkaryawan').modal('hide');
            })
          })
        </script>