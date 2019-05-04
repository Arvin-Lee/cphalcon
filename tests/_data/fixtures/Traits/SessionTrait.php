<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Fixtures\Traits;

use Phalcon\Session\Adapter\Files;
use Phalcon\Session\Adapter\Libmemcached;
use Phalcon\Session\Adapter\Noop;
use Phalcon\Session\Adapter\Redis;

/**
 * @package Phalcon\Test\Fixtures\Traits
 */
trait SessionTrait
{
    protected function getSessionFiles(): Files
    {
        return new Files(
            [
                'save_path' => cacheFolder(),
            ]
        );
    }

    protected function getSessionLibmemcached(): Libmemcached
    {
        return new Libmemcached(
            [
                'servers' => [
                    [
                        'host' => env('DATA_MEMCACHED_HOST'),
                        'port' => env('DATA_MEMCACHED_PORT'),
                    ],
                ],
            ]
        );
    }

    protected function getSessionNoop(): Noop
    {
        return new Noop();
    }

    protected function getSessionRedis(): Redis
    {
        return new Redis(
            [
                'host'  => env('DATA_REDIS_HOST'),
                'port'  => env('DATA_REDIS_PORT'),
                'index' => env('DATA_REDIS_NAME'),
            ]
        );
    }
}
