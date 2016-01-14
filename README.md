### The what
This simple extension allows you inline svgs in your templates, which means your svg turns into first class citizens of your html and can be styled with css like all other html elements.
This reduces the needs for making multiple colored versions of the same icon just to add a :hover effect for instance.

```CSS
a:hover svg line {
	fill: #r00;
}
```
 
### The How`

Add `Phaza\InlineSvg\BladeInlineSvgServiceProvider::class` to the `providers` array and  
`"SvgInliner" => Phaza\InlineSvg\Facades\SvgInliner::class` to the `aliases` array in `config/app.php`.

Optionally publish the config, it'll be named `blade-inline-svg.php`.

### Configuration
svg-path:  
  This is the default folder where the inliner should look for svg files.
  
### Synopsis
`@svg($path, $attributes)`

#### `$path`:
If `$path` starts with `DIRECTORY_SEPARATOR`, it's parsed as an absolute path.  
If not, it's parsed as relative path starting at `config('blade-inline-svg.svg-path')` 

#### `$attributes:
`$attributes` is an associative array of attributes you want to set on the svg element. Use this to add classes (or transforms) to easy reference the svg.
