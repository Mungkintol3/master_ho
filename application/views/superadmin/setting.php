<?php

$akun = $this->m_admin->cari(array('id' => $this->session->userdata('id')),"akun")->row();
?>
<div class="content">
<div class="col-md-12">
  <a data-toggle="modal" data-target="#add" class="btn btn-danger btn-round">Tambah Admin </a>
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0"> Setting Akun</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  <form action="#" id="updatedata" method="post">
                    <label>Username</label>
                    <div class="form-group">
                       <input type="hidden" class="form-control" name="id" id="id" value="<?= $this->session->userdata('id') ?>">
                      <input type="text" class="form-control" name="nama" id="nama" value="<?= $akun->nama ?>">
                    </div>

                    <label>New Password</label>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" id="password" placeholder="isi jika ingin di ganti Password">
                     </div>

                      <label>Rewrite New-Password</label>
                     <div class="form-group">
                      <input type="password" class="form-control" name="password2" id="password2" placeholder="tulis ulang Password">
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-info">Perbarui Data</button>
                    </div>
                  </form>
              	</div>
              </div>
          </div>
      </div>
  </div>

<script type="text/javascript">
  $(function(){
     $("#updatedata").on('submit',function(e){
      e.preventDefault();
      var postData = new FormData(this);
      if(document.getElementById('nama').value == ""){
          alert('nama masih kosong')
      }
        else {
          $.ajax({
              url : "<?= base_url('superadmin/Setting/update') ?>" ,
              data : postData ,
              method : "POST" ,
              contentType : false ,
              cache  : false ,
              processData : false ,
              success : function(e){
                  alert(e);
                   window.location.href='<?= base_url("superadmin/Setting") ?>'
              }
          })
        }
     })
  })
</script>