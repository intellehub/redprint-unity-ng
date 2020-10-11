<?php

namespace Shahnewaz\RedprintUnityNg\Menu\Filters;

use Shahnewaz\RedprintUnityNg\Menu\Builder;

class ClassesFilter implements FilterInterface
{
    public function transform($item, Builder $builder)
    {
        if (! isset($item['header'])) {
            $item['classes'] = $this->makeClasses($item);
            $item['class'] = implode(' ', $item['classes']);
            $item['top_nav_classes'] = $this->makeClasses($item, true);
            $item['top_nav_class'] = implode(' ', $item['top_nav_classes']);
        }

        return $item;
    }

    protected function makeClasses($item, $topNav = false)
    {
        $classes = [];

        if ($item['active']) {
            $classes[] = 'active selected';
        }

        if (isset($item['submenu'])) {
            $classes[] = $topNav ? 'dropdown' : 'treeview';
        }

        return $classes;
    }
}
