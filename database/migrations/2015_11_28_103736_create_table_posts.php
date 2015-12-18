<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePosts extends Migration
{
    protected $table = "posts";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable($this->table)) {

            Schema::create($this->table, function (Blueprint $table) {

                /** Primary key  */
                $table->increments('id');

                /** Main data  */
                $table->text('article')->nullable();
                $table->text('hastag')->nullable();
                $table->text('link')->nullable();
                $table->integer('count')->nullable();
                $table->text('level')->nullable();
                $table->string('created_by')->default('anonim');

                /* Action */
                $table->timestamps();

            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
