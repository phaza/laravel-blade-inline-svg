<?php namespace InlineSvg;

use Blade;
use InlineSvg\Contracts\SvgInliner as SvgInlinerContract;
use InlineSvg\Implementations\SvgInliner;

class BladeInlineSvgServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        Blade::directive( 'svg', function ( $args )
        {
            return "<?php SvgInliner::render{$args}; ?>";
        } );

        $this->publishes( [
          __DIR__ . '/config.php' => config_path( 'blade-inline-svg.php' ),
        ] );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton( SvgInlinerContract::class, function ()
        {
            return new SvgInliner();
        } );
    }
}
