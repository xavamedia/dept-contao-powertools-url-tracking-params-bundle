<?php

/**
 * Dept Contao Powertools Url Tracking Params Bundle for Contao Open Source CMS
 *
 * Copyright (C) 2019 Dept
 *
 * @package dept-contao-powertools-url-tracking-params-bundle
 * @author  Dept <https://www.deptagency.com>
 * @author  Jannis Ritterspach <jannis.ritterspach@deptagency.com>
 * @license LGPL
 */

namespace Dept\ContaoPowertoolsUrlTrackingParams;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class ContaoManagerPlugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(DeptContaoPowertoolsUrlTrackingParamsBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['dept-contao-powertools-url-tracking-params-bundle']),
        ];
    }

}