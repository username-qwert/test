<?php

declare(strict_types=1);

namespace Core\Controller;

use Core\View\View;

/**
 * Class Controller
 * @package Core\Controller
 */
abstract class Controller
{
    /*** @var View $view contains an instance View */
    protected $view;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->view = new View();
    }

    /**
     * @param string $view
     * @param array $data
     */
    protected function render(string $view = '', $data = [])
    {
        $this->view->render($view, $data);
    }
}
