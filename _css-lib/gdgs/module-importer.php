<?php 
/**
 * HTTP Headers
 */

header('content-type:text/css');
header("Expires: ".gmdate("D, d M Y H:i:s", (time()+900)) . " GMT"); 

/**
 * GDGS Constants
 */
 
define( "ROOT", $_SERVER['DOCUMENT_ROOT'] );
define( "CSSPATH", ROOT . "/gdgs/_css-lib/gdgs/_modules/");

/* For development */
$pageName = $_SERVER['PHP_SELF']; // for if (preg_match('/pageName/',$self))

/* For loading */
    
function load_css_module( $filename = '' ) {

    $get = $_GET['_modules'];
    $modules = explode( ",", $get );

    if ( $filename != '' && in_array( $filename, $modules ) ) {
        $stylesheet = CSSPATH . $filename;
    
        if (file_exists($stylesheet)) {
            return true;
        } else {
            return false;
        }
    
    }
    
}
?>
@charset "utf-8";

/**
 * GDGS Module Importer (Main)
 * 
 * This is the main GDGS Module Importer. It doubles as GDGS's "initializer."
 * Comment out what you don't want or need.
 * 
 * Quick spec: Hit, e.g., module-importer.css?_modules=reset,font,system
 *             But the order must be preserved.
 *
 * @cssdoc          version 1.0-pre
 * 
 * @site            Getting Dress'd Grid System
 * @link            http://nerdfiles.net/gdgs/
 * @author          nerdfiles
 * @copyright       Copyright (c) 2010, 2010-2011 by nerdfiles (Aaron Alexander)
 * @license         Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License
 *
 * @project         gdgs
 * @version         0.0.1
 * @package         gdgs-core
 * @subpackage      gdgs-importer
 * @since           0.0.1
 * @date            2011-03-09 03:06
 * @lastmodified    2011-03-09 03:06
 *
 * @todo            Complete cssdoc implementation.
                    @package =def core means required for gdgs to function assuming all
 *                  features are assumed.
                    Unit test all modules.
 *
 * @css-for         all
 * @media           all
 * @affected        all
 * @bugfix
 * @workaround
 * @tested          all
 * @valid           true
 */


<?php if ( load_css_module('reset.css') ) : ?>
/**
 * Reset
 * 
 * @section:        import
 * @subsection      utility
 */
 
    @import url('_modules/reset.css');
<?php endif; ?>


/**
 * Font
 * 
 * @section:        import
 * @subsection      utility
 */
 
    @import url('_modules/font.css');


/**
 * Typesetting
 * 
 * @section:        import
 * @subsection      utility
 */
 
    @import url('_modules/typesetting.css');


/**
 * System
 * 
 * @section:        import
 * @subsection      core
 */

    @import url('_modules/system.css');
    

/**
 * Form
 * 
 * @section:        import
 * @subsection      extension
 */

    @import url('_modules/form.css');


/**
 * Tools
 *
 * @section:        import
 * @subsection      utility
 */

    @import url('_modules/tools.css');
    

/**
 * Table
 * 
 * @section:        import
 * @subsection      extension
 */
 
    @import url('_modules/table.css');
    

/**
 * Bounds
 *
 * @section:        import
 * @subsection      utility
 */

    @import url('_modules/bounds.css');


/**
 * Standardize
 *
 * @section:        import
 * @subsection      utility
 */

    @import url('_modules/standardize.css');


/**
 * Engine Importer
 *
 * @section         import
 * @subsection      importer
 */

    @import url('_importers/engine-importer.css');


/**
 * Browser Importer
 *
 * @section:        import
 * @subsection      importer
 */

    @import url('_importers/browser-importer.css');
    

/**
 * Device Importer
 *
 * @section:        import
 * @subsection      importer
 */

    @import url('_importers/device-importer.css');


/**
 * Page
 *
 * @section:        import
 * @subsection      media
 */

    @import url('_modules/page.css');


/**
 * Print
 *
 * @section:        import
 * @subsection      media
 */

    @import url('_modules/print.css');


/* End of module-importer.css */
