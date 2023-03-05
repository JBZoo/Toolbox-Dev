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
 * @see       https://github.com/JBZoo/Toolbox-Dev
 */

declare(strict_types=1);

$default = include __DIR__ . '/vendor/jbzoo/codestyle/src/phan/default.php';

return \array_merge($default, [
    'directory_list' => [
        'src',
        'vendor/symfony/var-dumper',
    ],
]);
