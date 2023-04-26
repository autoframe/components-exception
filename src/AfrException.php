<?php
declare(strict_types=1);

namespace Autoframe\Components\Exception;

/**
 * If you don't like the default exception class, you can use your own:
 * define('Autoframe\Components\Exception\SWAP_AFR_EXCEPTION','..dir../CustomAfrException.php');
 */

if(defined('Autoframe\Components\Exception\SWAP_AFR_EXCEPTION')){
    $phpInclude = constant('Autoframe\Components\Exception\SWAP_AFR_EXCEPTION');
    if(file_exists($phpInclude)){
        include_once($phpInclude);
    }
}
if(!class_exists('Autoframe\Components\Exception\AfrException',false)){
    include_once(__DIR__.DIRECTORY_SEPARATOR.'AfrException_.php');
}