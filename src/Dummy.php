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

class Dummy implements \Stringable
{
    public function __toString(): string
    {
        return self::class;
    }
}
