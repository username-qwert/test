<?php

declare(strict_types=1);

namespace App\Controllers\Profile;

use Core\Controller\Controller;

/**
 * Class ProfileController
 * @package App\Controllers\Profile
 */
class ProfileController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->view->setTitle('Profile');
        $this->view->setTemplate('layout');
    }

    public function index()
    {
        $this->render('profile/profile');
    }
}
