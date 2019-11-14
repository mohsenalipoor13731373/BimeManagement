<?php

namespace Modules\Bime\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\UsersBime\Entities\UsersBime;

class Bime extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public function user_bime()
    {
        return $this->hasMany(UsersBime::class);
    }


//    protected $fillable = [];
}
