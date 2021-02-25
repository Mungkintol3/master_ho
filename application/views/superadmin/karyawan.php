
<div class="content">
<div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> DAFTAR KARYAWAN</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
              <table  id="table_id" class="cell-border">
              <thead>
                  <tr>
                      <th class="text-center">NPK</th>
                      <th class="text-center">Nama</th>
                      <th class="text-center">Department</th>
                      <th class="text-center">Divisi</th>
                      <th class="text-center">Posisi</th>
                      <th class="text-center">Wilayah</th>
                      <th class="text-center">Action</th>
                  </tr>
              </thead>
              <tbody>
                <?php foreach ($karyawan as $result) :?>
                  <tr>
                     <td class="text-center"><?= $result->npk ?></td>
                     <td class="text-center"><?= $result->nama?></td>
                     <td class="text-center"><?= $result->departement?></td>
                     <td class="text-center"><?= $result->divisi?></td>
                     <td class="text-center"><?= $result->position?></td>
                     <td class="text-center"><?= $result->wilayah?></td>
                     <td class="td-actions text-center">  
                          <a type="button" class="btn btn-success btn-fab btn-fab-mini btn-round" data-toggle="modal" data-target="#berkas_karyawan">
                            <i class="material-icons">person</i>
                          </a>
                          <a href="<?= base_url('superadmin/Karyawan/Edit_karyawan/' . $result->id_user) ?>" class="btn btn-info btn-fab btn-fab-mini btn-round">
                            <i class="material-icons">edit</i>
                          </a>
                          <a onclick="return confirm('hapus semua data karyawan')" href="<?= base_url('superadmin/Karyawan/delete/' . $result->id_user) ?>" class="btn btn-danger btn-fab btn-fab-mini btn-round">
                            <i class="material-icons">close</i>
                          </a>
                          <a  href="<?= base_url('superadmin/Cetak/view/' . $result->id_user) ?>" class="btn btn-danger btn-fab btn-fab-mini btn-round">
                            <i class="material-icons">cetak</i>
                          </a>
                     </td>
                  </tr>
                  <?php endforeach  ?>  
              </tbody>
             </table>
      </div>
    </div>
    <style type="text/css">
      #tambahkaryawan{
        float: right;
      }  
    </style>
     <a id="tambahkaryawan" href="<?= base_url('superadmin/TambahKaryawan') ?>" class="btn btn-success">Tambah Data </a>
  </div>
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="berkas_karyawan" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                       <h3 align="center">Berkas Karyawan</h3>
                        <form method="post" id="#">
                                    <div class="form-row">
                            
                                  </div>
                    </form>
                    </div>
                  </div>
                </div>
<!-- End of modal update biodata karyawan -->
</div>

<script type="text/javascript">
      //tampilkan data berkas dan tracking pkwt user di modal
     $('#berkas_karyawan').on('show.bs.modal', function (event) {
             var div = $(event.relatedTarget)  ;// Tombol dimana modal di tampilkan
             var modal          = $(this) ;
             var id = div.data('id');
             // kirim data ke controller anggota lewat ajax
             $.ajax({
                url :"<?= base_url("superadmin/Karyawan/loadModal") ?>",
                method : "GET",
                data : "id"+ id ,
                success : function(response){
                    $("#berkas_karyawan").html(response);
                }
             })
         });
</script>