<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
            CREATE TABLE `shipments` (
                `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
                `name` varchar(45) NOT NULL,
                `data_delivery` datetime NOT NULL,
                `address` varchar(45) NOT NULL,
                `city` varchar(45) NOT NULL,
                `phone` varchar(45) NOT NULL,
                `email` varchar(45) NOT NULL,
                PRIMARY KEY (`id`)
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
        DB::statement('DROP TABLE `shipments`;');
    }
}