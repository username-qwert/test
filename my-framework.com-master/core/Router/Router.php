<?php

declare(strict_types=1);

namespace Core\Router;

use Core\Exceptions\InvalidRouteException;

/**
 * Class Router
 * @package Core\Router
 */
class Router implements RouterInterface
{
    /** @var array $routes contains url and their handlers */
    private $routes = [];

    /**
     * Router constructor.
     * @param array $routes
     */
    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    /**
     * Get url
     *
     * @return string
     */
    private function getUrl(): string
    {
        $url = $_SERVER['REQUEST_URI'];

        return parse_url($url)['path'];
    }

    /**
     * Forms the base path to the class Controller
     *
     * @param string $controller
     *
     * @return string
     */
    private function fullName(string $controller): string
    {
        return "\App\Controllers\\$controller";
    }

    /**
     * This is the method checks the current URL for its presence
     * in the array $routes and returns the controller.
     *
     * If not, then throws an InvalidRouteException
     *
     * @return array
     * @throws InvalidRouteException
     */
    public function getController(): array
    {
        $url = $this->getUrl();

        foreach ($this->routes as $route => $path) {
            if (preg_match("%$route$%", $url)) {
                $array = explode('@', $path);

                $array[0] = $this->fullName($array[0]);

                return $array;
            }
        }

        throw new InvalidRouteException();
    }
}
