<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m171120_164749_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'nickmname'=>$this->string(),
            'email'=>$this->string()->notNull(),
            'passhash'=>$this->string()->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('users');
    }
}
