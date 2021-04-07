<div class="content">
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header card-header-info">
                <h4 class="card-title mt-0">Administrator Master HO</h4>
                <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
            </div>
            <div class="card-body">
                <?php if ($this->session->flashdata('ok')) { ?>
                    <div class="alert alert-info">
                        <?= $this->session->flashdata('ok') ?>
                    </div>
                <?php } else if ($this->session->flashdata('del')) { ?>
                    <div class="alert alert-danger">
                        <?= $this->session->flashdata('del') ?>
                    </div>
                <?php } ?>
                <a data-toggle="modal" data-target="#addAdmin" class="btn btn-success text-white btn-round">Tambah Admin </a>
                <table id="table_id" class="cell-border">
                    <thead>
                        <tr>

                            <th class="text-center">No</th>
                            <th class="text-center">NPK</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($akun as $d) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $d->npk ?></td>
                                <td><?= $d->nama ?></td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="<?= base_url('superadmin/Admin/resetPassword/' . $d->id) ?>" onclick="return confirm('reset password ke default 123 ')">reset pwd</a>
                                    <a class="btn btn-danger btn-sm" href="<?= base_url('superadmin/Admin/delete/' . $d->id) ?>" onclick="return confirm('yakin hapus')">hapus data</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- modal form tambah administrator-->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="addAdmin" class="modal fade">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    Tambah Administrator
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                </div>
                <div class="modal-body" id="hstatus">
                    <form id="tambah" method="post" action="#">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" autocomplete="off" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>NPK</label>
                            <input type="text" name="npk" autocomplete="off" id="npk" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" id="password1" autocomplete="off" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Re-write Password</label>
                            <input type="password" id="password3" autocomplete="off" class="form-control">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-sm">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        </form>
    </div>
    <!-- end of modal  -->
    <script type="text/javascript">
        $(function() {
            //tambah data akun
            $("#tambah").on('submit', function(e) {
                e.preventDefault();
                var postData = new FormData(this);
                if (document.getElementById("username").value == "") {
                    alert('username kosong');
                } else if (document.getElementById("npk").value == "") {
                    alert("npk masih kosong")
                } else if (document.getElementById("password1").value == "") {
                    alert("password masih kosong");
                } else if (document.getElementById("password1").value != document.getElementById("password3").value) {
                    alert("password tidak sama");
                } else {
                    $.ajax({
                        url: "<?php echo base_url('superadmin/Admin/input') ?>",
                        data: postData,
                        method: "POST",
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(e) {
                            alert(e);
                            window.location.href = "<?= base_url('superadmin/Admin') ?>";
                        }
                    })
                }
            })
        })
    </script>