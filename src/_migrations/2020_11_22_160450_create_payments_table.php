<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    const TABLE_NAME = 'payments';

    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string('payment_id');
            $table->string('payment_url');
            $table->string('payment_status');
            $table->string('payment_provider');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(self::TABLE_NAME);
    }
}
