<?php
// autoload function
function InvoiceAutoloader($class) {
    echo $class;die;
	if(strpos($class, 'InvoiceBundle') == 0 ){
		// convert namespace to full file path
		$class = dirname(__FILE__) . '/../' . str_replace('\\', '/', $class) . '.php';
		
		if(file_exists($class)){
		    require_once($class);
		}
		
	}
}
spl_autoload_register('InvoiceAutoloader');


