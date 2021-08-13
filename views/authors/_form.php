<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;
?>

<div>

    <?php

        $this->registerJs(
            '$("document").ready(function(){ 
		        $("#newAuthor").on("pjax:end", function() {
			        $.pjax.reload();  //Reload GridView
		    });
        });'
        );

    ?>

    <?php yii\widgets\Pjax::begin(['id' => 'newAuthor']) ?>

    <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>

    <?= $form->field($model, 'name')->textInput()->label('Имя') ?>

    <?= $form->field($model, 'surname')->textInput()->label('Фамилия') ?>

    <?= $form->field($model, 'patronymic')->textInput()->label('Отчество') ?>

    <?= $form->field($model, 'date')->widget(DateTimePicker::className(),[
        'type' => DateTimePicker::TYPE_INPUT,
        'options' => ['placeholder' => 'Ввод даты/времени...'],
        'convertFormat' => true,
        'pluginOptions' => [
            'format' => 'yyyy-MM-dd',
            'autoclose'=>true,
            'weekStart'=>1, //неделя начинается с понедельника
            'startDate' => '0001.01.01 00:00', //самая ранняя возможная дата
            'todayBtn'=>true, //снизу кнопка "сегодня"
        ]
    ])->label('Дата рождения'); ?>

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
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end() ?>
    <?php yii\widgets\Pjax::end() ?>
</div>