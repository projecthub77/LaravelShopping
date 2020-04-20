<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{

    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data');
            $table->text('status');
            $table->date('del_date');
            $table->decimal('price',8,2);
            $table->string('first_name', 40);
            $table->string('address', 40);
            $table->string('last_name', 40);
            $table->integer('phone');
            $table->integer('zip');
            $table->string('email', 40);
            $table->integer('user_id');

        });
    }


    public function down()
    {
        Schema::dropIfExists('orders');
    }

}
