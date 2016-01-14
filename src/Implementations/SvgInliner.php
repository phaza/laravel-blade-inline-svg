<?php namespace InlineSvg\Implementations;

use InlineSvg\Contracts\SvgInliner as SvgInlinerContract;

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
        return simplexml_load_file( $svgPath );
    }
}
