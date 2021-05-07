<div class="content">
<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> Rekap Surat Peringatan Karyawan</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  
                    <div class="form-group">
                      <button type="button " data-toggle="modal" data-target="#selectkaryawan" class="btn btn-success">Cari Karyawan <i class="fa fa-search"></i> </button>
                    </div>
                  <form id="addSP" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group">
                      <input type="hidden" name="id" id="id">
                      <input type="hidden" name="id_user" id="id_user">
                      <input readonly="" type="text" id="nama" name="nama" placeholder="Enter Nama" class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly="" type="text" name="npk" id="npk" placeholder="Enter NPK" class="form-control">
                    </div>

                    <div class="form-group">
                      <input type="text"  name="tipe_sp" placeholder="Jenis Surat Peringatan" id="tipe_sp" class="form-control">
                    </div>

                    <div class="form-group">
                      <textarea id="keterangan"  placeholder="Keterangan" class="form-control" name="keterangan"></textarea>
                    </div>


                    <div class="form-group">
                      <input  type="text" id="tanggal" name="tanggal" placeholder="Tahun" class="form-control">
                    </div>

                    <label>Berkas Pendukung</label>
                    <input type="file" id="file" onchange="return cekexe()" name="file" class="form-control">
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
                <table class="table" id="table_id">
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
     function cekexe(){
      const file = document.getElementById('file');
      const path  = file.value ;
      const exe = /(\.pdf)$/i;
      if(!exe.exec(path)){
        alert("file harus berbentuk pdf");
        file.value = "";
        return ;
      }
    }

        $(function(){
              $("#addSP").on('submit',function(e){
                var postData = new FormData(this);
                e.preventDefault();
                if(document.getElementById('nama').value == "" ){
                  alert("data karyawan masih kosong")
                }else if(document.getElementById('tipe_sp').value == "" ){
                  alert("jenis surat Peringatan kosong")
                }else if(document.getElementById('keterangan').value == "" ){
                  alert("keterangan masih kosong")
                }else if(document.getElementById('tanggal').value == "" ){
                  alert("tanggal masih kosong")
                }else {
                  $.ajax({
                    url : "<?= base_url('superadmin/Surat_peringatan/add') ?>" ,
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
                          window.location.href='<?= base_url('superadmin/Surat_peringatan/form_add') ?>'
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
          document.getElementById("nama").value    =  $(this).attr('data-nama');
          $('#selectkaryawan').modal('hide');
      })
  </script>