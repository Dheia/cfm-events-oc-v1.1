<?php namespace Umaha\Partners;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Umaha\Partners\Components\PartnerRegistration' => 'PartnerRegistration'
    	];
    }

    public function registerSettings()
    {
    }
}
