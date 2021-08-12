<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%authors}}`.
 */
class m210812_064124_create_authors_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%authors}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'surname' => $this->string(),
            'patronymic' => $this->string(),
            'date' => $this->date(),
            'genre' => $this->string()
        ]);

        $this->execute(
            'INSERT INTO `authors` (`id`, `name`, `surname`, `patronymic`, `date`, `genre`) VALUES
(1, \'Александр\', \'Пушкин\', \'Сергеевич\', \'1799-06-06\', \'Роман\'),
(4, \'Михаил\', \'Юрьевич\', \'Лермонтов\', \'1814-07-15\', \'Драма\'),
(5, \'Иосиф\', \'Бродский\', \'Александрович\', \'1940-05-28\', \'Стихотворение\'),
(6, \'Маяковский\', \'Владимир\', \'Владимирович\', \'1893-06-19\', \'Стихотворение\');'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%authors}}');
    }
}
