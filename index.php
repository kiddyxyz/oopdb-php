<?php
/**
 * Created by PhpStorm.
 * User: kiddy
 * Date: 11/03/19
 * Time: 11:20
 */
include("Mahasiswa.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
</head>
<body>
<div style="margin-bottom: 15px">
    <a href="create.php">Create Mahasiswa</a>
</div>
<table>
    <thead>
    <tr>
        <td>ID</td>
        <td>NIM</td>
        <td>NAMA</td>
        <td>ALAMAT</td>
        <td>NO HP</td>
    </tr>
    </thead>
    <tbody>
    <?php
    $mhs = new Mahasiswa();
    $q = $mhs->getSelect();

    while($row = mysqli_fetch_array($q)) { ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['nim'] ?></td>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['alamat'] ?></td>
            <td><?php echo $row['no_telfon'] ?></td>
            <td> <a href='edit.php?id=<?php echo $row['id'] ?>'>Edit</a></td>
            <td> <a href='delete.php?id=<?php echo $row['id'] ?>'>Delete</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>