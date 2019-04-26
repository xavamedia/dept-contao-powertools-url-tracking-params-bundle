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
            BundleConfig::create(DeptPowertoolsUrlTrackingParamsBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['dept-powertools-url-tracking-params-bundle']),
        ];
    }

}