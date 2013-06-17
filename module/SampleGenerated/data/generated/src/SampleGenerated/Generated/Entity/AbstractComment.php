<?php
/**
 * Created by Inditel Meedia OÜ
 * User: Oliver
 * Date: 17.06.13 19:39
 */

namespace SampleGenerated\Generated\Entity;


use Core\Entity\AbstractEntity;

abstract class AbstractComment extends AbstractEntity
{

    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $comment;
    /**
     * @var string YYYY-MM-DD HH:II:SS
     */
    private $datetime;

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * @param string $datetime
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}