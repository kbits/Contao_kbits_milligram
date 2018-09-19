<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package     kbits.at_milligram
 * @copyright   kbits.at 2018
 * @author      kbits <http://www.kbits.at>
 * @link        http://www.kbits.at
 * @license     http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace kbits\Milligram;


class ModuleMilligram extends \Frontend { 
    /**
     * Milligram Version
     * @var string
     * @since v.1.0.0
     */
    protected $version = '3.3.4';
       
    
    /**
     * Adds Milligram to your page
     * @since v.1.0.0
     */
    public function addMilligram($objPage, $objLayout, $objPageRegular) {
        $blnXhtml = ($objPage->outputFormat == 'xhtml');
        $protocol = \Environment::get('ssl') ? 'https://' : 'http://'; 
        $baseurl = trim($objPage->staticFiles, "/");
        if ($baseurl == '') {
            $baseurl = trim($this->Environment->base, "/");
        }
        
        if ($objLayout->addMilligram) {      
            //include css
            if ($objLayout->milligram_source_css != 'none') {
                if ($objLayout->milligram_source_css == 'local') {
                    $source = $baseurl.'/system/modules/kbits_milligram/assets/css/milligram.min.css'; 
                } else {
                   $source = $protocol.'//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css'; 
                }   
                $objPageRegular->Template->framework = '<link' . ($blnXhtml ? ' type="text/css"' : '') .' rel="stylesheet" href="'.$source.'">' . "\n".$objPageRegular->Template->framework;
            }
        }
    }
}