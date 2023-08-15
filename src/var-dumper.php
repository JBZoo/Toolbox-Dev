<?php

/**
 * JBZoo Toolbox - Toolbox-Dev.
 *
 * This file is part of the JBZoo Toolbox project.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT
 * @copyright  Copyright (C) JBZoo.com, All rights reserved.
 * @see        https://github.com/JBZoo/Toolbox-Dev
 */

declare(strict_types=1);

use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\AbstractDumper;
use Symfony\Component\VarDumper\Dumper\CliDumper;
use Symfony\Component\VarDumper\VarDumper;

if (!\class_exists(VarDumper::class)) {
    return false;
}

VarDumper::setHandler(static function (mixed $variable): void {
    $maxStringWidth = 16 * 1024; // Show first 16kb only, optimization

    $varCloner = new VarCloner();
    $varCloner->setMaxItems(500);
    $varCloner->setMaxString($maxStringWidth);

    // Send output to 'php://stderr' instead of 'php://stdout' to avoid breaking the output of the main script on debug
    CliDumper::$defaultOutput = 'php://stderr';

    $cliDumper = new CliDumper(null, 'UTF-8', AbstractDumper::DUMP_COMMA_SEPARATOR);
    $cliDumper->setMaxStringWidth($maxStringWidth);
    $cliDumper->setIndentPad('    '); // Classic style
    $cliDumper->setDisplayOptions(['fileLinkFormat' => false]); // Disable file links for PHPStorm

    $varClone = $varCloner->cloneVar($variable);

    $cliDumper->dump($varClone);
});

return true;
