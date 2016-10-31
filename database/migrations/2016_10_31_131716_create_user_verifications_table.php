<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_verifications', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->primary();
            $table->enum('type', ['enterprise', 'person']);
            $table->enum('status', ['pending', 'accept', 'decline']);
            $table->string('license_name')->nullable();
            $table->string('license_no')->nullable();
            $table->date('license_expire_date')->nullable();
            $table->string('license_image')->nullable();
            $table->string('real_name');
            $table->string('idcard_no');
            $table->string('idcard_front_image');
            $table->string('idcard_back_image');
            $table->string('contact_name')->nullable();
            $table->string('contact_mobile')->nullable();
            $table->string('remark')->nullable();
            $table->integer('auditor_id')->unsigned()->default(0);
            $table->timestamp('audited_at');
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
        Schema::dropIfExists('user_verifications');
    }
}
