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
 * Hooks
 */

$GLOBALS['TL_HOOKS']['generatePage'][] = array('kbits\Milligram\ModuleMilligram', 'addMilligram');