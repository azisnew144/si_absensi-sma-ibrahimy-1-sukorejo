<?php
$db =__database();
$where = [
    'kd_siswa' => $_GET['id']
];
$query = __ambil($db, "siswa", "*", $where);
//menampilkan hasil query
//anda bisa menggunakan mysqli_fetch_assoc atau mysqli_fetch_array

$rows       = $query->fetch_object();
//print_r($rows);
?>

<div class="card">
    <div class="card-header">
        <h4>Edit siswa</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="admin.php?target=siswa&action=update" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="id" value="<?php echo $rows->kd_siswa; ?>">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Nama siswa
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" id="kd_siswa" name="nama_siswa" value="<?php echo $rows->nama_siswa; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>

            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Kelas
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" id="kd_siswa" name="kelas" value="<?php echo $rows->kelas; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
             Wali Kelas
                 </label>
           <div class="col-md-6 col-sm-6 col-lg-12">
                <select name="kd_wk" id="kd_wk" class="form-select">
                    <option value="">Wali Kelas</option>
                <?php
                $db = __database();
                $wk_data = __ambil($db, "wk");
                while ($r = $wk_data->fetch_array()) {
                    ?>
                    <option value="<?php echo $r['kd_wk']; ?>" <?php echo $rows->kd_wk == $r['kd_wk'] ? "selected" : ""; ?>><?php echo $r['nama_wk']; ?></option>
                <?php
                }
                ?>
            </select>
           </div> 
       </div>
            
                 <div class="mb-3">
                 <div class="col-md-6 col-sm-6 col-lg-12">
                 <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                      <i class="fa-solid fa-floppy-disk"></i> Simpan
                </button>
                  <a class="btn btn-danger btn-sm" href="admin.php?target=siswa"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>  
                 </div>
            </div>
        </form>
    </div>
</div>
