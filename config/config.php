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
 * Hooks
 */
$GLOBALS['TL_HOOKS']['generatePage'][] = array('Powertools\UrlParams\FrontendHelper', 'getUrlParams');
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('Powertools\UrlParams\FrontendHelper', 'replaceInsertTags');
