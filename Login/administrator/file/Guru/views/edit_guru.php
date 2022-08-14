<?php
$db =__database();
$where = [
    'kd_guru' => $_GET['id']
];
$query = __ambil($db, "guru", "*", $where);
//menampilkan hasil query
//anda bisa menggunakan mysqli_fetch_assoc atau mysqli_fetch_array

$rows       = $query->fetch_object();
//print_r($rows);
?>
<div class="card">
    <div class="card-header">
        <h4>Edit guru</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="admin.php?target=guru&action=update" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="id" value="<?php echo $rows->kd_guru; ?>">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    NIP
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text"  name="guru" value="<?php echo $rows->guru; ?>" required="required" class="form-control col-md-7 col-xs-12">
                 </div>
                 </div>
                 <div class="mb-3">
        <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
            Nama Guru
        </label>
        <div class="col-md-6 col-sm-6 col-lg-12">
            <input type="text"  name="sebaran_guru"  class="form-control col-md-7 col-xs-12">
        </div>       
    </div>
    <div class="mb-3">
        <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
            Mata Pelajaran
        </label>
        <div class="col-md-6 col-sm-6 col-lg-12">
            <input type="text"  name="mapel"  class="form-control col-md-7 col-xs-12">
        </div>       
    </div>
                        
       <div class="mb-3">
        <div class="col-md-6 col-sm-6 col-lg-12">
        <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
            <i class="fa-solid fa-floppy-disk"></i> Simpan
        </button>
                <a class="btn btn-danger btn-sm" href="admin.php?target=guru"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
            </div>
        </div>
     </form>
   </div>
</div>








