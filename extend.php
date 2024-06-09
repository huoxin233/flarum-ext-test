<?php

/*
 * This file is part of huoxin/test.
 *
 * Copyright (c) 2024 huoxin.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Huoxin\\Test;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js'),
        
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js'),
        
    new Extend\Locales(__DIR__.'/locale'),
];
