<?php
namespace pechenki\duallistbox;

use yii\web\AssetBundle;


class DualListBoxAssetsBundle extends AssetBundle
{
    public $sourcePath = '@vendor/pechenki/yii2-dual-listbox';
    public $css = [
        'assets/css/dual-listbox.css'
    ];
    public $js = [
        'assets/js/dual-listbox.js'
    ];
}