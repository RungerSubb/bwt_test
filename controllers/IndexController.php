<?php
/**
 * main controller
 */

/**
 * Load start page
 *
 * @param $smarty template engine
 */
function indexAction($smarty){
    loadTemplate($smarty, 'index');
}

