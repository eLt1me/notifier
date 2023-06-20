<?php

namespace eLt1me\notifier;

use yii\base\Widget;

class Notifier extends Widget
{
    public function init()
    {
        $this->view->registerAssetBundle(NotifierAsset::class);
        parent::init();
    }

    public function run()
    {

        return $this->render('test');
    }
}