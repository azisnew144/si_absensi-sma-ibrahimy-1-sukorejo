<?php
$db = __database();
$opsi = $_GET['action'];
//strat input
if ($opsi == "input") {
    $data = [
        'kd_siswa' => $_POST['kd_siswa'],
        'nama_siswa' => $_POST['nama_siswa'],
        'kelas' => $_POST['kelas'],
        'kd_wk' => $_POST['kd_wk']

    ];
    $simpan = __simpan($db, "siswa" , $data);
    if ($simpan) {
     ?>
        <script>
        window.location.href= 'admin.php?target=siswa';
        </script>
    <?php
    } else {
        echo "gagal simpan " . $db->error;
    }
}
//end kondisi input
//start kondisi delete
elseif($opsi == "delete") {
    $where = [
        'kd_siswa'=> $_GET['id']
    ];
    $delete = __delete($db, "siswa", $where);
    if ($delete) {
        ?>
        <script>
            window.location.href= 'admin.php?target=siswa';
        </script>
        <?php
    } else {
        echo "gagal hapus " . $db->error;
    }
}
//end kondisi delete
//start kondisi update
elseif ($opsi == "update") {
    $data = [
            'nama_siswa' => $_POST['nama_siswa'],
            'kelas' => $_POST['kelas'],
            'kd_wk' => $_POST['kd_wk']

         ];
     $where = [
           'kd_siswa' => $_POST['id']
    ];
    $update = __update($db, "siswa", $data, $where);
    if($update) {
        ?>
        <script>
            window.location.href= 'admin.php?target=siswa';
        </script>
        <?php
    } else {
        echo "gagal update " . $db->error;
    }
}
// end kondisi update
?>