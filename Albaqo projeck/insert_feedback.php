<?php

include("config.php");

if(isset($_POST[ 'submit' ])) {
    $username =  $_POST['username'];
    $email =  $_POST['email'];
    $pesan =  $_POST['pesan'];
    $tanggal = date('d/m/Y');

    $sql = "INSERT INTO feedback (username, email, pesan, tanggal) VALUE ('$username', '$email', '$pesan', '$tanggal')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: home.php?status=sukses');
    } else {
        header( 'Location: home.php?status=gagal' );
    }
} else {
    die("Akses dilarang...");
}

?>