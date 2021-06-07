<div class="content">
<div class="col-md-12">
  <a data-toggle="modal" data-target="#add" class="btn btn-danger btn-round">Tambah Data</a>
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
                        <th>Fasilitas</th>
                        <th>Aktif Klaim</th>
                        <th>Periode Klaim</th>
                        <th>Golongan</th>
                       </thead>
                  			<tbody>
                          <?php $no = 1 ;  foreach($fasilitas as $result) :  ?>
                      			<tr>
                      				<td class="text-center"><?= $no++ ?></td>
                      				<td><?= $result->fasilitas ?></td>
                                    <td><?= $result->aktif_klaim ?></td>
                                    <td><?= $result->periode_klaim ?></td>
                                    <td><?= $result->golongan ?></td>
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
              Tambah Data Fasilitas
                 <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
             </div>
             <div class="modal-body" id="hstatus">
                <form method="post"  action="#" id="addfasilitas">
                  <label>Nama Fasilitas</label>
                  <div class="form-group">
                    <input type="text"  name="fasilitas" id="fasilitas" class="form-control">
                  </div>
                  <label>Aktif Klaim</label>
                  <div class="form-group">
                   <select name="aktif_klaim" id="aktif_klaim" class="form-control" placeholder="Pilih Aktif Klaim">
                            <option selected="true" disabled="disabled">Pilih Aktif Klaim</option>
                            <option>1 Tahun Masa Kerja</option>
                            <option>1 Tahun Masa Kerja</option>
                            <option>2 Tahun Masa Kerja</option>
                            <option>3 Tahun Masa Kerja</option>
                   </select>
                  </div>
                  <label>Periode Klaim</label>
                  <div class="form-group">
                    <select name="periode_klaim" id="periode_klaim" class="form-control">
                          <option selected="true" disabled="disabled">Pilih Periode Klaim</option>
                          <option>2 Tahun Masa Kerja</option>
                          <option>Kredit Lunas</option>
                    </select>
                  </div>
                  <label>Golongan</label>
                  <div class="form-group">
                   <input type="text"  name="golongan" id="golongan" class="form-control">
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
      $("#addfasilitas").on('submit',function(e){
        var postData = new FormData(this);
        e.preventDefault();
        if(document.getElementById('fasilitas').value == "" ){
          alert("Fasilitas Karyawan Masih Kosong")
        }else  {
          $.ajax({
            url : "<?= base_url('superadmin/Fasilitas/add') ?>" ,
            method : "POST" ,
            data :  postData ,
            processData : false,
            contentType : false,
            beforeSend : function(){
              $("#submit").attr("disabled",true);   
            },
            complete : function(){
              $("#submit").attr("disabled",false);    
            },
            success : function(e){
              if(e = "sukses"){
                alert(e);
                window.location.href = "<?= base_url('superadmin/Fasilitas') ?>"
              }else{
                  alert("gagal")
              }
            }
          })
        } 
      })
    })


        $("#detail_fasilitas").on("show.bs.modal",function(event){
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