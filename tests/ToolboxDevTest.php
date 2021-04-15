<?php

/**
 * JBZoo Toolbox - Toolbox-Dev
 *
 * This file is part of the JBZoo Toolbox project.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package    Toolbox-Dev
 * @license    MIT
 * @copyright  Copyright (C) JBZoo.com, All rights reserved.
 * @link       https://github.com/JBZoo/Toolbox-Dev
 */

namespace JBZoo\PHPUnit;

/**
 * Class ToolboxDevTest
 * @package JBZoo\PHPUnit
 */
class ToolboxDevTest extends PHPUnit
{
    public function testDumpMethod()
    {
        dump(123);
        isTrue(true);
    }
}
