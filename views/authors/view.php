<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = 'Информация об авторе';
$this->params['breadcrumbs'][] = ['label' => 'Авторы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div>

    <h1><?= Html::encode($this->title) ?></h1>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'surname',
            'patronymic',
            'genre',
            'date'
        ]
    ]); ?>

</div>