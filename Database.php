<?php
/**
 * Created by PhpStorm.
 * User: kiddy
 * Date: 11/03/19
 * Time: 10:52
 */

class Database
{
    public $koneksi;

    public function closeKoneksi(){
        mysqli_close($this->koneksi);
    }

    public function openKoneksi(){
        $host = "mysql";
        $user = "homestead";
        $pass = "secret";
        $db = "oopdb";

        $this->koneksi = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error($this->koneksi));

        if($this->koneksi){
            //echo "Koneksi berhasil Tak berdaya~";
        }
        else{
            echo "Database kaga ada";
        }
    }
}