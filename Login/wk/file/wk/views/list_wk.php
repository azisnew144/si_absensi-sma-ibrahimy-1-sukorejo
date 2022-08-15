<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i> Data Wali Kelas</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-info btn-sm text-light btn-sm' href='admin.php?target=wk&action=form'><i class='fa-solid fa-plus'></i> Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
        <th>No</th><th>Nama wali kelas</th><th> Kelas</th><th>Keterangan</th>
        </tr>
        </thead>
        <tbody>";
        //ambil data dari database
        $q = __ambil($db, "wk");
        $no = 1;
        echo "</tbody></table></div>"; ?>
    </div>
    </div>
    