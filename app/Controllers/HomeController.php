<?php
namespace Controllers;

use Core\Controller;

class HomeController extends Controller {
    public function index() {
        $this->view('home');
    }
}
