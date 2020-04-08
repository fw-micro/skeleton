<?php

namespace src\migrate;

use fw_micro\core\Migrate;
use fw_micro\core\migrate\Field;

/**
 * Class Profile
 * @package src\migrate
 */
class Profile extends Migrate
{
    /**
     * @inheritDoc
     */
    public function up(): void
    {
        $this->createTable('profile', [
            (new Field())->setName('user_id')->integer()->primary(),
            (new Field())->setName('email')->string(255)->unique(),
            (new Field())->setName('first_name')->string(50)->null(),
            (new Field())->setName('last_name')->string(50)->null(),
        ]);
    }

    /**
     * @inheritDoc
     */
    public function down(): void
    {
        $this->db->drop('profile');
    }
}
