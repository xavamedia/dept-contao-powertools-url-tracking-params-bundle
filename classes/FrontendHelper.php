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


namespace Powertools\UrlParams;

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
    'gclid'
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
  public static function replaceInsertTags($strInsertTag)
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
