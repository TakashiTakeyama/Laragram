<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'user_id' => 'required',
        'title' => 'required',
        'body' => 'required',
    );

    public function getData()
    {
        return $this->id. ': ' . $this->title;
    }
    //
}
