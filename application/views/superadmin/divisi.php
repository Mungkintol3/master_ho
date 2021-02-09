<div class="content">
<div class="col-md-12">
  <a data-toggle="modal" data-target="#add" class="btn btn-danger">Tambah Data </a>
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> DAFTAR DIVISI KERJA</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th class="text-center">NO</th>
                        <th>Divisi</th>
                  		<th class="text-right">Action</th>
                       </thead>
                  			<tbody>
                          <?php $no = 1 ;  foreach($divisi as $result) :  ?>
                      			<tr>
                      				<td class="text-center"><?= $no++ ?></td>
                      				<td><?= $result->divisi ?></td>
                      				<td class="td-actions text-right">
                                <a  data-id="<?php echo $result->id ?>" data-toggle="modal" data-target="#detail_divisi" class="btn-danger btn-sm">
      					                    <i class="material-icons">edit</i>
                                </a>
                                <a onclick="return confirm('hapus ?')" href="<?= base_url('superadmin/Data_divisi/delete/'. $result->id) ?>" class="btn-danger btn-sm">
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
              Tambah Data divisi
                 <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
             </div>
             <div class="modal-body" id="hstatus">
                <form method="post"  action="#" id="adddivisi">
                  <label>Nama divisi</label>
                  <div class="form-group">
                    <input type="text"  name="divisi" id="divisi" class="form-control">
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
 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="detail_divisi" class="modal fade">
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
      $("#adddivisi").on('submit',function(e){
        var nama  ;
        nama = document.getElementById('divisi').value ;
        e.preventDefault();
        if(nama == "" ){
          alert("divisi kerja kosong")
        }else  {
          $.ajax({
            url : "<?= base_url('superadmin/Data_divisi/add') ?>" ,
            method : "POST" ,
            data :  "divisi=" + nama ,
            beforeSend : function(){
              $("#submit").attr("disabled",true);   
            },
            complete : function(){
              $("#submit").attr("disabled",false);    
            },
            success : function(e){
              alert(e);
              window.location.href = "<?= base_url('superadmin/Data_divisi') ?>"
            }
          })
        } 
      })
    })


        $("#detail_divisi").on("show.bs.modal",function(event){
          var div = $(event.relatedTarget);
          var modal = $(this);
          var id = div.data('id');
            
            //kirim data ke controller 
            $.ajax({
              url : "<?php echo base_url("superadmin/Data_divisi/modal") ?>",
              data : "id="+id ,
              method : "GET",
              success : function(response){
                $("#showup").html(response);
              }
            })
        })
  </script>