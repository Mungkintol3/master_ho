<div class="content">
<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> Mutasi Karir Karyawan</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  
                    <div class="form-group">
                      <button type="button " data-toggle="modal" data-target="#selectkaryawan" class="btn btn-success">Cari Karyawan <i class="fa fa-search"></i> </button>
                    </div>
                  <form id="formkarir" class="form-horizontal">
                    <div class="form-group">
                      <input type="hidden" name="id" id="id">
                      <input type="hidden" name="id_user" id="id_user">
                      <input readonly="" type="text" name="nama" id="nama" placeholder="Enter Nama" class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly="" type="text" name="npk" id="npk" placeholder="Enter NPK" class="form-control">
                    </div>

                    <div class="form-group">
                      <input  type="text" id="karir_old" name="karir_old" readonly="" placeholder="Carrer Saat ini" class="form-control">
                    </div>

                    <div class="form-group">
                      <input type="text" id="new_karir" name="new_karir" placeholder="Enter Mutasi Carer Terbaru" class="form-control">
                    </div>

                    <div class="form-group">
                      <input  type="text" id="tanggal" name="tanggal" placeholder="Enter Tahun" class="form-control">
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
                    <th>Divisi</th>
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
                           data-karir="<?= $f->karir ?>"
                           >
                            <?= $f->nama ?>
                        </a>
                      </td>
                      <td><?= $f->npk ?></td>
                      <td><?= $f->divisi ?></td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
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
        document.getElementById("karir_old").value = $(this).attr('data-karir');
        $('#selectkaryawan').modal('hide');
    })

    $(function(){
      $("#formkarir").on('submit',function(e){
        var postData = new FormData(this) ;
        e.preventDefault();
          if(document.getElementById('nama').value == ""){
            alert("data karyawan masih kosong")
          }else if(document.getElementById('new_karir').value == ""){
            alert("karir baru masih kosong")
          }else if(document.getElementById('tanggal').value == ""){
            alert("tanggal masih kosong")
          } else {
            $.ajax({
              url : "<?= base_url('superadmin/Career/update') ?>" ,
              method : "POST" ,
              data : postData ,
              processData : false ,
              contentType : false ,
              cache : false ,
              success : function(e){
                alert(e)
                window.location.href="<?= base_url('superadmin/Career/') ?>"
              }
            })
          }
      })
    })
  </script>