<?php

use yii\helpers\Html;

$this->title = 'Изменить автора: ' . $model->name . ' ' . $model->surname . ' ' . $model->patronymic;
$this->params['breadcrumbs'][] = ['label' => 'Авторы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Изменение автора', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
    <div>

    <h1><?= Html::encode($this->title) ?></h1>

<?= $this->render('_form', [
    'model' => $model,
]) ?>

    </div>
