<?php

namespace pechenki\duallistbox;


use yii\helpers\Html;

/**
 * This is just an example.
 */
class DualListBox extends \yii\base\Widget
{
    public $data = [];

    public $data = [];

    public function run()
    {
        return "Hello!2";
    }

    public function renderWidget(){
        echo '<select multiple id="filterColumn" name="filterColumn['.$this->name.']">';
        echo Html::renderSelectOptions($User_filter,$this->column);
        echo '</select>';

        echo '<br/>';
        echo Html::button('Зберегти', ['class' => 'save-filter btn btn-info']);

    }
}
