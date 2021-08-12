<?php


namespace app\models;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class AuthorsSearch extends Authors
{

    public function rules()
    {
        return [
            [['genre', 'surname'], 'string']
        ];
    }


    public function search($params)
    {
        $query = Authors::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        $this->load($params);

        if(!$this->validate()){
            return $dataProvider;
        }

        $query->andFilterWhere([
            'like', 'surname', $this->surname
        ])
        ->andFilterWhere([
            'like', 'genre', $this->genre
        ]);

        return $dataProvider;
    }

}