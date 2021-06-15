<?php


class Controller {
    private $tampungsementara;
    private $tampungsementara1;
    private $tampungsementara2;
    private $tampungsementara3;
    private $tampungsementara4;

    public function view($view, $data = [], $data1 = [], $data2 = [], $data3 = [], $data4 = [])
    {
        $this->tampungsementara = $data;
        $this->tampungsementara1 = $data1;
        $this->tampungsementara2 = $data2;
        $this->tampungsementara3 = $data3;
        $this->tampungsementara4 = $data4;
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once "../app/models/" . $model . ".php";
        return new $model;
    }

}

