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

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class UrlTest extends WebTestCase
{
    /**
     * @dataProvider providerUrl
     */
    public function testUrl(string $url, string $method = 'GET'): void
    {
        $client = static::createClient();
        $crawler = $client->request($method, $url);
        $statusCode = $client->getResponse()->getStatusCode();

        $this->assertSame($statusCode, Response::HTTP_OK, sprintf('Response for "%s" failed with status "%d" instead of HTTP-OK (200)', $url, $statusCode));
    }

    /**
     * @return array<int,array<int,mixed>>
     */
    public function providerUrl(): array
    {
        return [
            ['/'],
        ];
    }
}
