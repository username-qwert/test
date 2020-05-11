<?php

declare(strict_types=1);

namespace Core\Application;

use App\Controllers\Error\ErrorController;
use Core\Exceptions\InvalidRouteException;
use Core\Router\RouterInterface;

/**
 * Class Application
 * @package Core\Application
 */
class Application
{
    private $router;

    /**
     * Application constructor.
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function start()
    {
        try {
            list($controller, $method) = $this->router->getController();

            $classController = new $controller();
            $classController->$method();
        } catch (InvalidRouteException $exception) {
            http_response_code(404);

            $errorController = new ErrorController();
            $errorController->pageNotFound();
        }
    }
}
