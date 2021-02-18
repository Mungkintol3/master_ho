<div class="content">
<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0">Form Pembayaran Karyawan</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  
                  <form id="bayarPinjam" enctype="multipart/form-data" method="post" action="#" class="form-horizontal">
                     <div class="form-group">
                      <input type="hidden" value="<?= $peminjam->id_user ?>"  name="id_user" id="id_user">
                      <input type="hidden" value="<?= $peminjam->total_bunga ?>"  name="bunga" id="bunga">
                      <input type="hidden" value="<?= $peminjam->pokok ?>"  name="pokok" id="pokok">
                      <label>Nama Peminjam</label>
                      <input readonly="" value="<?= $peminjam->nama ?>" type="text" name="nama" id="nama" placeholder="Enter Nama" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>NPK</label>
                      <input readonly="" type="text" value="<?= $peminjam->npk ?>" name="npk" id="npk" placeholder="Enter NPK" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>ID Peminjaman</label>
                      <input readonly="" type="text" value="<?= $peminjam->id_pinjam ?>" name="id_pinjam" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Tenor Pembayaran</label>
                      <select name="pembayaran_ke" id="pembayaran_ke" class="form-control">
                        <option value="">Pembayaran Ke</option>
                        <?php for($i = $bayar+1 ; $i <= $peminjam->tenor ; $i++){ ?>
                          <option value="<?= $i ?>">ke - <?= $i ?></option>
                        <?php } ?>
                      </select>
                    </div> 

                    <div class="form-group">
                      <label>Jumlah Harus Dibayar</label>
                      <input readonly="" id="jumlah_bayar" name="jumlah_bayar" type="number" value="<?= $peminjam->setor_perbulan ?>" placeholder="" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Tanggal</label>
                      <input id="tanggal" value="<?= date('Y-m-d') ?>" name="tanggal" type="text"  placeholder="" class="form-control">
                    </div>
                    <?php if($peminjam->tenor == $bayar) { ?>
                        <a href="javascript:info()" class="btn btn-info">
                          Informasi
                        </a>
                    <?php }else { ?>
                      <button type="submit" id="submit" class="btn btn-info">Simpan Perubahan</button>
                    <?php } ?>
                  </form>
                  <small class="text-danger"><i>*tenor terbayar <?= $bayar . '/' . $peminjam->tenor ?>*</i> </small>
              	</div>
              </div>
          </div>
      </div>
  </div>


  <script type="text/javascript">

  function info(){
    alert('tenor sudah terbayar semua');
  }

      $(function(){
        
          $("#bayarPinjam").on('submit',function(e){
            var postData = new FormData(this);
            e.preventDefault();
            if(document.getElementById('npk').value == "" ){
              alert("data karyawan masih kosong")
            }else if(document.getElementById('pembayaran_ke').value == "" ){
              alert("tenor pembayaran masih kosong")
            }else if(document.getElementById('tanggal').value == "" ){
              alert("tanggal pembayaran masih kosong")
            }else {
              $.ajax({
                url : "<?= base_url('superadmin/Pembayaran/bayar_pinjaman') ?>" ,
                method : "POST" ,
                data : postData,
                processData: false,
                contentType: false,
                cache  : false ,
                beforeSend : function(){
                  $("#submit").attr("disabled",true);   
                },
                complete : function(){
                  $("#submit").attr("disabled",false);    
                },
                success : function(e){
                   //alert(e);
                   if(e = "sukses"){
                     alert(e);
                     window.location.href="<?= base_url('superadmin/Pinjaman_karyawan/') ?>"
                   }else {
                      alert("gagal")
                   }
                }
              })
            }
          })



    })

    $('.click').on('click',function(e){
      document.getElementById("npk").value       = $(this).attr('data-npk');
      document.getElementById("nama").value      = $(this).attr('data-nama');
      document.getElementById("id").value        = $(this).attr('data-id');
      document.getElementById("id_user").value   = $(this).attr('data-id_user');
      $('#selectkaryawan').modal('hide');
    })



  </script>