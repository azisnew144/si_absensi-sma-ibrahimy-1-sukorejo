<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i> Data Siswa</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-info btn-sm text-light btn-sm' href='admin.php?target=prodi&action=form'><i class='fa-solid fa-plus'></i> Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
        <th>No</th><th>NIS</th><th>Nama Siswa</th><th>Keterangan</th>
        </tr>
        </thead>
        <tbody>";
        //ambil data dari database
        $q = __ambil($db, "Prodi");
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['kd_prodi'] . "</td>
            <td>" . $r['nama_prodi'] . " </td>
            <td> 
                <a class='btn btn-success btn-sm' href='admin.php?target=prodi&action=edit&id=" . $r['kd_prodi'] . "'><i class='fa-solid fa-pen-to-square'></i> Edit</a> 
                
                </td>
                </tr> ";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>