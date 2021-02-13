<div class="content">
<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0">Perbarui Pendidikan Karyawan</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  
                    <div class="form-group">
                      <button type="button " data-toggle="modal" data-target="#selectkaryawan" class="btn btn-success">Cari Karyawan <i class="fa fa-search"></i> </button>
                    </div>
                  <form id="updatepoin" method="post" action="#" class="form-horizontal">
                    <div class="form-group">
                      <input type="hidden" name="id" id="id">
                      <input type="hidden" name="id_user" id="id_user">
                      <input readonly="" type="text" name="nama" id="nama" placeholder="Enter Nama" class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly="" type="text" name="npk" id="npk" placeholder="Enter NPK" class="form-control">
                    </div>

                    <div class="form-group">
                      <input type="text" readonly="" name="old_education" id="old_pendidikan" placeholder="Pendidikan Sebelumnya" class="form-control">
                    </div>

                    <div class="form-group">
                      <input type="text"  id="new_pendidikan" name="new_education" placeholder="Pendidikan Terbaru" class="form-control">
                    </div>

                    <div class="form-group">
                      <input type="text"  id="jurusan" name="jurusan" placeholder="Jurusan Pendidikan" class="form-control">
                    </div>

                     <div class="form-group">
                      <input type="text" name="institusi" id="institusi" placeholder="Sekolah / Kampus" class="form-control">
                    </div>

                    <div class="form-group">
                      <input  type="text" id="tahun_lulus" name="tahun_lulus" placeholder="Enter Tahun Lulus" class="form-control">
                    </div>

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
                           data-education="<?= $f->education_update ?>"
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
      $(function(){
        
          $("#updatepoin").on('submit',function(e){
            var postData = new FormData(this);
            e.preventDefault();
            if(document.getElementById('npk').value == "" ){
              alert("data karyawan masih kosong")
            }else if(document.getElementById('new_pendidikan').value == "" ){
              alert("Pendidikan masih kosong")
            }else if(document.getElementById('institusi').value == "" ){
              alert("tanggal masih kosong")
            }else if(document.getElementById('tahun_lulus').value == "" ){
              alert("tanggal masih kosong")
            }else{
              $.ajax({
                url : "<?= base_url('superadmin/Pendidikan/input_histori') ?>" ,
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
                  alert(e);
                  window.location.href="<?= base_url('superadmin/Pendidikan/formupdate') ?>"
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
      document.getElementById("old_pendidikan").value   = $(this).attr('data-education');
      $('#selectkaryawan').modal('hide');
  })

  </script>