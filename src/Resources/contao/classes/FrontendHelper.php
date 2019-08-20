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

namespace Dept\PowertoolsUrlTrackingParamsBundle;

class FrontendHelper extends \Contao\Frontend
{
  /**
   * Set url params
   * @var array
   */
  protected static $arrValidParams = [
    'utm_source',
    'utm_medium',
    'utm_campaign',
    'utm_term',
    'utm_content',
    'gclid',
    'fbclid',
    'mscklid'
  ];

  /**
   * Get url params and store it into the user session
   */
  public static function getUrlParams()
  {
    $objSession = \Session::getInstance();

    foreach (self::$arrValidParams as $strParam)
    {
      if ($strValue = \Input::get($strParam))
      {
        $objSession->set("powertools_$strParam", $strValue);
      }
    }
  }

  /**
   * Return the value of the session stored param
   *
   * @param string $strInsertTag
   */
  public static function replaceInsertTags($strInsertTag, $blnCache = true)
  {
    $arrSplit = explode('::', $strInsertTag);

    if ($arrSplit[0] != 'powertools_url_param' && !in_array($arrSplit[1], self::$arrValidParams))
    {
      return false;
    }

    $objSession = \Session::getInstance();
    $strValue = $objSession->get("powertools_$arrSplit[1]");

    return $strValue;
  }

}
