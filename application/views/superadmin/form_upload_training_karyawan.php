<div class="content">
<section class="container">
    <div class="row">
    <h3>Tambah Data Pelatihan Karyawan</h3>
    <div class="container-fluid">
    <?php if($this->session->flashdata("success"))  { ?>
      <div class="alert alert-info">
        <?= $this->session->flashdata("success") ?>
      </div>
    <?php }else if($this->session->flashdata("error"))  { ?>
      <div class="alert alert-danger">
        <?= $this->session->flashdata("error") ?>
      </div>
    <?php } ?>
    <div>
      <form method="post" onsubmit="return validasi()" enctype="multipart/form-data" action="" id="uploadpelatihan">
          <input type="file" onchange="return cekexe()" name="file" id="file" class="form-control">
        <a href="<?= base_url('assets/upload/format/Upload_Pelatihan.xlsx') ?>" class="btn btn-success btn-round">download format upload</a>

        <button type="submit" name="submit" class="btn btn-danger btn-round">Posting</button>
      </form>
      </div>
      
    </div>
    </div>

    <?php 
      if(isset($_POST['submit'])){ ?>
    <form action="<?= base_url('superadmin/Training_Histori/upload') ?>" method="post" >
      <table id="table" class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Id User</th>
            <th>NPK</th>
            <th>Jenis Training</th>
            <th>Tahun</th>
            <th>Keterangan</th>
          </tr>
        </thead>
        <tbody>
        <?php $no =1 ; foreach($sheet as $r ) :  ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $r['B'] ?></td>
            <td><?= $r['C'] ?></td>
            <td><?= $r['E'] ?></td>
            <td><?= $r['F'] ?></td>
            <td><?= $r['H'] ?></td>
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

    $(document).ready(function(){
      $("#table").DataTable();
    });
  </script>
  <?php if($this->session->flashdata('success')){ ?>
	<script type="text/javascript">
		Swal.fire({
			icon : "success",
			title : "Berhasil",
			text : "Karyawan tersimpan di data master",
			confirmButtonText: 'Kerens',
		})
	</script>
<?php } ?>

  </div>