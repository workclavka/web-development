<?php

use yii\db\Migration;

/**
 * Class m190205_190658_AddTableUsers
 */
class m190205_190658_AddTableUsers extends Migration
{
    public $tableName = "users";

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey()->defaultValue('SERIAL')->notNull()->comment('Ид записи'),
            'login' => $this->string()->notNull()->comment('Логин'),
            'password'     => $this->string()->notNull()->comment('Пароль'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }

}
