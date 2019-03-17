<?php
/**
 * Created by PhpStorm.
 * User: kiddy
 * Date: 11/03/19
 * Time: 11:20
 */

include("Mahasiswa.php");


$mhs = new Mahasiswa();

$id = $_GET['id'];

$mhs->setId($id);

$mhs->delete();

echo "User delete successfully. <a href='index.php'>View Users</a>";
?>