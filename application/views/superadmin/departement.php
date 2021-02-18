<div class="content">
<div class="col-md-12">
  <a data-toggle="modal" data-target="#add" class="btn btn-danger btn-round">Tambah Data </a>
  <a data-toogle="modal" href="<?php echo base_url('superadmin/Data_divisi')?>" class="btn btn-default btn-round">
  <i class="material-icons">assignment_ind</i>
  Daftar Divisi
  </a>
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> DAFTAR DEPARTEMENT KERJA</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="table_id" class="table table-hover">
                      <thead class="">
                        <th class="text-center">NO</th>
                        <th>Departement</th>
                  		<th class="text-right">Action</th>
                       </thead>
                  			<tbody>
                          <?php $no = 1 ;  foreach($departement as $result) :  ?>
                      			<tr>
                      				<td class="text-center"><?= $no++ ?></td>
                      				<td><?= $result->departement ?></td>
                      				<td class="td-actions text-right">
                                <a  data-id="<?php echo $result->id ?>" data-toggle="modal" data-target="#detail_departement" class="btn btn-info btn-fab btn-fab-mini btn-round">
      					                    <i class="material-icons">edit</i>
                                </a>
                                <a onclick="return confirm('hapus ?')" href="<?= base_url('superadmin/Departement/delete/'. $result->id) ?>" class="btn btn-danger btn-fab btn-fab-mini btn-round">
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
 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="add" class="modal fade">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
              Tambah Data Departement
                 <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
             </div>
             <div class="modal-body" id="hstatus">
                <form method="post"  action="#" id="adddepartement">
                  <label>Nama Departement</label>
                  <div class="form-group">
                    <input type="text"  name="departement" id="departement" class="form-control">
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
 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="detail_departement" class="modal fade">
     <div class="modal-dialog modal-xl">
         <div class="modal-content">
             <div class="modal-header">
             Edit Data Golongan
                 <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
             </div>

             <div class="modal-body" id="showup">
                
             </div>
             </div>
         </div>
     </div>
<!-- end of modal  -->

  <script type="text/javascript">
    $(function(){
      $("#adddepartement").on('submit',function(e){
        var nama  ;
        nama = document.getElementById('departement').value ;
        e.preventDefault();
        if(nama == "" ){
          alert("departement kerja kosong")
        }else  {
          $.ajax({
            url : "<?= base_url('superadmin/Departement/add') ?>" ,
            method : "POST" ,
            data :  "departement=" + nama ,
            beforeSend : function(){
              $("#submit").attr("disabled",true);   
            },
            complete : function(){
              $("#submit").attr("disabled",false);    
            },
            success : function(e){
              alert(e);
              window.location.href = "<?= base_url('superadmin/Departement') ?>"
            }
          })
        } 
      })
    })


        $("#detail_departement").on("show.bs.modal",function(event){
          var div = $(event.relatedTarget);
          var modal = $(this);
          var id = div.data('id');
            
            //kirim data ke controller 
            $.ajax({
              url : "<?php echo base_url("superadmin/Departement/modal") ?>",
              data : "id="+id ,
              method : "GET",
              success : function(response){
                $("#showup").html(response);
              }
            })
        })
  </script>