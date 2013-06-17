<?php
return array(
    'service_manager' => array(
        'factories' => array( //    'SampleGenerated\Table\ArticleTable' => 'SampleGenerated\Generated\Table\Factory\ArticleTableFactory',
        ),
        'initializers' => array(
            'TableInitializer - inject adapter'
        ),
    ),
);