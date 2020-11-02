<?php

declare(strict_types=1);

/*
 * This file is part of noi-hosting/api.
 *
 * (c) 2020-2020 Richard Henkenjohann <richardhenkenjohann@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Richardhj\ContaoApiBundle\DataProvider;

use ApiPlatform\Core\DataProvider\ContextAwareCollectionDataProviderInterface;
use ApiPlatform\Core\DataProvider\DenormalizedIdentifiersAwareItemDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\Model;
use Richardhj\ContaoApiBundle\Resource\ResourceInterface;

class FooDataProvider implements ContextAwareCollectionDataProviderInterface, RestrictedDataProviderInterface, DenormalizedIdentifiersAwareItemDataProviderInterface
{

    private ContaoFramework $framework;

    public function __construct(ContaoFramework $framework)
    {
        $this->framework = $framework;
    }

    public function getCollection(string $resourceClass, string $operationName = null, array $context = [])
    {
        $this->framework->initialize();

        $p = explode('\\', $resourceClass);
        $class = end($p);
        /** @var Model $class */
        $class = sprintf('\Contao\%sModel', $class);

        $models = $class::findAll();

        return array_map(fn(Model $model) => (object) $model->row(), $models->getModels());
    }

    public function getItem(string $resourceClass, $id, string $operationName = null, array $context = [])
    {
        $this->framework->initialize();

        $p = explode('\\', $resourceClass);
        $class = end($p);
        /** @var Model $class */
        $class = sprintf('\Contao\%sModel', $class);

        $model = $class::findByPk($id);

        return (object) $model->row();
    }

    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return in_array(ResourceInterface::class, class_implements($resourceClass), true);
    }
}
