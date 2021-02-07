<div class="content">

<section class="container">
    <div class="row">
    <?php if($this->session->flashdata("success"))  { ?>
      <div class="alert alert-info">
        <?= $this->session->flashdata("success") ?>
      </div>
    <?php }else if($this->session->flashdata("error"))  { ?>
      <div class="alert alert-danger">
        <?= $this->session->flashdata("error") ?>
      </div>
    <?php } ?>
    <h3>Tambah Data Pegawai</h3>
    <div class="container-fluid">
    <div>
      <form method="post" onsubmit="return validasi()" enctype="multipart/form-data" action="" id="uploadpegawai">
          <input type="file" onchange="return cekexe()" name="file" id="file" class="form-control">
        <a href="<?= base_url('assets/upload/upload_pegawai.xlsx') ?>" class="btn btn-success btn-round">download format upload</a>
        <button type="submit" name="submit" class="btn btn-danger btn-round">Posting</button>
      </form>
      </div>
      
    </div>
    </div>

    <?php 
      if(isset($_POST['submit'])){ ?>
    <form action="<?= base_url('superadmin/TambahKaryawan/upload') ?>" method="post" >
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NPK</th>
            <th>Tempat,Tanggal Lahir</th>
            <th>Status Karyawan</th>
          </tr>
        </thead>
        <tbody>
        <?php $no =1 ; foreach($sheet as $r ) :  ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $r['B'] ?></td>
            <td><?= $r['D'] ?></td>
            <td><?= $r['F'] .  "," .$r['G']  ?></td>
            <td><?= $r['N']  ?></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
      <div class="form-group">
        <button class="btn btn-info">posting data</button>
      </div>
    </form> 
    <?php }
    ?>
  </section>

  <script type="text/javascript">
    function cekexe(){
      const file = document.getElementById('file');
      const path  = file.value ;
      const exe = /(\.xlsx)$/i;
      if(!exe.exec(path)){
        alert("file salah");
        file.value = "";
        return ;
      }
    }

    function validasi(){
      const file = document.getElementById('file');
      if(file.value == "" || file.value == null){
        alert("file masih kosong");
        return false  ;
      }
    }
  </script>

  </div>