# ecframework

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

**Note:** This package is not ready yet. Please do not use it.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practices by being named the following.

```
bin/        
build/
docs/
config/
src/
tests/
vendor/
```


## Install

Via Composer

``` bash
$ composer require ecwebservices/ecframework
```

## Usage

``` php
$skeleton = new ecwebservices\ecframework();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email elijah@ecwebservices.net instead of using the issue tracker.

## Credits

- [ECWebServices][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/ecwebservices/ecframework.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/ecwebservices/ecframework/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/ecwebservices/ecframework.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/ecwebservices/ecframework.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/ecwebservices/ecframework.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/ecwebservices/ecframework
[link-travis]: https://travis-ci.org/ecwebservices/ecframework
[link-scrutinizer]: https://scrutinizer-ci.com/g/ecwebservices/ecframework/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/ecwebservices/ecframework
[link-downloads]: https://packagist.org/packages/ecwebservices/ecframework
[link-author]: https://github.com/elijahcruz12
[link-contributors]: ../../contributors
