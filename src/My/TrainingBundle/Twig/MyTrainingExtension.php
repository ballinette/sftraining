<?php
namespace My\TrainingBundle\Twig;

class MyTrainingExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('firstbold', array($this, 'firstboldFilter')),
        );
    }

    public function firstboldFilter($item)
    {
        return '<b>'.strtoupper($item[0]).'</b>'
                .strtolower(substr($item, 1));
    }

    public function getName()
    {
        return 'training';
    }
}