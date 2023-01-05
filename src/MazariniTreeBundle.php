<?php

/**
 * This file is part of mazarini/tree-bundle.
 *
 * mazarini/tree-bundle is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * mazarini/tree-bundle is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 * or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License
 * for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with mazarini/tree-bundle. If not, see <https://www.gnu.org/licenses/>.
 *
 * @package Mazarini/TreeBundle
 */

namespace Mazarini\TreeBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class MazariniTreeBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    /**
     * @param array<string,mixed> $config
     */
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        // load an XML, PHP or Yaml file
        $container->import('../config/services.yaml');

        $container->parameters()
           ->set('mazarini_tree.bundle_path', $this->getPath())
        ;
    }
}
