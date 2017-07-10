# Google Suggest

Google keyword suggestion scraper

## Getting Started

Get this up and running

### Prerequisites

composer

### Installing

```bash
composer require buchin/google-suggest dev-master
```

### Usage

```php
use Buchin\GoogleSuggest\GoogleSuggest;

$keyword = 'makan nasi';

$suggested = GoogleSuggest::grab($keyword);

```

## Test

```bash
./vendor/bin/kahlan --reporter=verbose
```

## Authors

* **Mochammad Masbuchin** - *Initial work* - [buchin](https://github.com/buchin)


## License

Halal
