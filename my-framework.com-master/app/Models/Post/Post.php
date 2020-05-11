<?php

declare(strict_types=1);

namespace App\Models\Post;

use Core\Model\ActiveRecord;

/**
 * Class Post
 * @package App\Models\Post
 *
 * @property $id
 * @property $title
 * @property $author
 * @property $publisher
 * @property $srcImg
 * @property $content
 */
class Post extends ActiveRecord
{
    public $id;
    public $title;
    public $author;
    public $publisher;
    public $srcImg;
    public $content;

    public static function getTable(): string
    {
        return 'post';
    }
}
