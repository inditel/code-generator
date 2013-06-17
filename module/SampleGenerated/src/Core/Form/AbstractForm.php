<?php
/**
 * Created by Inditel Meedia OÜ
 * User: Oliver
 * Date: 18.06.13 1:24
 */

namespace Core\Form;


use Core\Fieldset\AbstractFieldset;
use Zend\Form\Form;

class AbstractForm extends Form
{

    protected function setupUsedElements(array $elements)
    {
        foreach ($elements as $key => $value) {
            $element = $this->get($key);
            if ($element instanceof AbstractFieldset) {
                $element->setupUsedElements($value);
            }
        }
    }

}