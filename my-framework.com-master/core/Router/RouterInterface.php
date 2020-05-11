<?php

declare(strict_types=1);

namespace Core\Router;

/**
 * Interface RouterInterface
 * @package Core\Router
 */
interface RouterInterface
{
    /**
     * This is the method checks the current URL and returns the controller.
     *
     * @return array
     */
    public function getController(): array;
}
