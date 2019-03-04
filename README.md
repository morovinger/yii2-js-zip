# JSzip widget for Yii2

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ composer require morovinger/yii2-js-zip:*
```

or add

```
"morovinger/yii2-js-zip": "*"
```

to the `require` section of your `composer.json` file.

## Usage
Just register asset in a required view
```
use morovinger\yii2jszip;
yii2jszip\JSZipAsset::register($this);
```