<?php

declare(strict_types=1);

namespace Core\View;

/**
 * Interface ViewInterface
 * @package Core\View
 */
interface ViewInterface
{
    public function render(string $view, array $data): void;
}
