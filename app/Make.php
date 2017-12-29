<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
    public function models()
    {
        return $this->hasMany(Model::class);
    }
}
