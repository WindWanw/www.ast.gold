<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("user_id")->default(1);
            $table->string("name", 32)->default('');
            $table->string("nickname", 32)->default('');
            $table->unsignedTinyInteger("age")->default(0);
            $table->string("last_name", 32)->default('');
            $table->string("full_name", 32)->default('');
            $table->unsignedTinyInteger("sex")->default(0);

            $table->unsignedInteger('created_at')->default(0)->comment("数据添加时间");
            $table->unsignedInteger('updated_at')->default(0)->comment("数据更新时间");
            $table->unsignedInteger('deleted_at')->default(0)->comment("数据删除时间");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}
