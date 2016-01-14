<?php namespace Phaza\InlineSvg\Contracts;

interface SvgInliner
{

    public function render( $svgPath, $attributes = [] );
}
