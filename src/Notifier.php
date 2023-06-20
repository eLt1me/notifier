<?php

namespace eLt1me\notifier;

use yii\base\Widget;

class Notifier extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('test');
    }
}