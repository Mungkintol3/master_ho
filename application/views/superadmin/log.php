<div class="content">
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header card-header-info">
                <h4 class="card-title mt-0"> DAFTAR KARYAWAN</h4>
                <p class="card-category"> SIGAP PRIMA ASTREA & SIGAP GARDA PRATAMA</p>
            </div>
            <div class="card-body">
                <table id="table_id" class="cell-border">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($log as $result) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $result->nama ?></td>
                                <td><?= $result->tanggal ?></td>
                                <td><?= $result->keterangan ?></td>
                            </tr>
                        <?php endforeach  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>