<form method="post"  action="#" id="editgolongan">
      <label>Kode Golongan</label>
      <div class="form-group">
        <input type="hidden" value="<?= $results->id ?>" id="id" name="id">
        <input type="text"  name="kode_golongan"  value="<?= $results->kode_golongan ?>" id="kode_golongan1" class="form-control">
      </div>
      <label>Golongan Kerja</label>
      <div class="form-group">
        <input type="text"  name="golongan_kerja" value="<?= $results->golongan_kerja ?>" id="golongan_kerja1" class="form-control">
      </div>
      <label>Keterangan</label>
      <div class="form-group">
        <textarea id="keterangan1" class="form-control" name="keterangan"><?= $results->keterangan ?></textarea>
      </div>
      <button type="submit" id="submit" class="btn btn-info">posting</button>
    </form>

  <script type="text/javascript">
    $(function(){
      $("#editgolongan").on('submit',function(e){
        var nama  , kode , keterangan ;
        nama = document.getElementById('golongan_kerja1').value ;
        kode = document.getElementById('kode_golongan1').value ;
        ket = document.getElementById('keterangan1').value ;
        id = document.getElementById('id').value ;
        e.preventDefault();
        if(kode == "" ){
          alert("kode golongan kerja kosong")
        }else if(nama == "" ){
          alert("nama golongan kerja kosong")
        }else  {
          $.ajax({
            url : "<?= base_url('superadmin/Golongan/update') ?>" ,
            method : "POST" ,
            data :  "golongan_kerja=" + nama + "&kode_golongan="+ kode + "&keterangan="+ ket + "&id="+ id , 
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
  </script>