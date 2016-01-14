<?php

class TestCase extends Orchestra\Testbench\TestCase
{
    protected function getPackageProviders( $app )
    {
        return [ \InlineSvg\BladeInlineSvgServiceProvider::class ];
    }

    protected function getPackageAliases( $app )
    {
        return [
          'SvgInliner' => \InlineSvg\Facades\SvgInliner::class,
        ];
    }


}
