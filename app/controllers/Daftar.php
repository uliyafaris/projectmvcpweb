<?php
class Daftar extends Controller {

    private $news;
    private $pos2;
    private $sem2;
    private $men2;
    private $tot2;

    public function index(){
        $this->artikel();
        $yah=$this->news;
        $ters=$this->poss();
        $ters1=$this->semm();
        $ters2=$this->menn();
        $ters3=$this->tott();
        $data['artikel']='Daftar';
        $this->view('home/index',$yah,$ters,$ters1,$ters2,$ters3);
    }

    public function artikel(){
        $this->news=$this->model('DaftarProgram')->login();
    }

    public function poss(){
        $this->pos2=$this->model('DaftarProgram')->tambah();
        return $this->pos2;
    }
    public function semm(){
        $this->sem2=$this->model('DaftarProgram')->ambildata();
        return $this->sem2;
    }
    public function menn(){
        $this->men2=$this->model('DaftarProgram')->clearsession();
        return $this->men2;
    }


}
