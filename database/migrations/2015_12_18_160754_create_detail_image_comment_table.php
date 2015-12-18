<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailImageCommentTable extends Migration
{
    protected $table = "comment_detail";
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
              $table->increments('id_detail_comment');

              /** Main data  */
              $table->text('image')->nullable();

              /* Action */
              $table->timestamps();

              // Relation
              $table->integer('comment_id')->unsigned()->nullable();

              $table->foreign('comment_id')
                      ->references('id')->on('comments')
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
