<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class ReadTimeTwigExtension extends Twig_Extension
{
    public function getName()
    {
        return 'ReadTime';
    }

    public function getFilters()
    {
        return array(
            'readtime' => new Twig_Filter_Method($this, 'readtimeFilter'),
        );
    }

    public function readtimeFilter($content, $suffix = ' minute read')
    {
        $words = str_word_count(strip_tags($content));
        $min = floor($words / 200);
		$toReturn = ($min < 1 ? 'less than 1' : $min) . ' ' . $suffix;
        return $toReturn;
    }
}