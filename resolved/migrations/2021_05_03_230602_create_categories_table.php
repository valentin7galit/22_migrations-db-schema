<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
            CREATE TABLE `categories` (
                `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
                `name` varchar(45) NOT NULL,
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
        DB::statement('DROP TABLE `categories`;');
    }
}
