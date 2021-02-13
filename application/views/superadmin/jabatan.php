<div class="content">
<div class="col-md-12">
  <a data-toggle="modal" data-target="#addjabatan" class="btn btn-success btn-round">
   <i class="material-icons">assignment_ind</i> 
  Tambah Data Jabatan</a>
  <a data-toogle="modal" href="<?php echo base_url('superadmin/Position')?>" class="btn btn-default btn-round">
  <i class="material-icons">assignment_ind</i>
  Tambah Data Posisi
  </a>
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> DAFTAR JABATAN</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th class="text-center">NO</th>
                        <th>Kode Jabatan</th>
                      	<th >Nama Jabatan</th>
                  		<th>Keterangan</th>
                  		<th class="text-right">Action</th>
                       </thead>
                  			<tbody>
                          <?php foreach($jabatan as $result) :  ?>
                      			<tr>
                      				<td class="text-center">1</td>
                      				<td><?= $result->kode_jabatan ?></td>
                              <td><?= $result->nama_jabatan ?></td>
                              <td><?= $result->keterangan ?></td>
                      				<td class="td-actions text-right">
                                <a  data-id="<?php echo $result->id ?>" data-toggle="modal" data-target="#detail_jab" class="btn btn-success btn-fab btn-fab-mini btn-round">
      					                    <i class="material-icons">edit</i>
                                </a>
                                <a onclick="return confirm('hapus ?')" href="<?= base_url('superadmin/Jabatan/delete/'. $result->id) ?>" class="btn btn-danger btn-fab btn-fab-mini btn-round">
                                    <i class="material-icons">close</i>
                                </a>
                    					</td>
                      			</tr>
                          <?php endforeach  ?>                  		                  	
                  			</tbody>
                    </table>
              	</div>
              </div>
          </div>
      </div>
  </div>
 <!-- modal form tambah jabatan -->
 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="addjabatan" class="modal fade">
     <div class="modal-dialog modal-xl">
         <div class="modal-content">
             <div class="modal-header">
              Tambah Data Jabatan
                 <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
             </div>
             <div class="modal-body" id="hstatus">
                <form method="post"  action="#" id="addjabatan">
                  <label>Kode Jabatan</label>
                  <div class="form-group">
                    <input type="text"  name="kode_jabatan" id="kode_jabatan" class="form-control">
                  </div>
                  <label>Nama Jabatan</label>
                  <div class="form-group">
                    <input type="text"  name="nama_jabatan" id="nama_jabatan" class="form-control">
                  </div>
                  <label>Keterangan</label>
                  <div class="form-group">
                    <textarea id="keterangan" class="form-control" name="keterangan"></textarea>
                  </div>
                  <button type="submit" id="submit" class="btn btn-info">posting</button>
                </form>
                </div>
             </div>
         </div>
     </form>
     </div>
<!-- end of modal  -->

 <!-- modal edit jabatan -->
 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="detail_jab" class="modal fade">
     <div class="modal-dialog modal-xl">
         <div class="modal-content">
             <div class="modal-header">
             Edit Data Jabatan
                 <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
             </div>
             <form class="form-horizontal"  action="<?php echo base_url('superuser/Jabatan/update') ?>" method="post">
             <div class="modal-body" id="showup">
                
             </div>
             </div>
         </div>
     </form>
     </div>
<!-- end of modal  -->

  <script type="text/javascript">
    $(function(){
      $("#addjabatan").on('submit',function(e){
        var nama  , kode , keterangan ;
        nama = document.getElementById('nama_jabatan').value ;
        kode = document.getElementById('kode_jabatan').value ;
        ket = document.getElementById('keterangan').value ;
        e.preventDefault();
        if(document.getElementById('kode_jabatan').value == "" ){
          alert("kode jabatan kosong")
        }else if(document.getElementById('nama_jabatan').value == "" ){
          alert("nama jabatan kosong")
        }else {
          $.ajax({
            url : "<?= base_url('superadmin/Jabatan/add') ?>" ,
            method : "POST" ,
            data :  "nama_jabatan=" + nama + "&kode_jabatan="+ kode + "&keterangan="+ ket, 
            beforeSend : function(){
              $("#submit").attr("disabled",true);   
            },
            complete : function(){
              $("#submit").attr("disabled",false);    
            },
            success : function(e){
              alert(e);
              window.location.href = "<?= base_url('superadmin/Jabatan') ?>"
            }
          })
        } 
      })
    })


        $("#detail_jab").on("show.bs.modal",function(event){
          var div = $(event.relatedTarget);
          var modal = $(this);
          var id = div.data('id');

            
            //kirim data ke controller supplier
            $.ajax({
              url : "<?php echo base_url("superadmin/Jabatan/modal") ?>",
              data : "id="+id ,
              method : "GET",
              success : function(response){
                $("#showup").html(response);
              }
            })
        })
  </script>