
<form method="post" action="#" id="updateData">
          <div class="form-row ">
          <div class="form-group col-md-6">
            <label>No KTP</label>
            <input type="text" name="no_ktp" value="<?= $karyawan->no_ktp ?>" id="no_ktp1" class="form-control" placeholder=" Nomor Induk Kependudukan">
          </div>
          <div class="form-group col-md-6">
            <label>No NPWP</label>
            <input type="text" name="no_npwp" value="<?= $karyawan->no_npwp ?>" id="no_npwp1" class="form-control" placeholder="  Nomor Pokok Wajib Pajak">
          </div>
          <div class="form-group col-md-6">
            <label>Status Pajak</label>
            <input type="text" name="status_pajak" value="<?= $karyawan->status_pajak ?>" id="status_pajak1" class="form-control" placeholder="Status Pajak">
          </div>
          <div class="form-group col-md-6">
            <label>No Kartu Keluarga</label>
            <input type="text" name="no_kk" value="<?= $karyawan->no_kk ?>" id="no_kk1" class="form-control" placeholder=" Nomor Kartu Keluarga">
          </div>
          <div class="form-group col-md-6">
            <label>Status Perkawinan</label>
            <input type="text" name="status_kawin" value="<?= $karyawan->status_kawin ?>" id="status_kawin1" class="form-control" placeholder=" Status Perkawinan">
          </div>
          <div class="form-group col-md-6">
            <label>Alamat KTP</label>
            <textarea name="alamat_ktp"  id="alamat_ktp1" class="form-control" placeholder=" Alamat KTP"><?= $karyawan->alamat_ktp ?></textarea>
          </div>
          <div class="form-group col-md-6">
            <label>Address</label>
            <textarea name="address"  id="address1" class="form-control" placeholder=" Alamat Sesuai Domisili"><?= $karyawan->address ?></textarea>
          </div>
          <div class="form-group col-md-6">
            <label>Email</label>
            <input type="email" name="email" value="<?= $karyawan->email ?>" id="email1" class="form-control" placeholder=" Alamat Email">
          </div>
          <div class="form-group col-md-6">
            <label>No Telpon</label>
            <input type="text" name="no_telp" value="<?= $karyawan->no_telp ?>" id="no_telp1" class="form-control" placeholder=" Nomor Handphone">
          </div>
          <div class="form-group col-md-6">
            <label>Kontak Darurat</label>
            <input type="tel" name="kontak_darurat" value="<?= $karyawan->kontak_darurat ?>" id="kontak_darurat1" class="form-control" placeholder="  Nomor Kontak Darurat">
          </div>
        </div>
    <button type="submit" id="submit" class="btn btn-primary">Simpan Data</button>
</form>
<script type="text/javascript">
   $(document).ready(function(){
          $("#updateData").on('submit',function(e){
            var postData = new FormData(this);
            e.preventDefault();
            if(document.getElementById('no_ktp1').value == "" ){
              alert("no ktp masih kosong")
            }else if(document.getElementById('no_npwp1').value == "" ){
              alert("no npwp masih kosong")
            }else if(document.getElementById('status_pajak1').value == "" ){
              alert("status pajak masih kosong")
            }else if(document.getElementById('no_kk1').value == "" ){
              alert("no kartu keluarga kosong")
            }else if(document.getElementById('status_kawin1').value == "" ){
              alert("status kawin masih kosong")
            }else if(document.getElementById('alamat_ktp1').value == "" ){
              alert("alamat ktp masih kosong")
            }else if(document.getElementById('address1').value == "" ){
              alert("address masih kosong")
            }else if(document.getElementById('email1').value == "" ){
              alert("email masih kosong")
            }else if(document.getElementById('no_telp1').value == "" ){
              alert("no telpon masih kosong")
            }else if(document.getElementById('kontak_darurat1').value == "" ){
              alert("kontak darurat masih kosong")
            }else {
              $.ajax({
                url : "<?= base_url('superadmin/karyawan/UpdateBiodata/' . $karyawan->id) ?>" ,
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
                  // alert(e);
                   if(e = "sukses"){
                     alert(e);
                     window.location.href="<?= base_url('superadmin/Karyawan/Edit_karyawan/' . $karyawan->id_user) ?>"
                   }else {
                      alert("gagal")
                   }
                }
              })
            }
          })
    })
</script>