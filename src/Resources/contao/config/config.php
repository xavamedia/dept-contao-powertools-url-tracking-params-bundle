<?php

/**
 * Dept Contao Powertools Url Tracking Params Bundle for Contao Open Source CMS
 *
 * Copyright (C) 2019 Dept
 *
 * @package dept-powertools-url-tracking-params-bundle
 * @author  Dept <https://www.deptagency.com>
 * @author  Jannis Ritterspach <jannis.ritterspach@deptagency.com>
 * @license LGPL
 */

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['generatePage'][] = array('Dept\PowertoolsUrlTrackingParamsBundle\FrontendHelper', 'getUrlParams');
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('Dept\PowertoolsUrlTrackingParamsBundle\FrontendHelper', 'replaceInsertTags');
