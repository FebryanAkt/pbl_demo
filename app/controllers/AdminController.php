<?php

require_once "../app/core/Controller.php";

class AdminController extends Controller
{
    public function index()
    {
        $this->view("admin/login");
    }
}
