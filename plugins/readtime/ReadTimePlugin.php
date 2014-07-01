<?php
namespace Craft;

class ReadTimePlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('Estimated Read Time');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'Ryan Shrum';
    }

    function getDeveloperUrl()
    {
        return 'http://www.ehousestudio.com';
    }
    
    
    
	/**
	 * Register twig extension
	 */
    public function hookAddTwigExtension()
    {
        Craft::import('plugins.readtime.twigextensions.ReadTimeTwigExtension');

        return new ReadTimeTwigExtension();
    }
}