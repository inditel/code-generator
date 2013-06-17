<?php
/**
 * Created by Inditel Meedia OÜ
 * User: Oliver
 * Date: 18.06.13 0:48
 */

namespace Core\Fieldset;


use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;

abstract class AbstractFieldset extends Fieldset implements InputFilterProviderInterface
{

    public function setupUsedElements(array $elements)
    {
        $fields = array();
        foreach ($elements as $field) {
            $method = 'getElement' . ucfirst($field);
            if (method_exists($this, $method)) {
                $fields[] = $this->{'getElement' . ucfirst($field)};
            } else {
                throw new \RuntimeException();
            }
        }
        return $fields;
    }
}