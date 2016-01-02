<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Configs]].
 *
 * @see Configs
 */
class ConfigsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Configs[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Configs|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
