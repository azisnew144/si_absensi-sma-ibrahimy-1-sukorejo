<?php

function __database($host = "localhost", $user = "root", $pass = "", $db = "daniyal")
{
    $sambung = new mysqli($host, $user, $pass, $db);
    if (!$sambung) {
        echo "sambungan Gagal" . $sambung->error;
        exit;
    }
    return $sambung;
}
//mengambil field dari tabel
function __get_fields($sambung, $table)
{
    $get_fields = $sambung->query("SELECT * FROM $table");
    if ($get_fields) {
        $fields = array();
        while ($rfileds = $get_fields->fetch_field()) {
            $fields[] = $rfileds->name;
        }
        return $fields;
    } else {
        return "gagal mengambil fields" . $sambung->error;
    }
}
//fungsi simpan buatan
function __simpan($sambung, $table, $data)
{
    if (!is_array($data)) {
        return "data harus array";
    }
    //proses pembuatan query
    $query = "INSERT INTO $table (";
    foreach ($data as $key => $value) {
        $query .= $key;
        if  ($key != array_key_last($data)) {
            $query .= ",";
        }
    }
    $query .= ") VALUES (";

    foreach ($data as $k => $v) {
        $query .= "'" . $v . "'";
        if ($k != array_key_last($data)) {
            $query .= ",";
        }
    }
    $query .= ")";
    //end  pembuatan query

    //running query
    $data = $sambung->query($query);

    if (!$data) {
        return false;
    } else {
        return true;
    }
}


function __ambil($sambung, $table, $fields = null, $where = null, $join = null, $orderby = null)
{
    $query = "SELECT ";
    if ($fields == null) {
        $query .= "*";
    } else {
        $query .= $fields;
    }
    $query .= " FROM $table";
    
    if ($join != null) {
        if (is_array($join)) {
            foreach ($join as $j) {
                $query .= " " . $j;
            }
        }
    }
    if ($where != null) {
        if (is_array($where)) {
            $query .= " WHERE ";
            foreach ($where as $k => $w) {
                $query .= $k . "='" . $w . "'";
                if ($k != array_key_last($where)) {
                    $query .= " AND ";
                }
            }
        }
    }

    if ($orderby != null) {
        $query .= " ORDER BY " . $orderby;
    }

    //return query
    $data = $sambung->query($query);


    if (!$data) {
        return false;
    } else {
        return $data;
    }
}

function __delete($sambung, $table, $where)
{
    $query = "DELETE FROM $table";
    if (is_array($where)) {
        $query .= " WHERE ";
        foreach ($where as $k => $w) {
            $query .= $k . " = '" . $w . "'";
            if ($k != array_key_last($where)) {
                $query .= " AND ";
            }
        }
    } else {
        return false;
    }
    // return $query;
   $data = $sambung->query($query);

    if (!$data) {
        return false;
    } else {
        return true;
    }
}

// UPDTE prodi SET kd_prodi = '', nama_prodi = '', WHERE


function __update($sambung, $table, $data, $where = null)
{
    $query = "UPDATE $table SET ";
    if (!is_array($data)) {
        return "format data tidak valid";
    } else {
        foreach ($data as $k => $v) {
            $query .= $k . " = '" . $v . "'";
            if ($k != array_key_last($data)) {
                $query .= ",";
            }
        }
    }
        
    if (is_array($where)) {
        if (is_array($where)){
            $query .= " WHERE ";
        foreach ($where as $k => $w){
            $query .= $k . " = '" . $w . "'";
            if ($k != array_key_last($where)) {
                $query .= " AND ";
            }
        }
     } else {
        return false;
       }
    }    
     //return $query
    $data = $sambung->query($query);
    
    
    if (!$data){
        return false;
    } else {
        return true;
    }
}
