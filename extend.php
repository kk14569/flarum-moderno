<?php

namespace kk14569\flarummoderno;

use Flarum\Extend;
use Flarum\Frontend\Document;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__.'/less/forum.less'),  
    (new Extend\Frontend('admin'))
        ->css(__DIR__.'/less/admin.less'),  
];
