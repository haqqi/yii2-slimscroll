<?php
/**
 * Created by PhpStorm.
 * User: Haqqi
 * Date: 10/21/2016
 * Time: 9:37 PM
 */

namespace mimicreative\assets;


use yii\web\AssetBundle;

class SlimScrollAsset extends AssetBundle {
  /**
   * @inherit
   */
  public $sourcePath = '@bower/jquery-slimscroll';

  public $depends = [
    'yii\web\JqueryAsset'
  ];

  /**
   * @inherit
   */
  public $js = [
    'jquery.slimscroll.min.js',
  ];
}