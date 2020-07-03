# Chuck Norris Jokes Package

Generate random Chuck Norris Jokes on your PHP Application.

## Installation

Require the package using composer

```bash
composer require luigircruz/p-package-dev
```

## Usage

```php
use Luigircruz\PPackageDev\JokeFactory;

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
