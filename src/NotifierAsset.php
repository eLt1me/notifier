<?php

namespace eLt1me\notifier;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

class NotifierAsset extends AssetBundle
{
    public $sourcePath = '@eLt1me/notifier';

    public $css = [
        'css/index.css'
    ];

    public $js = [
        'js/index.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        YiiAsset::class,
    ];
}