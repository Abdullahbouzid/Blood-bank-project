<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory;
    protected $table = 'centers';

    public function employees()
    {
        return $this->belongsTo(employee::class);
    }

    public function bank()
    {
    return $this->belongsTo(Bank::class);
    }
}
