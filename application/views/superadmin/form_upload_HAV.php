<div class="content">
<section class="container">
    <div class="row">
    <h3>Human Assets Value</h3>
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
      <form method="post" onsubmit="return validasi()" enctype="multipart/form-data" action="" id="uploadnilai">
          <input type="file" onchange="return cekexe()" name="file" id="file" class="form-control">
        <a href="<?= base_url('assets/upload/format/Upload_HAV.xlsx') ?>" class="btn btn-success btn-round">download format upload</a>

        <button type="submit" name="submit" class="btn btn-danger btn-round">Posting</button>
      </form>
      </div>
      
    </div>
    </div>

    <?php 
      if(isset($_POST['submit'])){ ?>
    <form action="<?= base_url('superadmin/Human_assets_value/Upload') ?>" method="post" >
      <table id="table" class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>NPK</th>
            <th>Nama</th>
            <th>Asset Value</th>
            <th>Kekuatan</th>
            <th>Kelemahan</th>
            <th>Keterangan</th>
            <th>Tanggal</th>
          </tr>
        </thead>
        <tbody>
        <?php $no =1 ; foreach($sheet as $r ) :  ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $r['C'] ?></td>
            <td><?= $r['D'] ?></td>
            <td><?= $r['E'] ?></td>
            <td><?= $r['F'] ?></td>
            <td><?= $r['G'] ?></td>
            <td><?= $r['H'] ?></td>
            <td><?= $r['J'] ?></td>
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