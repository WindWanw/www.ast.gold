<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLastNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('last_names', function (Blueprint $table) {
            $table->id();

            $table->string('last_name')->default('')->comment("姓");
            $table->char('first_alp', 1)->default('')->comment("姓氏首字母");
            $table->unsignedTinyInteger('digits')->default(1)->comment("姓氏位数");
            $table->string('pinyin', 32)->default('')->comment("姓氏拼音，多个姓氏拼音逗号隔开");
            $table->unsignedTinyInteger('strokes')->default(1)->comment("姓氏笔画");
            $table->string('totem', 64)->default('')->comment("姓氏图腾");
            $table->string('source', 1024)->default('')->comment("姓氏来源");

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
        Schema::dropIfExists('last_names');
    }
}
