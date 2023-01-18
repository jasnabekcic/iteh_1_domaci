 <?php

    $sql_upit = "delete from mudrolija where id=" . $_POST['id'];
    $host = "localhost";
    $username = "root";
    $password = "";
    $baza = "mudrolije";
    $connection = new mysqli($host, $username, $password, $baza) or die("Connection failed: %s\n" . $connection->error);
    $connection->query($sql_upit);
