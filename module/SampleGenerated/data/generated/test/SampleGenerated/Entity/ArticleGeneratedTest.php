<?php
/**
 * Created by Inditel Meedia OÜ
 * User: Oliver
 * Date: 17.06.13 19:44
 */

namespace Application\Entity;


use SampleGenerated\Generated\Entity\AbstractArticle;

class ArticleGeneratedTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var AbstractArticle
     */
    private $article;

    public function setUp()
    {
        $this->article = $this->getMockForAbstractClass(AbstractArticle::getClassName());
    }

    public function test_setGetId()
    {
        $this->article->setId(1);
        $this->assertEquals(1, $this->article->getId());
    }
}
