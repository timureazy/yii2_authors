<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput()->label('Имя') ?>

    <?= $form->field($model, 'surname')->textInput()->label('Фамилия') ?>

    <?= $form->field($model, 'patronymic')->textInput()->label('Отчество') ?>

    <?= $form->field($model, 'date')->textInput()->label('Дата рождения') ?>

    <?= $form->field($model, 'genre')->dropdownList(
        [
           'Роман' => 'Роман',
           'Приключения' => 'Приключения',
           'Драма' => 'Драма',
           'Повесть' => 'Повесть',
           'Проза' => 'Проза',
           'Стихотворение' => 'Стихотворение'
        ],
        ['prompt'=>'Выберете жанр']
    )->label('Жанр'); ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>