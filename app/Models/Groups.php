<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model {

    protected $table = 'groups';
    protected $primaryKey = 'group_id';
    protected $guarded = ['group_id'];

}
?>
