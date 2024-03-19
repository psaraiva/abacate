<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountHasTransferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_has_transfer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('accounts_id');
            $table->unsignedBigInteger('transfer_id');
            $table->string('status', 40)->require();
            $table->foreign('accounts_id')->references('id')->on('accounts');
            $table->foreign('transfer_id')->references('id')->on('transfers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_has_transfer');
    }
}
