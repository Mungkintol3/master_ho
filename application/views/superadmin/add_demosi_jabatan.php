<div class="content">
<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0">Demosi Jabatan</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  
                    <div class="form-group">
                      <button type="button " data-toggle="modal" data-target="#selectkaryawan" class="btn btn-success">Cari Karyawan <i class="fa fa-search"></i> </button>
                    </div>
                  <form id="demosijabatan" method="post" action="#" class="form-horizontal">
                    <div class="form-group">
                      <input type="hidden" id="id">
                      <input type="hidden" id="id_user">
                      <input readonly="" type="text" id="nama" placeholder="Enter Nama" class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly="" type="text" id="npk" placeholder="Enter NPK" class="form-control">
                    </div>

                    <div class="form-group">
                      <input type="text" readonly="" name="mutasi" id="demosi" placeholder="Demosi Jabatan Sebelumnya" class="form-control">
                    </div>

                    <div class="form-group">
                      <select id="new_demosi" class="form-control">
                        <option value="">Pilih Demosi Jabatan Terbaru </option>
                        <?php foreach($jabatan as $jbt) { ?>
                          <option><?= $jbt->nama_jabatan ?></option>
                        <?php } ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <input  type="text" id="tanggal"  placeholder="Enter Tahun" class="form-control">
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
                    <th>Golongan</th>
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
                           data-promosi="<?= $f->demosi_jabatan ?>"
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
      $(function(){
        
          $("#demosijabatan").on('submit',function(e){
            var nama , id , id_user , npk , tgl  , demosi ;
            nama      = document.getElementById('nama').value ;
            id        = document.getElementById('id').value ;
            npk       = document.getElementById('npk').value ;
            demosi     = document.getElementById('new_demosi').value ;
            id_user   = document.getElementById('id_user').value ;
            tgl       = document.getElementById('tanggal').value ;
            e.preventDefault();
            if(document.getElementById('npk').value == "" ){
              alert("data karyawan masih kosong")
            }else if(document.getElementById('new_demosi').value == "" ){
              alert("mutasi jabatan masih kosong")
            }else if(document.getElementById('tanggal').value == "" ){
              alert("tanggal masih kosong")
            }else {
              $.ajax({
                url : "<?= base_url('superadmin/Promosi/input_demosi') ?>" ,
                method : "POST" ,
                data : "id=" + id + "&id_user=" + id_user + "&nama=" + nama + "&npk="+ npk + "&demosi=" + demosi + "&tgl=" + tgl  ,
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
                     window.location.href="<?= base_url('superadmin/Promosi/add_demosi_jabatan') ?>"
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
      document.getElementById("demosi").value    = $(this).attr('data-promosi');
      $('#selectkaryawan').modal('hide');
  })

  </script>