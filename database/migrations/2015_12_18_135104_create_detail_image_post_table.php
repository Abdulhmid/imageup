<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailImagePostTable extends Migration
{
    protected $table = "post_detail";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable($this->table)) {

          Schema::create($this->table, function (Blueprint $table) {

              $table->engine = 'InnoDB';
              /** Primary key  */
              $table->increments('id_detail_post');

              /** Main data  */
              $table->text('image')->nullable();

              /* Action */
              $table->nullableTimestamps();

              // Relation
              $table->integer('post_id')->unsigned()->nullable();

              $table->foreign('post_id')
                      ->references('id')->on('posts')
                      ->onDelete('cascade')->onUpdate('cascade');

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
