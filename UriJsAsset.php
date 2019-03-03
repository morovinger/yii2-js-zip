<?php

namespace morovinger\jszip;

/**
 * @author Yurii Shekhanov
 * @link https://github.com/morovinger/yii2-js-zip
 */
class UriJsAsset extends \yii\web\AssetBundle
{
  public $sourcePath = '@bower/stuk/slick/';
  //public $sourcePath = '@vendor/medialize/URI.js';

  public $js = [
    'dist/jszip.min.js'
  ];
}