<?php


use yii\helpers\Html;

echo Html::tag('select', Html::renderSelectOptions($values,$data), ['name' => 'box','id'=>'box']);

$js = <<<JS
 filterColumn = new DualListbox('#box', {
        availableTitle: 'Доступні колонки',
        selectedTitle: 'Вибрані колонки',
        addButtonText: 'Показати >',
        removeButtonText: '< Сховати',
        addAllButtonText: 'Показати все >>',
        removeAllButtonText: '<< Сховати все',
        searchPlaceholder: 'Пошук'

    });
JS;
$this->registerJs($js);
