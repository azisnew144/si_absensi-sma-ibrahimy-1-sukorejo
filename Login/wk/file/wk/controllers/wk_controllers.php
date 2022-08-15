<?php
$db = __database();
$opsi = $_GET['action'];
//strat input
if ($opsi == "input") {
    $data = [
        'kd_wk' => $_POST['kd_wk'],
        'nama_wk' => $_POST['nama_wk']
    ];
    $simpan = __simpan($db, "wk" , $data);
    if ($simpan) {
     ?>
        <script>
        window.location.href= 'admin.php?target=wk';
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
        'kd_wk'=> $_GET['id']
    ];
    $delete = __delete($db, "wk", $where);
    if ($delete) {
        ?>
        <script>
            window.location.href= 'admin.php?target=wk';
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
            'nama_wk' => $_POST['nama_wk']
         ];
     $where = [
           'kd_wk' => $_POST['id']
    ];
    $update = __update($db, "wk", $data, $where);
    if($update) {
        ?>
        <script>
            window.location.href= 'admin.php?target=wk';
        </script>
        <?php
    } else {
        echo "gagal update " . $db->error;
    }
}
// end kondisi update
?>