<div class="content">
<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0">Mutasi Jabatan</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  
                    <div class="form-group">
                      <button type="button " data-toggle="modal" data-target="#selectkaryawan" class="btn btn-success">Cari Karyawan <i class="fa fa-search"></i> </button>
                    </div>
                  <form id="mutasijabatan" enctype="multipart/form-data" method="post" action="#" class="form-horizontal">
                    <div class="form-group">
                      <input type="hidden" name="id" id="id">
                      <input type="hidden" name="id_user" id="id_user">
                      <input readonly="" type="text" name="nama" id="nama" placeholder="Enter Nama" class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly="" type="text" name="npk" id="npk" placeholder="Enter NPK" class="form-control">
                    </div>

                    <div class="form-group">
                      <select id="departement" name="departement" class="form-control">
                        <option value="">Pilih Department Terbaru </option>
                        <?php foreach ($departement as  $value) : ?>
                          <option><?= $value->departement ?></option>
                        <?php endforeach ; ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <select id="divisi" name="divisi" class="form-control">
                        <option value="">Pilih Divisi Terbaru </option>
                        <?php foreach($divisi as $divisi) : ?>
                          <option><?= $divisi->divisi ?></option>
                        <?php endforeach ; ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <input type="text" placeholder="Posisi Terbaru" id="posisi" name="posisi" class="form-control">
                    </div>

                    <div class="form-group">
                      <input  type="text" id="tanggal" name="tanggal" placeholder="Enter Tahun" class="form-control">
                    </div>

                    <label>Berkas Pendukung</label>
                    <input type="file" name="file" onchange="return cekexe()"  id="file" class="form-control">
                    <button type="submit" id="submit" class="btn btn-info">Simpan Perubahan</button>
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
                           data-id="<?= $f->id ?>"
                           data-id_user="<?= $f->id_user ?>" 
                           data-npk="<?= $f->npk ?>" 
                           data-nama="<?= $f->nama ?>"
                           data-promosi="<?= $f->mutasi_jabatan ?>"
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
        
          $("#mutasijabatan").on('submit',function(e){
            var postData = new FormData(this);
            e.preventDefault();
            if(document.getElementById('npk').value == "" ){
              alert("data karyawan masih kosong")
            }else if(document.getElementById('departement').value == "" ){
              alert("departement masih kosong")
            }else if(document.getElementById('divisi').value == "" ){
              alert("divisi masih kosong")
            }else if(document.getElementById('posisi').value == "" ){
              alert("posisi masih kosong")
            }else if(document.getElementById('tanggal').value == "" ){
              alert("tanggal masih kosong")
            }else if(document.getElementById('file').value == "" ){
              alert("berkas masih kosong")
            }else {
              $.ajax({
                url : "<?= base_url('superadmin/Promosi/input_mutasi') ?>" ,
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
                     window.location.href="<?= base_url('superadmin/Promosi/add_mutasi_jabatan') ?>"
                   }else {
                      alert("gagal")
                   }
                }
              })
            }
          })

    })

    $('.click').on('click',function(e){
      document.getElementById("npk").value       = $(this).attr('data-npk');
      document.getElementById("nama").value      = $(this).attr('data-nama');
      document.getElementById("id").value        = $(this).attr('data-id');
      document.getElementById("id_user").value   = $(this).attr('data-id_user');
      $('#selectkaryawan').modal('hide');
  })

  </script>