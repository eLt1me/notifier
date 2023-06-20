<?php

namespace eLt1me\notifier;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

class NotifierAsset extends AssetBundle
{
    public $sourcePath = '@eLt1me/notifier/src';

    public $js = [
        'js/main.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        YiiAsset::class,
    ];
}