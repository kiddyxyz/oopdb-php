<?php
/**
 * Created by PhpStorm.
 * User: kiddy
 * Date: 11/03/19
 * Time: 11:20
 */

include("Mahasiswa.php");

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $nim = $_POST['nim'];
    $hobby = $_POST['hobby'];

    $mhs = new Mahasiswa();
    $mhs->setAlamat($alamat);
    $mhs->setNama($name);
    $mhs->setTelp($nohp);
    $mhs->setNim($nim);
    $mhs->setHobby($hobby);

    $mhs->getInsert();

    echo "User added successfully. <a href='index.php'>View Users</a>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Create Mahasiswa</title>
</head>
<body>
<form action="create.php" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="name" placeholder="name"></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" placeholder="nim"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea style="resize: vertical;" name="alamat" placeholder="alamat"></textarea></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="nohp" placeholder="nohp"></td>
        </tr>
        <tr>
            <td>HOBBy</td>
            <td><input type="text" name="hobby" placeholder="hobby"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Add"></td>
        </tr>
    </table>
</form>
</body>
</html>