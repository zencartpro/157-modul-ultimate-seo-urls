<?php
/**
 * Part of Ultimate URLs for Zen Cart, v3.0.0+.
 *
 * @copyright Copyright 2019        Cindy Merkin (vinosdefrutastropicales.com)
 * @copyright Copyright 2013 - 2015 Andrew Ballanger
 * @license http://www.gnu.org/licenses/gpl.txt GNU GPL V3.0
 */

if (!defined('IS_ADMIN_FLAG')) {
	die('Illegal Access');
}

$autoLoadConfig[200][] = array(
    'autoType' => 'init_script',
    'loadFile' => 'init_usu_admin.php'
);
                                
$autoLoadConfig[200][] = array(
    'autoType' => 'class',
    'loadFile' => 'observers/UsuAdminObserver.php',
    'classPath' => DIR_WS_CLASSES
);
$autoLoadConfig[200][] = array(
    'autoType' => 'classInstantiate',
    'className' => 'UsuAdminObserver',
    'objectName' => 'usuAdmin'
);
