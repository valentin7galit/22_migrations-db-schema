<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
            CREATE TABLE `payments` (
                `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
                `method` varchar(45) NOT NULL,
                `data_payment` date NOT NULL,
                `total_amount` float NOT NULL,
                PRIMARY KEY (`id`),
                FOREIGN KEY (`id`) 
                    REFERENCES `orders` (`id`) 
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
        DB::statement('DROP TABLE `payments`;');
    }
}
