<?php

class DB
{
    private $host = HOSTDB;
    private $db = NAMEDB;
    private $udb = UDB;
    private $pdb = PDB;
    private $ps;
    private $rs;


    public function __construct()
    {
        try {
            $this->ps = mysqli_connect($this->host, $this->udb, $this->pdb, $this->db);
        } catch (Exception $e) {
            $this->rs = error_log($e->getMessage());
            exit('hal aneh terjadi silahkan hubungi admin!');
        }
    }

    public function getps()
    {
        return $this->ps;
    }
}
