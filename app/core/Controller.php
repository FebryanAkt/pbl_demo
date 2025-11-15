<?php

class Controller
{
    public function view($file, $data = [])
    {
        extract($data);
        require "../app/views/$file.php";
    }

    public function model($model)
    {
        require_once "../app/models/$model.php";
        return new $model;
    }
}
