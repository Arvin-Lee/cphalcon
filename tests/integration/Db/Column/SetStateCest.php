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

namespace Phalcon\Test\Integration\Db\Column;

use IntegrationTester;

class SetStateCest
{
    /**
     * Tests Phalcon\Db\Column :: __set_state()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function dbColumnSetState(IntegrationTester $I)
    {
        $I->wantToTest("Db\Column - __set_state()");

        $I->skipTest("Need implementation");
    }
}
