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
        return 'eHouse Studio';
    }

    function getDeveloperUrl()
    {
        return 'http://www.ehousestudio.com.com';
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