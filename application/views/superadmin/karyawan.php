

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
                          <a href="#" class="btn btn-success btn-fab btn-fab-mini btn-round">
                            <i class="material-icons">person</i>
                          </a>
                          <a href="<?= base_url('superadmin/Karyawan/Edit_karyawan/' . $result->id_user) ?>" class="btn btn-info btn-fab btn-fab-mini btn-round">
                            <i class="material-icons">edit</i>
                          </a>
                          <a onclick="return confirm('hapus semua data karyawan')" href="<?= base_url('superadmin/Karyawan/delete/' . $result->id_user) ?>" class="btn btn-danger btn-fab btn-fab-mini btn-round">
                            <i class="material-icons">close</i>
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
</div>
      <script type="text/javascript">
            $(document).ready( function () {
              $('#table_id').DataTable( {
                    "pagingType": "full_numbers"
                } );
            } );
          </script>