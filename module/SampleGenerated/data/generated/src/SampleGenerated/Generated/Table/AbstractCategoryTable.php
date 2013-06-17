<?php
/**
 * Created by Inditel Meedia OÜ
 * User: Oliver
 * Date: 18.06.13 0:55
 */

namespace SampleGenerated\Generated\Table;


use Core\Table\AbstractTable;
use Zend\Db\Adapter\Adapter;

class AbstractCategoryTable extends AbstractTable
{

    public function __construct(Adapter $adapter)
    {
        parent::__construct('category', $adapter);
    }

    /**
     * @param $id
     * @return \Zend\Db\ResultSet\ResultSet
     */
    public function findByArticleId($id)
    {
        return $this->select(array('article_id' => (int)$id));
    }
}