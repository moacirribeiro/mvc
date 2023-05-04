<?php
namespace src\controllers;

use \core\Controller;


class HomeController extends Controller {

    public function index() {
        $data = array();

        $data["nome"] = "Relatórios Comercial";

        $this->render('home', $data);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}