<?php

include 'connection.php';

$id = $_GET['id'];
$name = $_POST['name'];
$address = $_POST['address'];

$sql = "
    update siswa
    set name = '" . $name . "', address = '" . $address ."'
    where id = '" . $id . "';
    ";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('Location: index.php');
    } else {
        printf('Failed update siswa: ' . mysqli_error($conn));
        exit();
    }
?>