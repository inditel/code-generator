<?php
/**
 * Created by Inditel Meedia OÜ
 * User: Oliver
 * Date: 18.06.13 0:14
 */

namespace SampleGenerated\Generated\Table;


use Core\Table\AbstractTable;
use Zend\Db\Adapter\Adapter;

abstract class AbstractArticleTable extends AbstractTable
{

    public function __construct(Adapter $adapter)
    {
        parent::__construct('article', $adapter);
    }

}