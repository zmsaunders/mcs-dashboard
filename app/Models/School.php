<?php

namespace App\Models;

use App\Models\Report;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    public function reports() {
        return $this->hasMany(Report::class);
    }
}
