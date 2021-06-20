<?php
session_start();
class Login{

    private $db;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function login($c,$d){
        $email =mysqli_real_escape_string($this->db->getps(),$c);
        $password =mysqli_real_escape_string($this->db->getps(),$d);
        $q="select * from pm where email='$email' and password='$password'";
        $q1 = mysqli_query($this->db->getps(),$q);
        $result=mysqli_fetch_assoc($q1);
        if (isset($result)){
            $_SESSION["status"]=true;
            $_SESSION["username"]=$c;
        }else{
            $_SESSION["status"]=false;
        }
    }

    public function tambah($d1,$d2){
        $konek=$this->db->getps();
        $v1=$d1;
        $v2=$d2;

        $q="INSERT INTO pm
            Values
            ('','$v1','$v2')
            ";
        mysqli_query($konek,$q);
        if (mysqli_affected_rows($konek)>0){
            $stat="Oke";
            return $stat;
        }else{
            $stat="Belum";
            return $stat;
        }
    }

    public function ambildata(){
        $q="SELECT * FROM pm";
        $d=mysqli_query($this->db->getps(),$q);
        while($temp = mysqli_fetch_array($d)){
            $hasil[] = $temp;
        }
        return $hasil;
    }

    public function clearsession(){
        session_destroy();
    }
}
