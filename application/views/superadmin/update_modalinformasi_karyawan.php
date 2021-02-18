
<form method="post" id="infoUpdate">
  <div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label>NO BPJS Ketenagakerjaan</label>
            <input type="text" class="form-control" value="<?= $karyawan->bpjs_tenagakerja ?>" name="bpjs_tenagakerja" id="bpjs_tenagakerja" placeholder=" NOMOR BPJS KETENAGAKERJAAN">
        </div>
        <div class="form-group">
            <label>NO BPJS Kesehatan</label>
            <input type="text" class="form-control" name="bpjs_kesehatan" value="<?= $karyawan->bpjs_kesehatan ?>" id="bpjs_kesehatan" placeholder="NOMOR BPJS KESEHATAN">
        </div>
        <div class="form-group">
            <label>NO DPLK</label>
            <input type="text" class="form-control" value="<?= $karyawan->no_dplk ?>" name="no_dplk" id="no_dplk" placeholder="NOMOR DPLK ATAU ASURANSI">
        </div>
        <div class="form-group">
            <label>Nama Bank</label>
            <input type="text" class="form-control" value="<?= $karyawan->nama_bank ?>" name="nama_bank" id="nama_bank" placeholder="NAMA BANK">
        </div>
        <div class="form-group">
            <label>Rekening</label>
            <input type="text" class="form-control" name="rekening" value="<?= $karyawan->no_rekening ?>" id="rekening" placeholder="REKENING">
        </div>
        <button type="submit" id="submit" class="btn btn-primary">Simpan Data</button>
        </div>
    </div>
    </form>

    <script type="text/javascript">
        $(function(){
            $("#infoUpdate").on('submit',function(e){
                e.preventDefault();
                var postData = new FormData(this);
                if(document.getElementById('bpjs_kesehatan').value == ""){
                    alert('bpjs kesehatan masih kosong');
                }else if(document.getElementById('bpjs_tenagakerja').value == ""){
                    alert('bpjs tenagakerja masih kosong');
                }else if(document.getElementById('no_dplk').value == ""){
                    alert('dplk masih kosong');
                }else if(document.getElementById('nama_bank').value == ""){
                    alert('nama bank masih kosong');
                }else if(document.getElementById('rekening').value == ""){
                    alert('rekening masih kosong');
                }else{
                    $.ajax({
                        url : "<?= base_url('superadmin/Karyawan/UpdateInformasi/' . $karyawan->id) ?>" ,
                        data : postData ,
                        method : "POST" ,
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
                                 window.location.href="<?= base_url('superadmin/Karyawan/Edit_karyawan/' . $karyawan->id_user) ?>"
                               }else {
                                  alert("gagal")
                               }
                        }
                    })
                }
            })
        })
    </script>