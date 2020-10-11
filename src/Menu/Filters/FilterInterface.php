<?php

namespace Shahnewaz\RedprintUnityNg\Menu\Filters;

use Shahnewaz\RedprintUnityNg\Menu\Builder;

interface FilterInterface
{
    public function transform($item, Builder $builder);
}
