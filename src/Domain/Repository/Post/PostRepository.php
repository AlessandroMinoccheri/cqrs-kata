<?php
/**
 * Created by PhpStorm.
 * User: alessandrominoccheri
 * Date: 18/10/2018
 * Time: 13:46
 */

namespace App\Domain\Repository\Post;


use App\Domain\Model\Post\Post;
use App\Domain\Model\Post\PostId;

interface PostRepository
{
    public function byId(PostId $id);
    public function add(Post $post);
}