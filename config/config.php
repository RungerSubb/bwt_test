<?php
/**
 * configuration file
 */

//> controller constants
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');
//<

//> using template
$template = 'default';

// way to template files
define('TemplatePrefix', "../views/{$template}/");
define('TemplatePostfix', '.tpl');

// way to template files in web
define('TemplateWebPath', "/templates/{$template}/");
//<


//initialize template engine Smarty
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/templates_c');
$smarty->setCacheDir('../tmp/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);
