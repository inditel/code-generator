<?php
/**
 * Created by Inditel Meedia OÜ
 * User: Oliver
 * Date: 17.06.13 19:37
 */

namespace SampleGenerated\Generated\Entity;


use Core\Entity\AbstractEntity;

abstract class AbstractArticle extends AbstractEntity
{
    /**
     * @generated
     * @var int
     */
    private $id;
    /**
     * @generated
     * @var string
     */
    private $headline;
    /**
     * @generated
     * @var string
     */
    private $introduction;
    /**
     * @generated
     * @var string
     */
    private $contents;
    /**
     * @generated
     * @var int
     */
    private $categoryId;

    /**
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * @param string $contents
     */
    public function setContents($contents)
    {
        $this->contents = $contents;
    }

    /**
     * @return string
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * @param string $headline
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;
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

    /**
     * @return string
     */
    public function getIntroduction()
    {
        return $this->introduction;
    }

    /**
     * @param string $introduction
     */
    public function setIntroduction($introduction)
    {
        $this->introduction = $introduction;
    }

}