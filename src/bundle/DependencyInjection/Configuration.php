<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace Ibexa\Bundle\AutomatedTranslation\DependencyInjection;

use Ibexa\Bundle\Core\DependencyInjection\Configuration\SiteAccessAware;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

class Configuration extends SiteAccessAware\Configuration
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('ibexa_automated_translation');
        $rootNode = $treeBuilder->getRootNode();
        $systemNode = $this->generateScopeBaseNode($rootNode);
        $systemNode
            ->variableNode('configurations')->end()
            ->arrayNode('non_translatable_characters')->end()
            ->arrayNode('non_translatable_tags')->end()
            ->arrayNode('non_translatable_self_closed_tags')->end();

        return $treeBuilder;
    }
}
