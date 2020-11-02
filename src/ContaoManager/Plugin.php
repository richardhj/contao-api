<?php

declare(strict_types=1);

/*
 * This file is part of richardhj/contao-api.
 *
 * Copyright (c) 2020-2020 Richard Henkenjohann
 *
 * @package   richardhj/contao-api
 * @author    Richard Henkenjohann <richardhenkenjohann@googlemail.com>
 * @copyright 2020-2020 Richard Henkenjohann
 * @license   https://github.com/richardhj/contao-api/blob/master/LICENSE LGPL-3.0
 */

namespace Richardhj\ContaoApiBundle\ContaoManager;

use ApiPlatform\Core\Bridge\Symfony\Bundle\ApiPlatformBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Config\ConfigInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Dependency\DependentPluginInterface;
use Richardhj\ContaoApiBundle\RichardhjContaoApiBundle;

class Plugin implements BundlePluginInterface, DependentPluginInterface
{
    /**
     * Gets a list of autoload configurations for this bundle.
     *
     * @return ConfigInterface[]
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ApiPlatformBundle::class),
            BundleConfig::create(RichardhjContaoApiBundle::class)
                ->setLoadAfter([ApiPlatformBundle::class, ContaoCoreBundle::class]),
        ];
    }

    public function getPackageDependencies()
    {
        return [
            'api-platform/core',
        ];
    }
}
