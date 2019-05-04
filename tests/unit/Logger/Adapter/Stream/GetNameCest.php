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

namespace Phalcon\Test\Unit\Logger\Adapter\Stream;

use Phalcon\Logger\Adapter\Stream;
use UnitTester;

/**
 * @package Phalcon\Test\Unit\Logger
 */
class GetNameCest
{
    /**
     * Tests Phalcon\Logger\Adapter\Stream :: getName()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function loggerAdapterStreamGetName(UnitTester $I)
    {
        $I->wantToTest('Logger\Adapter\Stream - getName()');

        $fileName = $I->getNewFileName('log', 'log');

        $outputPath = outputFolder('tests/logs/');

        $adapter = new Stream(
            $outputPath . $fileName
        );

        $I->assertEquals(
            $outputPath . $fileName,
            $adapter->getName()
        );

        $I->safeDeleteFile(
            $outputPath . $fileName
        );
    }
}
