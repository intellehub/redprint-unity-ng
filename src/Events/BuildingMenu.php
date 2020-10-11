<?php

namespace Shahnewaz\RedprintUnityNg\Events;

use Shahnewaz\RedprintUnityNg\Menu\Builder;

class BuildingMenu
{
    public $menu;

    public function __construct(Builder $menu)
    {
        $this->menu = $menu;
    }
}
