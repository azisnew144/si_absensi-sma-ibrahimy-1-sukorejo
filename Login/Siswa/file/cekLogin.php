<?php
session_start();
include "../config/__config_database.php";
$db = __database();
$username = $_POST['username'];
$password = sha1($_POST['password']);
//cek user login sebagai admin, guru, atau siswa
$where = [
    'username' => $username,
    'password' => $password
];
$cekUsers = __ambil($db, "users", "*", $where);
if ($cekUsers->num_rows > 0) {
    $r = $cekUsers->fetch_object();
    $_SESSION['id'] = $r->iduser;
    $_SESSION['name'] = $r->username;
    $_SESSION['level'] = $r->level;
    $_SESSION['status_login'] = true;

    echo "<script>
    window.location.href='index.php';
    </script>";
} else {
    $wheresiswa = [
        'kd_siswa' => $username,
        'password' => $password
    ];
    $ceksiswa = __ambil($db, "siswa", "*", $wheresiswa);
    if ($ceksiswa->num_rows > 0) {
    $p = $ceksiswa->fetch_object();
    $_SESSION['id'] = $p->kd_siswa;
    $_SESSION['name'] = $p->nama_siswa;
    $_SESSION['name'] = $p->kelas;
    $_SESSION['level'] = 'siswa';
    $_SESSION['status_login'] = true;
    
    echo "<script>
    window.location.href='index.php';
    </script>";
    } 
}


    