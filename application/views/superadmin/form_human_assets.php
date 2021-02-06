<div class="content">
<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> Input Human Assets Value</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  
                    <div class="form-group">
                      <button type="button " data-toggle="modal" data-target="#selectkaryawan" class="btn btn-success">Cari Karyawan <i class="fa fa-search"></i> </button>
                    </div>
                  <form id="formhumanassets" method="post" class="form-horizontal">
                    <div class="form-group">
                      <input type="hidden" name="id" id="id">
                      <input type="hidden" name="id_user" id="id_user">
                      <input readonly="" type="text" id="nama" placeholder="Enter Nama" class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly="" type="text" id="npk" placeholder="Enter NPK" class="form-control">
                    </div>

                    <div class="form-group">
                      <input  type="text" id="human_assets" placeholder="Enter New Human Assets" class="form-control">
                    </div>

                    <div class="form-group">
                      <input  type="text" id="tanggal" placeholder="Enter Tahun" class="form-control">
                    </div>

                    <div class="form-group">
                      <textarea class="form-control" id="keterangan" placeholder="Keterangan jika diperlukan"></textarea>
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
        $('#selectkaryawan').modal('hide');
    })

    $(function(){
      $("#formhumanassets").on('submit',function(e){
        var id , id_user , tgl  , ket , assets_value , nama  ;
        id                = document.getElementById('id').value;
        id_user           = document.getElementById('id_user').value;
        tgl               = document.getElementById('tanggal').value;
        nama              = document.getElementById('nama').value;
        npk               = document.getElementById('npk').value;
        ket               = document.getElementById('keterangan').value;
        assets_value      = document.getElementById('human_assets').value;
        e.preventDefault();
          if(document.getElementById('nama').value == ""){
            alert("data karyawan masih kosong");
          }else if(document.getElementById('human_assets').value == ""){
            alert("human assets masih kosong");
          }else if(document.getElementById('tanggal').value == ""){
            alert("tanggal masih kosong");
          } else {
            $.ajax({
              url : "<?= base_url('superadmin/human_assets_value/add') ?>" ,
              method : "POST" ,
              data : "id_user=" + id_user + "&nama=" + nama + "&npk=" + npk + "&tgl="+ tgl + "&assets_value="+ assets_value + "&keterangan=" + ket ,
              success : function(e){
                //alert(e);
                if(e = "sukses"){
                  alert(e)
                  window.location.href="<?= base_url('superadmin/Human_assets_value/form_add') ?>"
                }else {
                  alert('gagal');
                }
              }
            })
          }
      })
    })
  </script>