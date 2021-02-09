<form method="post"  action="#" id="editdivisi">
    <label>Nama Divisi</label>
    <div class="form-group">
      <input type="hidden" id="id" name="id" value="<?= $results->id ?>" >
      <input type="text"  value="<?= $results->divisi ?>" name="" id="divisi1" class="form-control">
    </div>
    <button type="submit" id="submit1" class="btn btn-info">update</button>
</form>

<script type="text/javascript">
  $(function(){
      $("#editdivisi").on('submit',function(e){
          e.preventDefault();
        var nama  , id  ;
        nama    = document.getElementById('divisi1').value ;
        id      = document.getElementById('id').value ;
        e.preventDefault();
         if(nama == "" ){
          alert("nama divisi kosong")
        }else {
          $.ajax({
            url : "<?= base_url('superadmin/Data_divisi/update') ?>" ,
            method : "POST" ,
            data :  "divisi=" + nama +  "&id=" + id, 
            beforeSend : function(){
              $("#submit1").attr("disabled",true);   
            },
            complete : function(){
              $("#submit1").attr("disabled",false);    
            },
            success : function(e){
              alert(e);
              window.location.href = "<?= base_url('superadmin/Data_divisi') ?>"
            }
          })
        } 
       })
    })
</script>