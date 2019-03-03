<?php

namespace morovinger\jszip;

/**
 * @author Yurii Shekhanov
 * @link https://github.com/morovinger/yii2-js-zip
 */

use \yii\web\AssetBundle;

class UriJsAsset extends AssetBundle
{
  public $sourcePath = '@bower/jszip/dist/';

  public $js = [
    'jszip.min.js'
  ];
}