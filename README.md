# Omnipay: Payflow Extended

**Payflow Extended driver with recurring payment support for the Omnipay PHP payment processing library**

**Upgrade from version 2 to 3**

[Omnipay](https://github.com/thephpleague/omnipay) is a framework agnostic, multi-gateway payment
processing library for PHP 5.3+. This package adds additional recurring payment options for the Payflow extension.

## Installation

The Omnipay Payflow Extended driver is installed via [Composer](http://getcomposer.org/). To install, simply add it
to your `composer.json` file:

```json
{
    "repositories": {
        "omnipay-payflow-extended": {
            "type": "path",
            "url": "../repos/omnipay-payflow-extended"
        }        
    },
        
    "require": {
        "maxcri/omnipay-payflow-extended": "dev-master"
    }
}
```

And run composer to update your dependencies:

    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar update

## Basic Usage

The following gateways are provided by this package:

* Payflow_ProExtended

For general usage instructions, please see the main [Omnipay](https://github.com/thephpleague/omnipay)
repository.

## Support

If you are having general issues with Omnipay, we suggest posting on
[Stack Overflow](http://stackoverflow.com/). Be sure to add the
[omnipay tag](http://stackoverflow.com/questions/tagged/omnipay) so it can be easily found.

If you want to keep up to date with release anouncements for Omnipay, discuss ideas for the project,
or ask more detailed questions, there is also a [mailing list](https://groups.google.com/forum/#!forum/omnipay) which
you can subscribe to.

If you believe you have found a bug in this package, please report it using the [GitHub issue tracker](https://github.com/thephpleague/omnipay-payflow-extended/issues),
or better yet, fork the library and submit a pull request.
