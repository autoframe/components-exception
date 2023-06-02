<?php
declare(strict_types=1);

namespace Autoframe\Components\Exception;

use Exception;
use Throwable;

/**
 * If you don't like the default exception class, you can use your own:
 * define('Autoframe\Components\Exception\SWAP_AFR_EXCEPTION','..dir../CustomAfrException.php');
 */
if (defined(__NAMESPACE__ . '\SWAP_AFR_EXCEPTION')) {
    $phpInclude = constant(__NAMESPACE__ . '\SWAP_AFR_EXCEPTION');
    if (file_exists($phpInclude)) {
        include_once($phpInclude);
    }
}

if (!class_exists(__NAMESPACE__ . '\AfrException', false)) {

    class AfrException extends Exception implements Throwable
    {
        /**
         * Construct the exception. Note: The message is NOT binary safe.
         * Redefine the exception so message isn't optional
         * @link https://php.net/manual/en/exception.construct.php
         * @param string $message [optional] The Exception message to throw.
         * @param int $code [optional] The Exception code.
         * @param null|Throwable $previous [optional] The previous throwable used for the exception chaining.
         */
        public function __construct($message, $code = 0, Throwable $previous = null)
        {
            parent::__construct($message, $code, $previous);
        }

        /**
         * String representation of the exception
         * @link https://php.net/manual/en/exception.tostring.php
         * @return string the string representation of the exception.
         */
        public function __toString(): string
        {
            return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
        }

    }
}