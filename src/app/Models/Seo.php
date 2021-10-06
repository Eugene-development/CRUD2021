<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $guarded = [];

    protected $table = 'seo';

    public function tagable()
    {
        return $this->morphTo();
    }
}
