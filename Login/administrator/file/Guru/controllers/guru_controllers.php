<?php
$db = __database();
$opsi = $_GET['action'];
//strat input
if ($opsi == "input") {
    $data = [
        'guru' => $_POST['guru'],
        'sebaran_guru' => $_POST['sebaran_guru'],
        'kd_siswa' => $_POST['kd_siswa'],
        'mapel' => $_POST['mapel']

    ];
    $simpan = __simpan($db, "guru" , $data);
    if ($simpan) {
?>
        <script>
        window.location.href= 'admin.php?target=guru';
        </script>
    <?php
    } else {
        echo "gagal simpan " . $db->error;
    }
}
//end kondisi input
//start kondisi delete
elseif ($opsi == "delete") {
    $where = [
        'kd_guru'=> $_GET['id']
    ];
    $delete = __delete($db, "guru", $where);
    if ($delete){
        ?>
        <script>
            window.location.href= 'admin.php?target=guru';
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
    'guru' => $_POST['guru'],
    'sebaran_guru' => $_POST['sebaran_guru'],
    'kd_siswa' => $_POST['kd_siswa'],
    'mapel' => $_POST['mapel']

 ];
    $where = [
        'kd_guru' => $_POST['id']
    ];
    $update = __update($db, "guru", $data, $where);
    if ($update){
        
        ?>
        <script>
            window.location.href= 'admin.php?target=guru';
        </script>
        <?php
    } else {
        echo "gagal update " . $db->error;
    }
}
// end kondisi update
?>