<?php
/**
 * Created by PhpStorm.
 * User: alessandrominoccheri
 * Date: 18/10/2018
 * Time: 13:50
 */

namespace App\Domain\Model\Post;

use Ramsey\Uuid\Uuid;

final class PostId
{
    /**
     * @var string
     */
    private $id;

    /**
     * @param string $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function id()
    {
        return $this->id;
    }

    public static function create()
    {
        $id = Uuid::uuid4();

        return new self($id);
    }
}