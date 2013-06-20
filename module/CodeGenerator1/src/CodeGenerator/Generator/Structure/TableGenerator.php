<?php
/**
 * Created by Inditel Meedia OÜ
 * login: Oliver
 * Date: 25.05.13 13:50
 */

namespace CodeGenerator\Generator\Structure;

use CodeGenerator\Generator\AbstractClassGenerator;
use Zend\Code\Generator\ClassGenerator;
use Zend\Code\Generator\MethodGenerator;

class TableGenerator extends AbstractClassGenerator
{

    const CONFIG_KEY = 'table';

    /**
     * @return ClassGenerator
     */
    public function generate()
    {

        $class = parent::generate();

        $class->addUse($this->getFullClassName(AbstractTableGenerator::CONFIG_KEY));
        $class->setExtendedClass($this->getClassName(AbstractTableGenerator::CONFIG_KEY));

        return $class;
    }

}