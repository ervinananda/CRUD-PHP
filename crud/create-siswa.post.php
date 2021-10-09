<?php

include './connection.php';

$name = $_POST['name'];
$address = $_POST['address'];

$sql = "
insert into siswa (name, address)
values ('".$name."', '".$address."');
";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo 'Success create siswa';
} else {
    printf('Failed create siswa: ' .mysqli_error($conn));
    exit();
}