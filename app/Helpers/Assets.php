<?php
/**
 * Assets static helper.
 *
 * @author volter9
 * @author QsmaPL
 * @date 27th November, 2014
 * @date updated Sept 19, 2015
 */
namespace Helpers;

/**
 * Collect and output css and js link tags.
 */
class Assets
{
    /**
     * @var array Asset templates
     */
    protected static $templates = 
    [
        'js'  => '<script src="%s?%s" type="text/javascript"></script>',
        'css' => '<link href="%s?%s" rel="stylesheet" type="text/css">',
    ];

    /**
     * Common templates for assets.
     *
     * @param string|array $files
     * @param string       $template
     */
    protected static function resource($files, $template)
    {
        $template = self::$templates[$template];

        if (is_array($files)) {
            foreach ($files as $file) {
                echo sprintf($template, $file, ASSETS_VERSION)."\n";
            }
        } else {
            echo sprintf($template, $files, ASSETS_VERSION)."\n";
        }
    }

    /**
     * Output script.
     *
     * @param array|string $file/s
     * @param array|string $addition/s (optional)
     */
    public static function js($files, $additions = null)
    {
        self::resource($files, 'js');
        
        if (!empty($additions)) {
            self::resource($additions, 'js');
        }
    }

    /**
     * Output stylesheet.
     *
     * @param array|string $file/s
     * @param array|string $addition/s (optional)
     */
    public static function css($files, $additions = null)
    {
        self::resource($files, 'css');
        
        if (!empty($additions)) {
            self::resource($additions, 'css');
        }
    }
    
}
