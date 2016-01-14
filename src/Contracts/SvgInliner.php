<?php namespace InlineSvg\Contracts;

interface SvgInliner
{

    public function render( $svgPath, $attributes = [] );
}
