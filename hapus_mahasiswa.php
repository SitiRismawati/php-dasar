<?php
   
    $mysqli = new mysqli('localhost', 'root', '', 'tedc');

    $Nim = $_GET['nim'];
    $delete = $mysqli->query("DELETE  FROM students WHERE NIM='$NIM'");

    if($delete) {
        header("Location: mahasiswa.php");
        exit();
    }
?>