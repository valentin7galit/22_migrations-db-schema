<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
            CREATE TABLE `orders` (
                `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
                `data_created` datetime NOT NULL,
                `status` tinyint(4) NOT NULL,
                `payments_id` bigint(20) UNSIGNED NOT NULL,
                `shipments_id` bigint(20) UNSIGNED NOT NULL,
                PRIMARY KEY (`id`),
                FOREIGN KEY (`shipments_id`) 
                    REFERENCES `shipments` (`id`) 
                    ON DELETE CASCADE
            ) ENGINE=InnoDB;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE `orders`;');
    }
}
