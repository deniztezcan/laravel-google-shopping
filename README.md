Laravel Google Shopping
==============

[![Latest Stable Version](https://poser.pugx.org/deniztezcan/laravel-google-shopping/v/stable)](https://packagist.org/packages/deniztezcan/laravel-google-shopping)
[![Total Downloads](https://poser.pugx.org/deniztezcan/laravel-google-shopping/downloads)](https://packagist.org/packages/deniztezcan/laravel-google-shopping)
[![Latest Unstable Version](https://poser.pugx.org/deniztezcan/laravel-google-shopping/v/unstable)](https://packagist.org/packages/deniztezcan/laravel-google-shopping)
[![License](https://poser.pugx.org/deniztezcan/laravel-google-shopping/license)](https://packagist.org/packages/deniztezcan/laravel-google-shopping)

## Installation

```
composer require deniztezcan/laravel-google-shopping
```

## Example
```php
use DenizTezcan\LaravelGoogleShopping\LaravelGoogleShopping;

LaravelGoogleShopping::setTitle('Example feed');
LaravelGoogleShopping::setDescription('Example feed of the Example shop');
LaravelGoogleShopping::setLink('https://example.shop');

LaravelGoogleShopping::addItem(
	"https://example.shop/p/foo-bar",
	"SKU123",
	"Foo bar",
	"https://example.shop/images/foo-bar.png",
	"Foo bar best product",
	'new',
	99.99,
	'Foo brand',
	'6387712293758',
	[
		'country' => 'NL',
		'service' => 'PostNL - Gratis',
		'price'	  => 0
	]
);

return LaravelGoogleShopping::display();
```