<div class="content">
<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> Tambah Divisi Departement Position Karyawan</h4>
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
                      <input readonly="" type="text" id="nama" name="nama" placeholder="Enter Nama" class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly="" type="text" name="npk" id="npk" placeholder="Enter NPK" class="form-control">
                    </div>

                    <div class="form-group">
                      <input  type="text" id="divisi_old" name="divisi_old" readonly="" placeholder="Divisi Sekarang" class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly="" type="text" name="departement_old" id="departement_old" placeholder="Departement Sekarang" class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly=""  type="text" name="position_old" id="position_old" placeholder="Posisi Sekarang" class="form-control">
                    </div>

                    <div class="form-group">
                      <select id="divisi" name="divisi" class="form-control">
                        <option value="">Pilih Divisi Baru</option>
                        <?php foreach($divisi as $divisi) : ?>
                            <option><?= $divisi->divisi ?></option>
                        <?php endforeach ; ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <select id="departement" name="departement" class="form-control">
                        <option value="">Pilih Departement Baru</option>
                        <?php foreach($departement as $departement) : ?>
                            <option><?= $departement->departement ?></option>
                        <?php endforeach ; ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <select id="position"  name="position" class="form-control">
                        <option value="">Pilih Posisi Baru</option>
                        <?php foreach($position as $posisi) : ?>
                            <option><?= $posisi->posisi ?></option>
                        <?php endforeach ; ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <input type="text" id="tanggal" name="tanggal" placeholder="Tanggal" class="form-control">
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
                           data-posisi="<?= $f->position ?>"
                           data-departement="<?= $f->departement ?>"
                           data-divisi="<?= $f->divisi ?>"
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
			$("#updatedivisi").on('submit',function(e){
				var  postData = new FormData(this);

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
                alert("sukses");
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