<?php

use yii\db\Migration;

/**
 * Handles the creation of table `userscore`.
 */
class m171120_164827_create_userscore_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('userscore', [
            'id' => $this->primaryKey(),
            'user_id'=>$this->integer(),
            'score'=>$this->double(),


        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('userscore');
    }
}
