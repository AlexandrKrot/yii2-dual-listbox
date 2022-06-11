<?php


use yii\helpers\Html;

echo Html::tag('select', Html::renderSelectOptions($values,$data), $options);
$id = sprintf('#%s',$options["id"]);

$js = <<<JS
 filterColumn = new DualListbox('$id', $clientOptions);
JS;
$this->registerJs($js);
