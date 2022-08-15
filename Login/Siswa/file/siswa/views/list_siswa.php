<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i> Data Siswa</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-info btn-sm text-light btn-sm' href='admin.php?target=siswa&action=form'><i class='fa-solid fa-plus'></i> Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
        <th>No</th><th>NIS</th><th>Nama Siswa</th><th>Kelas</th><th>Wali Kelas</th><th>Keterangan</th>
        </tr>
        </thead>
        <tbody>";
        //ambil data dari database
        $join  = [
            "LEFT JOIN wk as p on p.kd_wk = s.kd_wk"
         ];
         $q = __ambil($db, "siswa as s", "*", null, $join);
        $no = 1;
        echo "</tbody></table></div>"; ?>
    </div>
    </div>
    