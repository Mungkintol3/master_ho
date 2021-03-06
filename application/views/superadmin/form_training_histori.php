<div class="content">
<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> Data Training Karyawan</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  
                    <div class="form-group">
                      <button type="button " data-toggle="modal" data-target="#selectkaryawan" class="btn btn-success">Cari Karyawan <i class="fa fa-search"></i> </button>
                      <a class="btn btn-warning" style="float:right;" href="<?=base_url('superadmin/Training_histori/uploadExcel')?>">Upload Data Training tanpa sertifikat</></a>
                    </div>
                  <form id="formtraining" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group">
                      <input type="hidden" name="id" id="id">
                      <input type="hidden" name="id_user" id="id_user">
                      <input readonly="" type="text" id="nama" name="nama" placeholder="Enter Nama" class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly="" type="text" name="npk" id="npk" placeholder="Enter NPK" class="form-control">
                    </div>

                    <div class="form-group">
                      <input  id="jenis_training" class="form-control" name="jenis_training" placeholder="Masukan Jenis Pelatihan">
                    </div>

                    <div class="form-group">
                      <select class="form-control"  name="keterangan" id="keterangan">
                        <option value="">Sertifikat Training</option>
                        <option>Ada</option>
                        <option>Tidak Ada</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <input  type="text" id="tanggal" name="tgl" placeholder="Enter Tahun" class="form-control">
                    </div>

                    <label>Upload Sertifikat</label>
                    <input class="form-control" type="file" name="file" id="file">
                    <button type="submit" class="btn btn-info">Simpan Perubahan</button>
                  </form>
              	</div>
              </div>
          </div>
      </div>
  </div>
 <!-- modal form tambah jabatan -->
 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="selectkaryawan" class="modal fade">
     <div class="modal-dialog modal-xl">
         <div class="modal-content">
             <div class="modal-header">
             Data Karyawan
                 <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
             </div>
             <div class="modal-body" id="hstatus">
                <table id="table_id" class="table">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NPK</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1 ; foreach($karyawan as $f) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td>
                        <a class="btn btn-success btn-sm click"
                           data-npk="<?= $f->npk ?>" 
                           data-id_user="<?= $f->id_user ?>" 
                           data-id="<?= $f->id ?>"
                           data-nama="<?= $f->nama ?>"
                           >
                            <?= $f->nama ?>
                        </a>
                      </td>
                      <td><?= $f->npk ?></td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
                 <small class="text-danger"><i>*klik nama untuk pilih karyawan*</i> </small>
                </div>
             </div>
         </div>
     </form>
     </div>
<!-- end of modal  -->


  <script type="text/javascript">
    $('.click').on('click',function(e){
        document.getElementById("npk").value = $(this).attr('data-npk');
        document.getElementById("nama").value = $(this).attr('data-nama');
        document.getElementById("id").value = $(this).attr('data-id');
        document.getElementById("id_user").value = $(this).attr('data-id_user');
        $('#selectkaryawan').modal('hide');
    })

    $(function(){
      $("#formtraining").on('submit',function(e){
        var postData = new FormData(this);
        e.preventDefault();
          if(document.getElementById('nama').value == ""){
            alert("data karyawan masih kosong");
          }else if(document.getElementById('jenis_training').value == ""){
            alert("jenis training masih kosong");
          }else if(document.getElementById('keterangan').value == ""){
            alert("status masih kosong");
          }else if(document.getElementById('tanggal').value == ""){
            alert("tanggal masih kosong");
          }  else {
            $.ajax({
              url : "<?= base_url('superadmin/Training_histori/add') ?>" ,
              method : "POST" ,
              data : postData ,
              processData : false ,
              contentType : false ,
              cache : false ,
              success : function(e){
                if(e = "sukses"){
                  alert(e)
                  window.location.href="<?= base_url('superadmin/Training_histori/form_add') ?>"
                }else {
                  alert('gagal');
                }
              }
            })
          }
      })
    })
  </script>