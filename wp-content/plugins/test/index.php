<?php
/*
Plugin Name: Test Plugin
Plugin URI: SavchenkoV
Description: Component 0.0.1
Version: 1.0
Author: SavchenkoV
Author URI: http://страница_автора_плагина
*/

register_activation_hook(__FILE__, "activate");

    function activate(){
        error_log(date("Y-m-d H:i:s ")."__Activate plugin test\r\n ", 3, dirname(__FILE__).'/logs.log');

    }


register_deactivation_hook(__FILE__, "deactivate");

    function deactivate(){
        error_log(date("Y-m-d H:i:s ")."Deactivate plugin test\r\n", 3, dirname(__FILE__).'/logs.log');

    }

register_uninstall_hook(__FILE__, "uninstall");

    function uninstall(){
        error_log(date("Y-m-d H:i:s ")."UnInstall plugin test\r\n", 3, dirname(__FILE__).'/logs.log');
    }

?>
