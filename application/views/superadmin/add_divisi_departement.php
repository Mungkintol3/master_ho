<div class="content">
<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> Mutasi Golongan Karyawan</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  
                    <div class="form-group">
                      <button type="button " data-toggle="modal" data-target="#selectkaryawan" class="btn btn-success">Cari Karyawan <i class="fa fa-search"></i> </button>
                    </div>
                  <form id="updatedivisi" method="post" class="form-horizontal">
                    <div class="form-group">
                      <input type="hidden" name="id" id="id">
                      <input type="hidden" name="id_user" id="id_user">
                      <input readonly="" type="text" id="nama" placeholder="Enter Nama" class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly="" type="text" id="npk" placeholder="Enter NPK" class="form-control">
                    </div>

                    <div class="form-group">
                      <input  type="text" id="divisi_old" readonly="" placeholder="Divisi Sekarang" class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly="" type="text" id="departement_old" placeholder="Departement Sekarang" class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly=""  type="text" id="position_old" placeholder="Posisi Sekarang" class="form-control">
                    </div>

                    <div class="form-group">
                      <input  type="text" id="divisi"  placeholder="Divisi Terbaru" class="form-control">
                    </div>

                    <div class="form-group">
                      <input  type="text" id="departement" placeholder="Departement Terbaru" class="form-control">
                    </div>

                    <div class="form-group">
                      <input   type="text" id="position" placeholder="Posisi Terbaru" class="form-control">
                    </div>

                    <div class="form-group">
                      <input   type="text" id="tanggal" placeholder="Tanggal" class="form-control">
                    </div>



                   <button type="submit" id="submit" class="btn btn-info">Simpan Perubahan</button>
                  </form>
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
                           data-npk="<?= $f->npk ?>" 
                           data-id_user="<?= $f->id_user ?>" 
                           data-id="<?= $f->id ?>"
                           data-nama="<?= $f->nama ?>"
                           data-posisi="<?= $f->position ?>"
                           data-departement="<?= $f->departement ?>"
                           data-divisi="<?= $f->divisi ?>"
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
			$("#updatedivisi").on('submit',function(e){
				var nama , id , id_user , npk , tgl ,divisi_old , posistion_old , departement_old , divisi , departement, posistion ;
				nama 			      = document.getElementById('nama').value ;
				id 				      = document.getElementById('id').value ;
        id_user         = document.getElementById('id_user').value ;
				npk 			      = document.getElementById('npk').value ;
				tgl 			      = document.getElementById('tanggal').value ;
        divisi          = document.getElementById('divisi').value ;
        departement     = document.getElementById('departement').value; 
        position        = document.getElementById('position').value;
        divisi_old      = document.getElementById('divisi_old').value ;
        departement_old = document.getElementById('departement_old').value; 
        position_old    = document.getElementById('position_old').value;

				e.preventDefault();
				if(document.getElementById('npk').value == "" ){
					alert("data karyawan masih kosong")
				}else if(document.getElementById('divisi').value == "" ){
					alert("divisi baru kosong")
				}else if(document.getElementById('departement').value == "" ){
          alert("departement baru kosong")
        }else if(document.getElementById('position').value == "" ){
          alert("posisi baru kosong")
        }else if(document.getElementById('tanggal').value == "" ){
					alert("tanggal masih kosong")
				}else {
					$.ajax({
						url : "<?= base_url('superadmin/Divisi/input') ?>" ,
						method : "POST" ,
						data : "npk="+ npk + "&nama=" + nama + "&id="+ id + "&id_user="+ id_user + "&tgl="+ tgl + "&divisi=" + divisi + "&departement=" + departement + "&position=" + position + "&posisi_old=" + position_old + "&divisi_old="+ divisi_old + "&departement_old=" + departement_old ,
						beforeSend : function(){
							$("#submit").attr("disabled",true);		
						},
						complete : function(){
							$("#submit").attr("disabled",false);		
						},
						success : function(e){
							if(e = "sukses"){
                window.location.href="<?= base_url('superadmin/Divisi/add') ?>"
              }else {
                alert('gagal');
              }
						}
					})
				}
			})

			$('.click').on('click',function(e){
              document.getElementById("npk").value = $(this).attr('data-npk');
              document.getElementById("id").value = $(this).attr('data-id');
              document.getElementById("id_user").value = $(this).attr('data-id_user');
              document.getElementById("nama").value = $(this).attr('data-nama');
              document.getElementById("position_old").value = $(this).attr('data-posisi');
              document.getElementById("divisi_old").value = $(this).attr('data-divisi');
              document.getElementById("departement_old").value = $(this).attr('data-departement');
              $('#selectkaryawan').modal('hide');
        	})
		})

  </script>