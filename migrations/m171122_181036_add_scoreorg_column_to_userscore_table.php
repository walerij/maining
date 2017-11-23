<?php

use yii\db\Migration;

/**
 * Handles adding scoreorg to table `userscore`.
 */
class m171122_181036_add_scoreorg_column_to_userscore_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('userscore', 'scoreorg', $this->string());
        $this->addColumn('userscore', 'scorenumber', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('userscore', 'scoreorg');
    }
}
