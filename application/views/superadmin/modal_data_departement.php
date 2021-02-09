<form method="post"  action="#" id="editdepartement">
    <label>Nama Departement</label>
    <div class="form-group">
      <input type="hidden" id="id" name="id" value="<?= $results->id ?>" >
      <input type="text"  value="<?= $results->departement ?>" name="departement1" id="departement1" class="form-control">
    </div>
    <button type="submit" id="submit1" class="btn btn-info">update</button>
</form>

<script type="text/javascript">
  $(function(){
      $("#editdepartement").on('submit',function(e){
          e.preventDefault();
        var nama  , id  ;
        nama    = document.getElementById('departement1').value ;
        id      = document.getElementById('id').value ;
        e.preventDefault();
         if(nama == "" ){
          alert("nama departement kosong")
        }else {
          $.ajax({
            url : "<?= base_url('superadmin/Departement/update') ?>" ,
            method : "POST" ,
            data :  "departement=" + nama +  "&id=" + id, 
            beforeSend : function(){
              $("#submit1").attr("disabled",true);   
            },
            complete : function(){
              $("#submit1").attr("disabled",false);    
            },
            success : function(e){
              alert(e);
              window.location.href = "<?= base_url('superadmin/Departement') ?>"
            }
          })
        } 
       })
    })
</script>