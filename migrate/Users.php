<?php

namespace src\migrate;

use fw_micro\core\Migrate;
use fw_micro\core\migrate\Field;

/**
 * Class Users
 * @package src\migrate
 */
class Users extends Migrate
{
    /**
     * @inheritDoc
     */
    public function up(): void
    {
        $this->createTable('users', [
            (new Field())->setName('id')->integer()->autoIncrement()->primary(),
            (new Field())->setName('login')->string(50)->unique()->notNull(),
            (new Field())->setName('password')->string(255)->null()
        ]);
    }

    /**
     * @inheritDoc
     */
    public function down(): void
    {
        $this->dropTable('users');
    }
}
