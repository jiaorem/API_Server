<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('products')->insert([
            ['id' => 1],
            ['title' => 'Jacket'],
            ['description' => 'Given Jacket Description'],
            ['currency' => 'PHP'],
            ['price' => 1234.56],
            ['brand' => 'KuyaWill'],
            ['category' => 'apparel'],
            ['image' => 'https://netstorage-kami.akamaized.net/images/0fgjhs1shmj74jpi4g.jpg?&imwidth=1200']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
