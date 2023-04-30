# Autoframe is a low level framework that is oriented on SOLID flexibility

[![Build Status](https://github.com/autoframe/components-exception/workflows/PHPUnit-tests/badge.svg?branch=main)](https://github.com/components-exception/actions?query=branch:main)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)
![Packagist Version](https://img.shields.io/packagist/v/autoframe/components-exception?label=packagist%20stable)
[![Downloads](https://img.shields.io/packagist/dm/autoframe/components-exception.svg)](https://packagist.org/packages/autoframe/components-exception)

*PHP array utilities like custom sort, merge for settings profiles, etc*

Namespace:
- Autoframe\\Component\\Exception

Includes:
- Namespace: 
- Class: AfrException
- Extends: Exception
- Implements: Throwable
- Overwritable: define a php path that can be included once with a class named AfrException using the desired namespace

If you don't like the default exception class, you can use your own:

    define('Autoframe\Components\Exception\SWAP_AFR_EXCEPTION','..dir../CustomAfrException.php');
	CustomAfrException.php =>
        class AfrException extends Exception implements Throwable {...}