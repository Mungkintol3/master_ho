<div class="content">
<div class="col-md-12">
  <a data-toggle="modal" data-target="#add" class="btn btn-danger">Tambah Data </a>
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> DAFTAR POSITION KERJA</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th class="text-center">NO</th>
                        <th>Position</th>
                  		<th class="text-right">Action</th>
                       </thead>
                  			<tbody>
                          <?php $no = 1 ;  foreach($position as $result) :  ?>
                      			<tr>
                      				<td class="text-center"><?= $no++ ?></td>
                      				<td><?= $result->posisi ?></td>
                      				<td class="td-actions text-right">
                                <a  data-id="<?php echo $result->id ?>" data-toggle="modal" data-target="#detail_position" class="btn-danger btn-sm">
      					                    <i class="material-icons">edit</i>
                                </a>
                                <a onclick="return confirm('hapus ?')" href="<?= base_url('superadmin/Position/delete/'. $result->id) ?>" class="btn-danger btn-sm">
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
              Tambah Data Position
                 <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
             </div>
             <div class="modal-body" id="hstatus">
                <form method="post"  action="#" id="addPosition">
                  <label>Nama Position</label>
                  <div class="form-group">
                    <input type="text"  name="" id="position" class="form-control">
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
 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="detail_position" class="modal fade">
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
      $("#addPosition").on('submit',function(e){
        var nama  ;
        nama = document.getElementById('position').value ;
        e.preventDefault();
        if(nama == "" ){
          alert("position kerja kosong")
        }else  {
          $.ajax({
            url : "<?= base_url('superadmin/Position/add') ?>" ,
            method : "POST" ,
            data :  "position=" + nama ,
            beforeSend : function(){
              $("#submit").attr("disabled",true);   
            },
            complete : function(){
              $("#submit").attr("disabled",false);    
            },
            success : function(e){
              alert(e);
              window.location.href = "<?= base_url('superadmin/Position') ?>"
            }
          })
        } 
      })
    })


        $("#detail_position").on("show.bs.modal",function(event){
          var div = $(event.relatedTarget);
          var modal = $(this);
          var id = div.data('id');
            
            //kirim data ke controller 
            $.ajax({
              url : "<?php echo base_url("superadmin/Position/modal") ?>",
              data : "id="+id ,
              method : "GET",
              success : function(response){
                $("#showup").html(response);
              }
            })
        })
  </script>