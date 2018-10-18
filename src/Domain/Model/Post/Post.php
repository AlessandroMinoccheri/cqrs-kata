<?php
/**
 * Created by PhpStorm.
 * User: alessandrominoccheri
 * Date: 18/10/2018
 * Time: 13:51
 */

namespace App\Domain\Model\Post;


class Post
{
    private $id;
    private $title;
    private $content;
    private $published = false;
    private $categories;
}