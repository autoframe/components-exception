<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Autoframe\Components\Exception\AfrException;

class AfrExceptionExtended extends AfrException
{

}

echo new AfrExceptionExtended('Exception works!');
throw new AfrExceptionExtended('Throwed');
