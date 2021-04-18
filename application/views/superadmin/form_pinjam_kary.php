<div class="content">
<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0">Form Peminjaman Karyawan</h4>
                  <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
                </div>
                <div class="card-body">
                  
                    <div class="form-group">
                      <button type="button " data-toggle="modal" data-target="#selectkaryawan" class="btn btn-success">Cari Karyawan <i class="fa fa-search"></i> </button>
                    </div>
                  <form id="mutasijabatan" enctype="multipart/form-data" method="post" action="#" class="form-horizontal">
                     <div class="form-group">
                      <input type="hidden" name="id" id="id">
                      <input type="hidden" name="id_user" id="id_user">
                      <input readonly="" type="text" name="nama" id="nama" placeholder="Enter Nama" class="form-control">
                    </div>

                    <div class="form-group">
                      <input readonly="" type="text" name="npk" id="npk" placeholder="Enter NPK" class="form-control">
                    </div>

                    <div class="form-group">
                      <select name="vendor_pinjam" id="vendor_pinjam" placeholder="Enter NPK" class="form-control">
                        <option value="">Pilih Vendor Pinjam</option>
                        <option>KAI</option>
                        <option>KOP SIGAP</option>
                      </select>
                    </div> 

                    <div class="form-group">
                      <label>Jumlah Peminjaman</label>
                      <input  type="number" id="total_pinjam" name="total_pinjam" placeholder="" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Jumlah Tenor Pembayaran</label>
                    <select class="form-control" name="tenor" id="tenor">
                      <option value="">Pilih Tenor Pembayaran</option>
                      <?php for($i = 1 ; $i <= 24 ; $i++) { ?>
                          <option data-tenor= "<?= $i ?>" value="<?= $i ?>"><?= $i . " kali bayar" ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <br>
                  <!--   <div class="form-group">
                      <label>Bungan Peminjaman</label>
                      <input  type="text" id="persentase_bunga" name="persentase_bunga" class="form-control">
                      <small class="text-danger"><i>*isi manual (%)*</i> </small>
                    </div> -->

                    <div class="form-group">
                      <label>Pokok Pembayaran</label>
                      <input  type="text" id="pokok" readonly="" name="pokok" placeholder="" class="form-control">
                      <small class="text-danger"><i>*terisi otomatis*</i> </small>
                    </div>

<!-- 
                    <div class="form-group">
                      <label>Total Bunga</label>
                      <input  type="text"  id="total_bunga" readonly="" name="total_bunga" placeholder="" class="form-control">
                      <small class="text-danger"><i>*terisi otomatis*</i> </small>
                    </div> -->

                     <div class="form-group">
                      <label>Kewajiban Bayaran Per bulan</label>
                      <input  type="text" id="setor_perbulan" readonly="" name="setor_perbulan" placeholder="" class="form-control">
                      <small class="text-danger"><i>*terisi otomatis*</i> </small>
                    </div>
             
                    <div class="form-group">
                      <input  type="text" id="tanggal" name="tanggal" placeholder="Enter Tahun" class="form-control">
                    </div>

                    <label>Berkas Pendukung</label>
                    <input type="file" name="file" onchange="return cekexe()"  id="file" class="form-control"> 
                    <button type="submit" id="submit" class="btn btn-info">Simpan Perubahan</button>
                  </form>
              	</div>
              </div>
          </div>
      </div>
  </div>
 <!-- modal form tambah jabatan -->
 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="selectkaryawan" class="modal fade">
     <div class="modal-dialog modal-xl">
         <div class="modal-content">
             <div class="modal-header">
             Data Karyawan
                 <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
             </div>
             <div class="modal-body" id="hstatus">
                <table class="table">
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NPK</th>
                  </tr>
                  <tbody>
                    <?php $no = 1 ; foreach($karyawan as $f) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td>
                        <a class="btn btn-success btn-sm click"
                           data-id="<?= $f->id ?>"
                           data-id_user="<?= $f->id_user ?>" 
                           data-npk="<?= $f->npk ?>" 
                           data-nama="<?= $f->nama ?>"
                           >
                            <?= $f->nama ?>
                        </a>
                      </td>
                      <td><?= $f->npk ?></td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
                <small class="text-danger"><i>*klik nama untuk pilih karyawan*</i> </small>
                </div>
             </div>
         </div>
     </form>
     </div>
<!-- end of modal  -->


  <script type="text/javascript">
      function cekexe(){
        const file = document.getElementById('file');
        const path  = file.value ;
        const exe = /(\.pdf)$/i;
        if(!exe.exec(path)){
          alert("file harus berbentuk pdf");
          file.value = "";
          return ;
        }
      }

      $(function(){
        
          $("#mutasijabatan").on('submit',function(e){
            var postData = new FormData(this);
            e.preventDefault();
            if(document.getElementById('npk').value == "" ){
              alert("data karyawan masih kosong")
            }else if(document.getElementById('vendor_pinjam').value == "" ){
              alert("vendor pinjam masih kosong")
            }else if(document.getElementById('total_pinjam').value == "" ){
              alert("total pinjam masih kosong")
            }else if(document.getElementById('tenor').value == "" ){
              alert("tenor pembayaran masih kosong")
            }else if(document.getElementById('tanggal').value == "" ){
              alert("tanggal masih kosong")
            }else if(document.getElementById('file').value == "" ){
              alert("berkas masih kosong")
            }else {
              $.ajax({
                url : "<?= base_url('superadmin/Pinjaman_karyawan/input_pinjaman') ?>" ,
                method : "POST" ,
                data : postData,
                processData: false,
                contentType: false,
                cache  : false ,
                beforeSend : function(){
                  $("#submit").attr("disabled",true);   
                },
                complete : function(){
                  $("#submit").attr("disabled",false);    
                },
                success : function(e){
                   //alert(e);
                   if(e = "sukses"){
                     alert(e);
                     window.location.href="<?= base_url('superadmin/Pinjaman_karyawan/form_pinjam_kary') ?>"
                   }else {
                      alert("gagal")
                   }
                }
              })
            }
          })


        //hitung pokok  pembayaran 
        $("select[name=tenor]").on('change',function(){
            var tenor  = $('option:selected',this).attr('data-tenor');
            var total_pinjam = document.getElementById('total_pinjam').value ;
            var bayar =  total_pinjam / tenor
            var bayaranPokok = document.getElementById('pokok') ;
            bayaranPokok.value = bayar  ;
            document.getElementById('setor_perbulan').value =  bayar ;           
        })


        // //hitung pokok bunga dan total pembayaran perbulan
        // $("#persentase_bunga").on('change',function(){
        //     var persentaseBunga = document.getElementById('persentase_bunga').value  / 100;
        //     var totalPinjam = document.getElementById('total_pinjam').value ;
        //     var tenor = $('option:selected','select[name=tenor]',this).attr('data-tenor');
        //     var bunga   = totalPinjam * persentaseBunga ;
            

        //     var bungaBayar = document.getElementById('total_bunga').value  = bunga / parseInt(tenor);


        //     //total bungan + pokok pinjaman
        //     var pokok = document.getElementById("pokok").value;
        //     var totalCicilan = parseInt(pokok) + parseInt(bungaBayar) ;
            
        //     //jumlah cicilan per bulan
        //     document.getElementById('setor_perbulan').value = totalCicilan ;
        //    console.log(tenor);
        // })

    })

    $('.click').on('click',function(e){
      document.getElementById("npk").value       = $(this).attr('data-npk');
      document.getElementById("nama").value      = $(this).attr('data-nama');
      document.getElementById("id").value        = $(this).attr('data-id');
      document.getElementById("id_user").value   = $(this).attr('data-id_user');
      $('#selectkaryawan').modal('hide');
    })



  </script>