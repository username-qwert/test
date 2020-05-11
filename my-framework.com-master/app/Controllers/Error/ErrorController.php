<?php

declare(strict_types=1);

namespace App\Controllers\Error;

use Core\Controller\Controller;

class ErrorController extends Controller
{
    public function pageNotFound()
    {
        $this->view->setTemplate('404');
        $this->render();
    }
}
