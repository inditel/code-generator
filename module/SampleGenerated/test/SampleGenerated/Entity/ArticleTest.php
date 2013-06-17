<?php
/**
 * Created by Inditel Meedia OÜ
 * User: Oliver
 * Date: 17.06.13 20:20
 */

namespace SampleGenerated\Entity;


class ArticleTest extends \PHPUnit_Framework_TestCase
{

    public function testReturn10()
    {
        $a = new Article();
        $this->assertEquals(10, $a->return10());
    }
}
