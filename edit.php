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
$q = $mhs->show($id);

while($user_data = mysqli_fetch_array($q))
{
    $mhs->setNama($user_data['nama']);
    $mhs->setNim($user_data['nim']);
    $mhs->setAlamat($user_data['alamat']);
    $mhs->setTelp($user_data['no_telfon']);
}


if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $nim = $_POST['nim'];
    $id = $_GET['id'];

    $mhs->setId($id);
    $mhs->setAlamat($alamat);
    $mhs->setNama($name);
    $mhs->setTelp($nohp);
    $mhs->setNim($nim);

    $mhs->update();

    echo "User update successfully. <a href='index.php'>View Users</a>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Create Mahasiswa</title>
</head>
<body>
<form action="edit.php?id=<?php echo $id ?>" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="name" placeholder="name" value="<?php echo $mhs->getNama() ?>"></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" placeholder="nim" value="<?php echo $mhs->getNim() ?>"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea style="resize: vertical;" name="alamat" placeholder="alamat"><?php echo $mhs->getAlamat() ?></textarea></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="nohp" placeholder="nohp" value="<?php echo $mhs->getTelp() ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>