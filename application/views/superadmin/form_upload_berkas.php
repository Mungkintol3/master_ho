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
        <?php  } ?>

        <div class="form-group">
          <button type="button " data-toggle="modal" data-target="#selectkaryawan" class="btn btn-success">Cari Karyawan <i class="fa fa-search"></i> </button>
        </div>
        <form id="uploadBerkas" class="form-horizontal" name="uploadBerkas" method="post" action="<?= base_url('superadmin/Upload_berkas/upload') ?>" enctype="multipart/form-data">
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
              <input type="text" class="form-control form-file-upload inputFileVisible" id="namaKTP" placeholder=" Kartu Tanda Penduduk">
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
              <input type="text" class="form-control form-file-upload inputFileVisible" placeholder="Kartu Keluarga">
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
              <input type="text" class="form-control form-file-upload inputFileVisible" placeholder="Buku Rekening">
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
              <input type="text" class="form-control form-file-upload inputFileVisible" placeholder="Surat Lamaran">
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
              <input type="text" class="form-control form-file-upload inputFileVisible" placeholder="Daftar Riwayat Hidup">
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
              <input type="text" class="form-control form-file-upload inputFileVisible" placeholder="Surat Keterangan Domisili">
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
              <input type="text" class="form-control form-file-upload inputFileVisible" placeholder="Nomor Pokok Wajib pajak">
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
              <input type="text" class="form-control form-file-upload inputFileVisible" placeholder="Surat Keterangan Catatan Kepolisian">
              <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-round btn-primary">
                  <i class="material-icons">attach_file</i>
                </button>
              </span>
            </div>
          </div>
          <div class="form-group form-file-upload form-file-multiple">
            <input type="file" name="ket_kesehatan" id="ket_kesehatan" multiple="" class="inputFileHidden">
            <div class="input-group">
              <input type="text" class="form-control form-file-upload inputFileVisible" placeholder="Surat Keterangan Kesehatan">
              <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-round btn-primary">
                  <i class="material-icons">attach_file</i>
                </button>
              </span>
            </div>
          </div>
          <div class="form-group form-file-upload form-file-multiple">
            <input type="file" name="ijazah_sekolah" id="ijazah_sekolah" multiple="" class="inputFileHidden">
            <div class="input-group">
              <input type="text" class="form-control form-file-upload inputFileVisible" placeholder="Ijazah Sekolah">
              <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-round btn-primary">
                  <i class="material-icons">attach_file</i>
                </button>
              </span>
            </div>
          </div>
          <div class="form-group form-file-upload form-file-multiple">
            <input type="file" onchange="return cekExe()" name="photo" id="photo" multiple="" class="inputFileHidden">
            <div class="input-group">
              <input type="text" class="form-control form-file-upload inputFileVisible" placeholder="Foto Karyawan">
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
          function cekExe() {

          }

          function beforeSubmit() {
            if (document.getElementById('npk').value == "") {
              alert("Data Karyawan masih kosong");
              return false;
            } else if (document.getElementById('ktp').value == "") {
              alert("Kartu Tanda Penduduk masih kosong");
              return false;
            } else if (document.getElementById('kartu_keluarga').value == "") {
              alert("Kartu Keluarga  masih kosong");
              return false;
            } else if (document.getElementById('surat_lamaran').value == "") {
              alert("Surat Lamaran  masih kosong");
              return false;
            } else if (document.getElementById('buku_rekening').value == "") {
              alert("Buku Rekening  masih kosong");
              return false;
            } else if (document.getElementById('riwayat_hidup').value == "") {
              alert("Daftar Riwayat Hidup  masih kosong");
              return false;
            } else if (document.getElementById('ket_domisili').value == "") {
              alert("Surat Keterangan Domisili  masih kosong");
              return false;
            } else if (document.getElementById('npwp').value == "") {
              alert("Nomor Pokok Wajib Pajak masih kosong");
              return false;
            } else if (document.getElementById('ket_kesehatan').value == "") {
              alert("Surat Keterangan Kesehatan kosong");
              return false;
            } else if (document.getElementById('skck').value == "") {
              alert("Surat Keterangan Kepolisian  masih kosong");
              return false;
            } else if (document.getElementById('photo').value == "") {
              alert("Foto karyawan masih kosong");
              return false;
            } else if (document.getElementById('ijazah_sekolah').value == "") {
              alert("Ijazah Sekolah masih kosong");
              return false;
            }

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

          $('.click').on('click', function(e) {
            document.getElementById("npk").value = $(this).attr('data-npk');
            document.getElementById("nama").value = $(this).attr('data-nama');
            document.getElementById("id").value = $(this).attr('data-id');
            document.getElementById("id_user").value = $(this).attr('data-id_user');
            $('#selectkaryawan').modal('hide');
          })


          //cek file yang di upload
          document.getElementById("ktp").addEventListener("change", validateFile)
          document.getElementById("kartu_keluarga").addEventListener("change", validateFile)
          var namaFile = document.getElementById('namaKK').value;

          function validateFile() {
            const allowedExtensions = ['pdf'],
              sizeLimit = 2000000; // 2 megabyte

            // destructuring file nama and ukuran  from file object
            const {
              name: fileName,
              size: fileSize
            } = this.files[0];

            /*
             * nama file yang di ijinkan hanyan bisa file dengan ekstensi .pdf
             * 
             *
             */
            const fileExtension = fileName.split(".").pop();
            /* 
              check jika ekstensi file tidak sesuai dengan yang di tentukan 
            */
            if (!allowedExtensions.includes(fileExtension)) {
              alert("tipe file tidak di beri akses" + idFile);
              this.value = null;
            } else if (fileSize > sizeLimit) {
              alert("file terlalu besar ! Maks 2 MB")
              this.value = null;
            }
          }
        </script>