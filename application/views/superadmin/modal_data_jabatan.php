<form method="post"  action="#" id="editjabatan">
    <label>Range Jabatan</label>
    <div class="form-group">
      <input type="hidden" id="id" name="id" value="<?= $results->id ?>" >
      <input type="text"  value="<?= $results->range ?>" name="range" id="kode_jabatan1" class="form-control">
    </div>
    <label>Nama Jabatan</label>
    <div class="form-group">
      <input type="text"  name="nama_jabatan" value="<?= $results->nama_jabatan ?>" id="nama_jabatan1" class="form-control">
    </div>
    <label>Keterangan</label>
    <div class="form-group">
      <textarea id="keterangan1" class="form-control"  name="keterangan"><?= $results->keterangan ?></textarea>
    </div>
    <button type="submit" id="submit1" class="btn btn-info">update</button>
</form>

<script type="text/javascript">
  $(function(){
      $("#editjabatan").on('submit',function(e){
        var postData = new FormData(this);
          e.preventDefault();
        var nama  , kode , keterangan ;
        nama    = document.getElementById('nama_jabatan1').value ;
        kode    = document.getElementById('kode_jabatan1').value ;
        ket     = document.getElementById('keterangan1').value ;
        id      = document.getElementById('id').value ;
        e.preventDefault();
        if(kode == "" ){
          alert("kode jabatan kosong")
        }else if(nama == "" ){
          alert("nama jabatan kosong")
        }else {
          $.ajax({
            url : "<?= base_url('superadmin/Jabatan/update') ?>" ,
            method : "POST" ,
            data : postData ,
            processData : false ,
            contentType : false ,
            cache : false ,
            beforeSend : function(){
              $("#submit1").attr("disabled",true);   
            },
            complete : function(){
              $("#submit1").attr("disabled",false);    
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