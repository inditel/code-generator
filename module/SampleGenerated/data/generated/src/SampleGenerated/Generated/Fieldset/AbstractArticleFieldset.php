<?php
/**
 * Created by Inditel Meedia OÜ
 * User: Oliver
 * Date: 18.06.13 0:47
 */

namespace SampleGenerated\Generated\Fieldset;


use Core\Fieldset\AbstractFieldset;
use SampleGenerated\InputFilterProvider\ArticleInputFilterProvider;
use SampleGenerated\Table\CategoryTable;
use Zend\Form\Element\Select;

class AbstractArticleFieldset extends AbstractFieldset
{

    /**
     * @var CategoryTable
     */
    protected $categoryTable;
    /**
     * @var ArticleInputFilterProvider
     */
    protected $inputFilter;

    public function __construct()
    {
        parent::__construct('article');
    }

    /**
     * @param CategoryTable $categoryTable
     */
    public function setCategoryTable($categoryTable)
    {
        $this->categoryTable = $categoryTable;
    }

    /**
     * @param ArticleInputFilterProvider $inputFilter
     */
    public function setInputFilter($inputFilter)
    {
        $this->inputFilter = $inputFilter;
    }

    public function init()
    {

    }

    /**
     * @return array
     */
    public function getElementHeadline()
    {
        return array(
            'type' => 'text',
        );
    }

    /**
     * @return array
     */
    public function getElementCategory()
    {
        return array(
            'type' => 'select',
        );
    }

    /**
     * @param array|\Traversable $data
     */
    public function populateValues($data)
    {
        parent::populateValues($data);

        $this->setCategoryValueOptions($data); // added by form select property handler
    }

    protected function setCategoryValueOptions($data) // method is added by form select property handler
    {
        if (isset($this->byName['category'])) { // has method uses array_key_exists which is very very slow.
            /** @var Select $element */
            $element = $this->get('category');
            $element->setValueOptions($this->getCategoryValueOptions($data));
        }
    }

    /**
     * @param array|\Traversable $data
     * @return array
     */
    protected function getCategoryValueOptions($data) // method is added by form select property handler
    {
        /** @var Select $categorySelect */
        $options = array();
        foreach ($this->categoryTable->findByArticleId($data['id'])->toArray() as $element) { // @TODO Write helper for this foreach logic
            $options[$element['id']] = $element['name']; // @TODO knowledge here. ID??? name??? Where do we get these? guess?
        }
        return $options;
    }

    /**
     * @return array
     */
    public function getInputFilterSpecification()
    {
        return $this->inputFilter->getInputFilterSpecification();
    }
}