<?php

namespace pechenki\duallistbox;


use Yii;
use yii\helpers\Html;
use pechenki\duallistbox\DualListBoxAssetsBundle;
use yii\helpers\Json;

/**
 * This is just an example.
 */
class DualListBox extends \yii\base\Widget
{
    /**
     * @var array
     */
    public $items = [];
    /**
     * @var array
     */
    public $name = [];

    /**
     * @var array
     */
    public $selection = [];

    /**
     * @var array tag  options
     */
    public $options = ['id' => 'box', 'multiple' => true];

    /**
     * @var array dual listbox options
     */
    public $clientOptions = [];

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
        $data = [
            'data' => $this->items,
            'values' => $this->selection,
            'name' => $this->name,
            'options' => $this->options,
            'clientOptions' => Json::encode($this->clientOptions)
        ];

        return $this->render('index', $data);


    }
}
