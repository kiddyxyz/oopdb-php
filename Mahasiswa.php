<?php
/**
 * Created by PhpStorm.
 * User: kiddy
 * Date: 11/03/19
 * Time: 11:22
 */

include ('Database.php');

class Mahasiswa
{
    private $nim, $nama, $alamat, $telp, $id;
    private $insert, $select;


    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @param mixed $telp
     */
    public function setTelp($telp)
    {
        $this->telp = $telp;
    }

    /**
     * @return mixed
     */
    public function getNim()
    {
        return $this->nim;
    }

    /**
     * @param mixed $nim
     */
    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    /**
     * @return mixed
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * @return mixed
     */
    public function getAlamat()
    {
        return $this->alamat;
    }

    /**
     * @param mixed $nama
     */
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    /**
     * @return mixed
     */
    public function getTelp()
    {
        return $this->telp;
    }

    /**
     * @param mixed $alamat
     */
    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }

    /**
     * @return mixed
     */
    public function getInsert()
    {
        $insert = false;

        $nim = $this->getNim();
        $nama = $this->getNama();
        $telp = $this->getTelp();
        $alamat = $this->getAlamat();

        $sql = "insert into mahasiswa (nim, nama, alamat, no_telfon) values ('$nim', '$nama', '$alamat', '$telp')";

        $db = new Database();
        $db->openKoneksi();

        $q = mysqli_query($db->koneksi, $sql) or die(mysqli_error($db->koneksi));
        if($q){
            $insert = true;
        }

        $db->closeKoneksi();
        return $insert;
    }

    public function update()
    {
        $insert = false;

        $id = $this->getId();
        $nim = $this->getNim();
        $nama = $this->getNama();
        $telp = $this->getTelp();
        $alamat = $this->getAlamat();

        $sql = "update mahasiswa set nim = '$nim', nama = '$nama', alamat = '$alamat', no_telfon = '$telp' where id = '$id';";

        $db = new Database();
        $db->openKoneksi();

        $q = mysqli_query($db->koneksi, $sql) or die(mysqli_error($db->koneksi));
        if($q){
            $insert = true;
        }

        $db->closeKoneksi();
        return $insert;
    }

    public function delete()
    {
        $insert = false;

        $id = $this->getId();

        $sql = "delete from mahasiswa where id = '$id';";

        $db = new Database();
        $db->openKoneksi();

        $q = mysqli_query($db->koneksi, $sql) or die(mysqli_error($db->koneksi));
        if($q){
            $insert = true;
        }

        $db->closeKoneksi();
        return $insert;
    }

    /**
     * @return mixed
     */
    public function getSelect()
    {
        $sql = "SELECT * FROM mahasiswa";

        $db = new Database();
        $db->openKoneksi();

        $q = mysqli_query($db->koneksi, $sql);

        return $q;
    }

    public function show($id)
    {
        $sql = "SELECT * FROM mahasiswa WHERE id = $id";

        $db = new Database();
        $db->openKoneksi();

        $q = mysqli_query($db->koneksi, $sql);

        return $q;
    }
}
