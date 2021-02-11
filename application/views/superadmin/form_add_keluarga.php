<div class="content">
<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0">Tambah Anggota Keluarga Karyawan</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  
                    <div class="form-group">
                      <button type="button " data-toggle="modal" data-target="#selectkaryawan" class="btn btn-success">Cari Karyawan <i class="fa fa-search"></i> </button>
                    </div>
                  <form id="addSP" method="post" class="form-horizontal">
                    <div class="form-group">
                      <input type="hidden" name="id" id="id">
                      <input type="hidden" name="id_user" id="id_user">
                      <input readonly="" type="text" id="nama_karyawan" name="nama_karyawan" placeholder="Enter Nama Karyawan"  class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly="" type="text" name="npk" id="npk" placeholder="Enter NPK" class="form-control">
                    </div>

                    <div class="form-group">
                      <input type="text"  name="nama" placeholder="Nama Keluarga" id="nama" class="form-control">
                    </div>

                    <div class="form-group">
                      <input type="text"  name="nik" placeholder="NIK" id="nik" class="form-control">
                    </div>

                    <div class="form-group">
                      <input type="text"  name="no_kk" placeholder="No Kartu Keluarga" id="no_kk" class="form-control">
                    </div>

                    <div class="form-group">
                      <input type="text"  name="no_bpjs" placeholder="No BPJS" id="no_bpjs" class="form-control">
                    </div>

                    <div class="form-group">
                      <select name="status" id="status" class="form-control">
                        <option value="">Pilih Status</option>
                        <option>Suami</option>
                        <option>Istri</option>
                        <option>Anak ke - 1</option>
                        <option>Anak ke - 2</option>
                        <option>Anak ke - 3</option>
                      </select>                      
                    </div>
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
                <table class="table">
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NPK</th>
                  </tr>
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
                <small class="text-danger"><i>*klik npk untuk pilih karyawan*</i> </small>
                </div>
             </div>
         </div>
     </form>
     </div>
<!-- end of modal  -->


  <script type="text/javascript">
$(function(){
      $("#addSP").on('submit',function(e){
        var postData = new FormData(this);
        e.preventDefault();
        if(document.getElementById('nama_karyawan').value == "" ){
          alert("data karyawan masih kosong")
        }else if(document.getElementById('nama').value == "" ){
          alert("nama keluarga kosong");
        }else if(document.getElementById('nik').value == "" ){
          alert("nik masih kosong");
        }else if(document.getElementById('no_kk').value == "" ){
          alert("no kartu keluarga masih kosong")
        }else if(document.getElementById('no_bpjs').value == "" ){
          alert("no bpjs masih kosong");
        }else if(document.getElementById('status').value == "" ){
          alert("status masih kosong");
        }else {
          $.ajax({
            url : "<?= base_url('superadmin/Keluarga/add') ?>" ,
            method : "POST" ,
            data : postData ,
            processData : false ,
            contentType : false ,
            cache : false ,
            beforeSend : function(){
              $("#submit").attr("disabled",true);   
            },
            complete : function(){
              $("#submit").attr("disabled",false);    
            },
            success : function(e){
                if(e = "sukses"){
                  alert("berhasil");
                  window.location.href='<?= base_url('superadmin/Keluarga/form_add') ?>'
                }else {
                  alert("gagal")
                }
            }
          })
        }
      })
    })
      $('.click').on('click',function(e){
              document.getElementById("npk").value     = $(this).attr('data-npk');
              document.getElementById("id").value      = $(this).attr('data-id');
              document.getElementById("id_user").value = $(this).attr('data-id_user');
              document.getElementById("nama_karyawan").value    =  $(this).attr('data-nama');
              $('#selectkaryawan').modal('hide');
          })
  </script>