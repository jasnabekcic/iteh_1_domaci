<?php

class Mudrolija
{
    public $id;
    public $naslov;
    public $sadrzaj;
    public $user_id;


    public function dodaj($naslov, $sadrzaj, $user_id)
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $baza = "mudrolije";
        $connection = new mysqli($host, $username, $password, $baza) or die("Connection failed: %s\n" . $connection->error);
        $sql_upit = "insert into mudrolija values (NULL, '$naslov', '$sadrzaj', '$user_id')";

        return $connection->query($sql_upit);
    }
}
