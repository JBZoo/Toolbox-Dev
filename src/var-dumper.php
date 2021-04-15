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

declare(strict_types=1);

use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;
use Symfony\Component\VarDumper\VarDumper;

if (!class_exists(VarDumper::class)) {
    return false;
}

/** @psalm-suppress MissingClosureParamType */
VarDumper::setHandler(static function ($variable): void {
    $maxStringWidth = 16384; // Show first 16kb only, optimization

    $varCloner = new VarCloner();
    $varCloner->setMaxItems(500);
    $varCloner->setMaxString($maxStringWidth);

    $cliDumper = new CliDumper(null, 'UTF-8', CliDumper::DUMP_COMMA_SEPARATOR);
    $cliDumper->setMaxStringWidth($maxStringWidth);
    $cliDumper->setIndentPad('    ');
    $cliDumper->setDisplayOptions(['fileLinkFormat' => false]);

    $varClone = $varCloner->cloneVar($variable);

    $cliDumper->dump($varClone);
});

return true;
