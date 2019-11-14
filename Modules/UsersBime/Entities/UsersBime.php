<?php

namespace Modules\UsersBime\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Bime\Entities\Bime;

class UsersBime extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public function bime()
    {
        return $this->belongsTo(Bime::class);
    }


//    protected $fillable = [];
}
