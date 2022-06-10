<?php

namespace pechenki\duallistbox;


use Yii;
use yii\helpers\Html;
use pechenki\duallistbox\DualListBoxAssetsBundle;

/**
 * This is just an example.
 */
class DualListBox extends \yii\base\Widget
{
    public $data = [];

    public $values = [];


    /**
     * @return string
     */
    public function run()
    {
        DualListBoxAssetsBundle::register($this->view);
        return $this->renderWidget();
    }

    /**
     * @return string
     */
    public function renderWidget()
    {
         return $this->render('index', [
            'data' => $this->data,
            'values' => $this->values
        ]);


    }
}
