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
        return '1.0.1';
    }

    function getDeveloper()
    {
        return 'Ryan Shrum';
    }

    function getDeveloperUrl()
    {
        return 'http://www.ryanshrum.com';
    }
    
    
    
	/**
	 * Register twig extension
	 */
    public function addTwigExtension()
    {
        Craft::import('plugins.readtime.twigextensions.ReadTimeTwigExtension');

        return new ReadTimeTwigExtension();
    }
}