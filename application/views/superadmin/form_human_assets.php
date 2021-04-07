<div class="content">
<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> Input Human Assets Value</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  
                    <div class="form-group">
                      <button type="button " data-toggle="modal" data-target="#selectkaryawan" class="btn btn-success">Cari Karyawan <i class="fa fa-search"></i> </button>
                    </div>
                  <form id="formhumanassets" method="post" class="form-horizontal">
                    <div class="form-group">
                      <input type="hidden" name="id" id="id">
                      <input type="hidden" name="id_user" id="id_user">
                      <input readonly="" type="text" id="nama" name="nama" placeholder="Enter Nama" class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly="" type="text" id="npk" name="npk" placeholder="Enter NPK" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="exampleFormControlSelect1">Human Assets Value</label>
                        <select class="form-control selectpicker" data-style="btn btn-link" id="assets_value" name="assets_value">
                          <option >Star</option>
                          <option>Futere Star</option>
                          <option>Potential Candidate</option>
                          <option>Raw Diamond</option>
                          <option>Top Performers</option>
                          <option>Strong Performers</option>
                          <option>Career Person</option>
                          <option>Most Unfit Employee</option>
                          <option>Unfit Employee</option>
                          <option>Problem Employee</option>
                          <option>Maksimal Contributor</option>
                          <option>Contributor</option>
                          <option>Minimal Contributor</option>
                          <option>DeadWood</option>
                        </select>
                      </div>
                      
                    <div class="form-group">
                      <input  type="text" id="kekuatan" name="kekuatan" placeholder="Enter Kekuatan" class="form-control">
                    </div>

                    <div class="form-group">
                      <input  type="text" id="kelemahan" name="kelemahan" placeholder="Enter Kelemahan" class="form-control">
                    </div>


                    <div class="form-group">
                      <input  type="text" id="tanggal" name="tgl" placeholder="Enter Tahun" class="form-control">
                    </div>

                    <div class="form-group">
                      <textarea class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan jika diperlukan"></textarea>
                    </div>
                    <button type="submit" class="btn btn-info">Simpan Perubahan</button>
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
                           >
                            <?= $f->nama ?>
                        </a>
                      </td>
                      <td><?= $f->npk ?></td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
                <span class="text-danger"><small><i>*klik nama untuk pilih karyawan*</i></small></span>
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
        document.getElementById("id").value = $(this).attr('data-id');
        document.getElementById("id_user").value = $(this).attr('data-id_user');
        $('#selectkaryawan').modal('hide');
    })

    $(function(){
      $("#formhumanassets").on('submit',function(e){
        var postData = new FormData(this);
        e.preventDefault();
          if(document.getElementById('nama').value == ""){
            alert("data karyawan masih kosong");
          }else if(document.getElementById('assets_value').value == ""){
            alert("human assets masih kosong");
          }else if(document.getElementById('kekuatan').value == ""){
            alert("kekuatan masih kosong");
          }else if(document.getElementById('kelemahan').value == ""){
            alert("kelemahan masih kosong");
          }else if(document.getElementById('tanggal').value == ""){
            alert("tanggal masih kosong");
          } else {
            $.ajax({
              url : "<?= base_url('superadmin/Human_assets_value/add') ?>" ,
              method : "POST" ,
              data : postData ,
              processData : false ,
              contentType : false ,
              cache : false ,
              success : function(e){
                //alert(e);
                if(e = "sukses"){
                  alert(e)
                  window.location.href="<?= base_url('superadmin/Human_assets_value/form_add') ?>"
                }else {
                  alert('gagal');
                }
              }
            })
          }
      })
    })
  </script>