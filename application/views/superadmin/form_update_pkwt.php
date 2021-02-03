<div class="content">
<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> Perbarui NO PKWT KARYAWAN</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  
                    <div class="form-group">
                      <button type="button " data-toggle="modal" data-target="#selectkaryawan" class="btn btn-success">Cari Karyawan <i class="fa fa-search"></i> </button>
                    </div>
                  <form id="formpkwt" class="form-horizontal">
                    <div class="form-group">
                      <input type="hidden" name="id" id="id">
                      <input type="hidden" name="id_user" id="id_user">
                      <input readonly="" type="text" id="nama" placeholder="Enter Nama" class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly="" type="text" id="npk" placeholder="Enter NPK" class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly="" type="text" id="divisi" placeholder="Enter Divisi" class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly="" type="text" id="pkwt_lama"  placeholder="Enter PKWT" class="form-control">
                    </div>

                    <div class="form-group">
                      <input type="text" id="tanggal"  placeholder="Enter Tanggal yyyy-mm-dd" class="form-control">
                    </div>

                    <div class="form-group">
                      <input type="text" id="pkwt_baru"  placeholder="Enter PKWT Update" class="form-control">
                    </div>
                    <button class="btn btn-info">Simpan Perubahan</button>
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
              Tambah Data Jabatan
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
                        <a class="btn btn-success btn-sm click" data-npk="<?= $f->npk ?>" 
                           data-id_user="<?= $f->id_user ?>" 
                           data-divisi="<?= $f->divisi ?>" 
                           data-nama="<?= $f->nama ?>" 
                           data-nopkwt="<?= $f->no_pkwt ?>" 
                           data-id="<?= $f->id ?>">
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
        document.getElementById("divisi").value = $(this).attr('data-divisi');
        document.getElementById("pkwt_lama").value = $(this).attr('data-nopkwt');
        document.getElementById("id").value = $(this).attr('data-id');
        document.getElementById("id_user").value = $(this).attr('data-id_user');
        $('#selectkaryawan').modal('hide');
    })

    $(function(){
      $("#formpkwt").on('submit',function(e){
        var id , id_user , tgl ;
        id      = document.getElementById('id').value;
        id_user = document.getElementById('id_user').value;
        tgl     = document.getElementById('tanggal').value;
        pkwt    = document.getElementById('pkwt_baru').value;
        pkwt1   = document.getElementById('pkwt_lama').value;
        nama    = document.getElementById('nama').value;
        npk     = document.getElementById('npk').value;
        e.preventDefault();
          if(document.getElementById('nama').value == ""){
            alert("data karyawan masih kosong")
          }else if(document.getElementById('tanggal').value == ""){
            alert("tanggal masih kosong")
          }else if(document.getElementById('pkwt_baru').value == ""){
            alert("no pkwt terupdate masih kosong")
          } else {
            $.ajax({
              url : "<?= base_url('superadmin/Update_pkwt/update') ?>" ,
              method : "POST" ,
              data : "id="+ id + "&id_user="+ id_user + "&tanggal="+ tgl + "&pkwt_baru=" + pkwt + "&nama="+ nama + "&npk="+npk + "&pkwt_lama="+ pkwt1 ,
              success : function(e){
                alert(e)
                window.location.href="<?= base_url('superadmin/Update_pkwt') ?>"
              }
            })
          }
      })
    })
  </script>