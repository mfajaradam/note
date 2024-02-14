<?php
$conn = mysqli_connect("localhost","root","","pplg1_notes");

// menampilkan data
function query($query) {
    global $conn;

    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function add($data) {
    global $conn;

    $note = $data["notes"];

    $query = "INSERT INTO notes (id,note,created_at) VALUES (null,'$note',null)";
    $sql = mysqli_query($conn,$query);
    return $sql;
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $note = $data["notes"];

    $query = "UPDATE notes set
                note = '$note'
                WHERE id = $id;
                ";
    $sql = mysqli_query($conn,$query);
    return $sql;
}

function hapus($ids) {
    global $conn;
    
    $sql = mysqli_query($conn, "DELETE FROM notes WHERE id = '$ids'");
    return $sql;
}

function cek_login($username,$password) {
    global $conn;
    $uname = $username;
    $upass = $password;

    $sql = mysqli_query($conn,"SELECT * FROM user WHERE username = '$uname' AND password = MD5('$upass')");
    $result = mysqli_num_rows($sql);

    if ($result > 0) {
        return true;
    } else {
        return false;
    }
}