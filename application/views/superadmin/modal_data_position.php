<form method="post"  action="#" id="editposition">
    <label>Nama Position</label>
    <div class="form-group">
      <input type="hidden" id="id" name="id" value="<?= $results->id ?>" >
      <input type="text"  value="<?= $results->posisi ?>" name="position" id="position1" class="form-control">
    </div>
    <button type="submit" id="submit1" class="btn btn-info">update</button>
</form>

<script type="text/javascript">
  $(function(){
      $("#editposition").on('submit',function(e){
          e.preventDefault();
        var postData = new FormData(this)  ;
        var nama , id ;
        nama    = document.getElementById('position1').value ;
        e.preventDefault();
         if(nama == "" ){
          alert("nama position kosong")
        }else {
          $.ajax({
            url : "<?= base_url('superadmin/Position/update') ?>" ,
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
              window.location.href = "<?= base_url('superadmin/Position') ?>"
            }
          })
        } 
       })
    })
</script>