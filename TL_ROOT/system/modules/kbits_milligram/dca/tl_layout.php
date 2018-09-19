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
 * Extend tl_layout
 */


/**
 * SELECTORS
 */
$GLOBALS['TL_DCA']['tl_layout']['palettes']['__selector__'][] = 'addMilligram';


/**
 * PALETTES
 */
$GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] = str_replace('{mootools_legend}', '{milligram_legend:hide},addMilligram;{mootools_legend}', $GLOBALS['TL_DCA']['tl_layout']['palettes']['default']);


/**
 * SUBPALETTES
 */
$GLOBALS['TL_DCA']['tl_layout']['subpalettes']['addMilligram'] = 'milligram_source_css';


/**
 * FIELDS
 */
$GLOBALS['TL_DCA']['tl_layout']['fields']['addMilligram'] = array
(
  'label'					=> &$GLOBALS['TL_LANG']['tl_layout']['addMilligram'],
  'exclude'					=> true,
  'inputType'					=> 'checkbox',
  'eval'					=> array('submitOnChange'=>true),
  'sql' 					=> "char(1) NOT NULL default ''"
);


$GLOBALS['TL_DCA']['tl_layout']['fields']['milligram_source_css'] = array
(
  'label'                  			=> &$GLOBALS['TL_LANG']['tl_layout']['milligram_source_css'],
  'exclude'                 			=> true,
  'inputType'               			=> 'select',
  'options'					=> array('none','local','cdn'),
  'reference' 					=> &$GLOBALS['TL_LANG']['tl_layout']['milligram_source_css_reference'],
  'sql'                     			=> "varchar(5) NOT NULL default 'none'"
);