<?php

/**
 * contao-powertools-url-params extension for Contao Open Source CMS
 *
 * Copyright (C) 2017 XAVA Media GmbH
 *
 * @package contao-powertools-url-params
 * @author  XAVA Media GmbH <https://xavamedia.com>
 * @author  Jannis Ritterspach <ritterspach@xavamedia.com>
 * @license LGPL
 */


/**
 * Register the namespace
 */
ClassLoader::addNamespace('Powertools\UrlParams');

/**
 * Register the classes
 */
ClassLoader::addClasses([

	// Classes
	'Powertools\UrlParams\FrontendHelper' => 'system/modules/contao-powertools-url-params/classes/FrontendHelper.php',

]);
