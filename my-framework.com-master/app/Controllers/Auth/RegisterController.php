<?php

declare(strict_types=1);

namespace App\Controllers\Auth;

use Core\Controller\Controller;

class RegisterController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->view->setTitle('Register');
        $this->view->setTemplate('layout');
    }

    public function index()
    {
        $this->render('auth/register');
    }
}
