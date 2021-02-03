<div class="content">
<div class="col-md-12">
  <a data-toggle="modal" data-target="#addgolongan" class="btn btn-danger">Tambah Data </a>
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> DAFTAR GOLONGAN KERJA</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th class="text-center">NO</th>
                        <th>Kode Golongan</th>
                      	<th>Golongan Kerja</th>
                  		<th>Keterangan</th>
                  		<th class="text-right">Action</th>
                       </thead>
                  			<tbody>
                          <?php $no = 1 ;  foreach($golongan as $result) :  ?>
                      			<tr>
                      				<td class="text-center"><?= $no++ ?></td>
                      				<td><?= $result->kode_golongan ?></td>
                              <td><?= $result->golongan_kerja ?></td>
                              <td><?= $result->keterangan ?></td>
                      				<td class="td-actions text-right">
                                <a  data-id="<?php echo $result->id ?>" data-toggle="modal" data-target="#detail_gol" class="btn-danger btn-sm">
      					                    <i class="material-icons">edit</i>
                                </a>
                                <a onclick="return confirm('hapus ?')" href="<?= base_url('superadmin/Golongan/delete/'. $result->id) ?>" class="btn-danger btn-sm">
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
 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="addgolongan" class="modal fade">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
              Tambah Data Golongan
                 <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
             </div>
             <div class="modal-body" id="hstatus">
                <form method="post"  action="#" id="addgolongan">
                  <label>Kode Golongan</label>
                  <div class="form-group">
                    <input type="text"  name="kode_golongan" id="kode_golongan" class="form-control">
                  </div>
                  <label>Golongan Kerja</label>
                  <div class="form-group">
                    <input type="text"  name="golongan_kerja" id="golongan_kerja" class="form-control">
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
 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="detail_gol" class="modal fade">
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
      $("#addgolongan").on('submit',function(e){
        var nama  , kode , keterangan ;
        nama = document.getElementById('golongan_kerja').value ;
        kode = document.getElementById('kode_golongan').value ;
        ket = document.getElementById('keterangan').value ;
        e.preventDefault();
        if(kode == "" ){
          alert("kode golongan kerja kosong")
        }else if(nama == "" ){
          alert("nama golongan kerja kosong")
        }else  {
          $.ajax({
            url : "<?= base_url('superadmin/Golongan/add') ?>" ,
            method : "POST" ,
            data :  "golongan_kerja=" + nama + "&kode_golongan="+ kode + "&keterangan="+ ket, 
            beforeSend : function(){
              $("#submit").attr("disabled",true);   
            },
            complete : function(){
              $("#submit").attr("disabled",false);    
            },
            success : function(e){
              alert(e);
              window.location.href = "<?= base_url('superadmin/Golongan') ?>"
            }
          })
        } 
      })
    })


        $("#detail_gol").on("show.bs.modal",function(event){
          var div = $(event.relatedTarget);
          var modal = $(this);
          var id = div.data('id');
            
            //kirim data ke controller 
            $.ajax({
              url : "<?php echo base_url("superadmin/Golongan/modal") ?>",
              data : "id="+id ,
              method : "GET",
              success : function(response){
                $("#showup").html(response);
              }
            })
        })
  </script>