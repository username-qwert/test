<?php

declare(strict_types=1);

namespace Core\View;

/**
 * Class View
 * @package Core\View
 */
class View implements ViewInterface
{
    /** @var string $title contains a title for the View */
    private $title = '';

    /** @var string $template contains a template for the View */
    private $template = '';

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Sets a single-line title.
     *
     * @param string $title A text for the title.
     *
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Get template.
     *
     * @return string
     */
    public function getTemplate(): string
    {
        return $this->template;
    }

    /**
     * Sets the name of the template.
     *
     * @param string $template
     *
     * @return void
     */
    public function setTemplate(string $template): void
    {
        $this->template = $template;
    }

    /**
     * This is the method of outputting the template to the page and passing parameters.
     *
     * @param string $view
     * @param array $data
     *
     * @return void
     */
    public function render(string $view = '', array $data = []): void
    {
        extract($data);

        ob_start();
        include_once '../app/Views/layouts/'. $this->getTemplate() .'.php';
        $body = ob_get_contents();
        ob_end_clean();

        echo $body;
    }
}
