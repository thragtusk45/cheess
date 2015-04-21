<?php

use yii\db\Schema;
use yii\db\Migration;

class m150329_152514_add_user extends Migration
{
    public function up()
    {
        $this->execute("
INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `password_reset_token`,  `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@demo.com', '$2y$13\$BbXMMjLpfmbY9/9Vt3hdKOe.pq4oXTi/goXFukTlEGAc.CDOYKM5y', 'Adfm3zoUDDmmgNTkII3nhgl8iXIjkc3u', 'UncnDPGCaGx74NN2p39dY5Dh1EG6Hq___1412698238',   1412698237, 1412698237)
");
    }

    public function down()
    {
        $this->truncateTable('user');
        echo "m150329_152514_add_user reverted.\n";

        return true;
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
