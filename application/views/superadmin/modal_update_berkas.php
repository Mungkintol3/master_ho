     <div class="container-fluid mt-5">
      <div class="card">
      	<div class="card-body">
      		<h4>Pilih File yang ingin di upload </h4>
          <div class="btn-group ">
            <button type="button" class="col-lg-12 btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Select Nama File Upload
            </button>
            <div class="dropdown-menu">
              <li value="1" class="dropdown-item" href="#">KTP</li>
              <li value="2"  class="dropdown-item" href="#">Buku Rekening</li>
              <li value="3"  class="dropdown-item" href="#">Surat Lamaran</li>
              <li value="4"  class="dropdown-item" href="#">Daftar Riwayat Hidup</li>
              <li value="5"  class="dropdown-item" href="#">Ijazah</li>
              <li value="6"  class="dropdown-item" href="#">Surat Sehat</li>
              <li value="7"  class="dropdown-item" href="#">Surat Referensi</li>
              <li value="8"  class="dropdown-item" href="#">Surat Domisili</li>
              <li value="9"  class="dropdown-item" href="#">SKCK</li>
              <li value="10"  class="dropdown-item" href="#">Kartu Keluarga</li>
              <li value="11"  class="dropdown-item" href="#">NPWP</li>
            </div>
          </div>
      	</div>
      </div>
      <hr>
      <div class="card" style="position: relative;display: flex;">
          <center><img id="loading" style="display:none ;height: 80px;width: 80px;" src="<?= base_url('assets/Loading_1.gif') ?>" ></center>
      </div>
      <div id="tampil-form"></div>

      <script type="text/javascript">
      $(document).ready(function(){
        $("li").click(function(){
          var keyword = $(this).val();
          if(keyword == ""){
            $("#tampil-form").html("");
          }else {
            $.ajax({
              url : "<?= base_url('superadmin/Upload_berkas/loadForm') ?>",
              method : "GET" ,
              contentType : false ,
              data : 'pilih='+keyword,
              success : function(response){
                $("#tampil-form").html(response);
              }
            })
          }

          //$("#tampil-form").html(keyword);

        })
      })
    </script>