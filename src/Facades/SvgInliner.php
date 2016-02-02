<?php namespace Phaza\InlineSvg\Facades;

use Illuminate\Support\Facades\Facade;

class SvgInliner extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'svginliner';
    }
}
