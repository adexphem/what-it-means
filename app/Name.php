<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Name extends Model
{
    public function User()
    {
        $this->hasMany(Users::class);
    }

    public function scopeGetNamesByStatus($query, $status)
    {
        $response = $query->where('status_id', $status)->paginate();
        return $response;
    }
}
