<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    public function options() {
        return $this->hasMany(App\Option::Class, 'quiz_id');
        //return $this->hasMany('App\Category', 'parent_id');
    }





    

}
