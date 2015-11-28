<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGroups extends Migration
{
    protected $table = "groups";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable($this->groups)) {

          Schema::create($this->groups, function (Blueprint $table) {

              /** Primary key  */
              $table->increments('groups_id');

              /** Main data  */
              $table->string('group_name', 255);
              $table->text('description')->nullable();

              /* Action */
              $table->nullableTimestamps();

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
        Schema::dropIfExists($this->groups);
    }
}
