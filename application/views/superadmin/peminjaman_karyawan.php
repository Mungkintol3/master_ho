<div class="content">
<div class="col-md-12">
  <a href="<?= base_url('superadmin/Pinjaman_karyawan/form_pinjam_kary') ?>" class="btn btn-success btn-round">
   <i class="material-icons">assignment_ind</i> 
  Pinjaman Karyawan</a>
            <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> DAFTAR Peminjaman Karyawan </h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th class="text-center">NO</th>
                        <th>Nama</th>
                        <th>NPK</th>
                        <th>Total Pinjaman</th>
                        <th>Tenor Pembayaran</th>
                      <th class="text-right">Action</th>
                       </thead>
                        <tbody>
                          <?php foreach($pinjaman as $result) :  ?>
                            <tr>
                              <td class="text-center">1</td>
                              <td><?= $result->nama ?></td>
                              <td><?= $result->npk ?></td>
                              <td><?= $result->total_pinjam ?></td>
                              <td><?= $result->tenor ?> x </td>
                              <td class="td-actions text-right">
                                <a  href="<?= base_url('superadmin/Pinjaman_karyawan/rincian/' . $result->id_pinjam) ?>" class="btn btn-success btn-fab btn-fab-mini btn-round">
                                    <i class="material-icons">edit</i>
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

  </script>