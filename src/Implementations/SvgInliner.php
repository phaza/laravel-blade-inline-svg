<?php namespace Phaza\InlineSvg\Implementations;

use Phaza\InlineSvg\Contracts\SvgInliner as SvgInlinerContract;

class SvgInliner implements SvgInlinerContract
{
    /**
     * @param       $svgPath
     * @param       $htmlClass
     * @param array $attributes
     */
    public function render( $svgPath, $attributes = [ ] )
    {
        $xml = $this->getXmlObject( $svgPath );

        foreach ($attributes as $attr => $value)
        {
            $xml->addAttribute( $attr, $value );
        }

        return (string) $xml->asXML();
    }

    protected function getXmlObject( $svgPath )
    {
        return simplexml_load_file( $this->getPath( $svgPath ) );
    }

    protected function getPath( $svgPath )
    {
        if (strcmp( $svgPath[ 0 ], DIRECTORY_SEPARATOR ) === 0)
        {
            return $svgPath;
        }

        return config( 'blade-inline-svg.svg-path' ) . DIRECTORY_SEPARATOR . $svgPath;
    }
}
