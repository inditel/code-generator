<?php
/**
 * Created by Inditel Meedia OÜ
 * User: Oliver
 * Date: 18.06.13 1:24
 */

namespace SampleGenerated\Form;


use Core\Form\AbstractForm;
use SampleGenerated\Generated\Fieldset\AbstractArticleFieldset;

class ArticleForm extends AbstractForm
{

    /**
     * @var AbstractArticleFieldset
     */
    private $articleFieldset;

    public function __construct(AbstractArticleFieldset $articleFieldset)
    {
        $this->add($articleFieldset);
    }

    public function init()
    {
        $this->articleFieldset->init();
        $this->articleFieldset->setUseAsBaseFieldset(true);

        $validationGroup = $this->getValidationGroupSetup();
        $this->setupUsedElements($validationGroup);
        $this->setValidationGroup($validationGroup);
    }

    public function getValidationGroupSetup()
    {
        return array(
            'article' => array(
                'headline',
                'introduction',
                'contents',
            ),
        );
    }
}