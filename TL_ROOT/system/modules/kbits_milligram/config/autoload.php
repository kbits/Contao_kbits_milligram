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
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'kbits',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'kbits\Milligram\ModuleMilligram' => 'system/modules/kbits_milligram/modules/ModuleMilligram.php',
));