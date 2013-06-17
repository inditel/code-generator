<?php
/**
 * Created by Inditel Meedia OÜ
 * User: Oliver
 * Date: 18.06.13 0:42
 */

namespace SampleGenerated\Generated\InputFilterProvider;


use Code\InputFiler\AbstractInputFilterProvider;

abstract class AbstractArticleInputFilterProvider extends AbstractInputFilterProvider
{

    /**
     * Should return an array specification compatible with
     * {@link Zend\InputFilter\Factory::createInputFilter()}.
     *
     * @return array
     */
    public function getInputFilterSpecification()
    {
        // setup filters? Should do separate method for each filter and load only necessary filters?
    }
}