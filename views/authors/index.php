<?php
use yii\grid\GridView;
use yii\helpers\Html;

$this->title = 'Список авторов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-group">
        <?= Html::a('Добавить автора',['create'],['class' => 'btn btn-primary']) ?>
</div>

    <h1><?= Html::encode($this->title) ?></h1>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'label' => 'Имя',
            'attribute' => 'name',
            'format' => 'text'
        ],
        [
            'label' => 'Фамилия',
            'attribute' => 'surname',
            'format' => 'text'
        ],
        [
            'label' => 'Отчество',
            'attribute' => 'patronymic',
            'format' => 'text'
        ],
        [
            'label' => 'Дата рождения',
            'attribute' => 'date',
            'format' => ['date', 'dd.MM.yyyy']
        ],
        [
            'label' => 'Жанр',
            'attribute' => 'genre',
            'format' => 'text'
        ]
    ]
]); ?>


