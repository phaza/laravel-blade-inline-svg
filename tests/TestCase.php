<?php

class TestCase extends Orchestra\Testbench\TestCase
{
    protected function getPackageProviders( $app )
    {
        return [ \Phaza\InlineSvg\BladeInlineSvgServiceProvider::class ];
    }

    protected function getPackageAliases( $app )
    {
        return [
          'SvgInliner' => \Phaza\InlineSvg\Facades\SvgInliner::class,
        ];
    }


}
