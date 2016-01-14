<?php namespace Phaza\InlineSvg\Facades;

use Illuminate\Support\Facades\Facade;
use Phaza\InlineSvg\Contracts\SvgInliner as SvgInlinerContract;

class SvgInliner extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return SvgInlinerContract::class;
    }
}
