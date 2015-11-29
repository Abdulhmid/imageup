<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsers extends Migration
{
    protected $table = 'users';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable($this->table)) {

          Schema::create($this->table, function (Blueprint $table) {

            $table->increments('id');

            $table->string('username');
            $table->string('fullname');
            $table->string('email');
            $table->string('password', 60)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('photo')->nullable();
            $table->text('address')->nullable();
            $table->enum('gender', ['male','female'])->default('male');
            $table->rememberToken();
            $table->tinyInteger('active')->default(0);
            $table->timestamp('last_login')->nullable();
            $table->string('created_by')->nullable('system');
            $table->timestamps();

            // Relation
            $table->integer('group_id')->unsigned()->nullable();

            $table->foreign('group_id')
                    ->references('group_id')->on('groups')
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
