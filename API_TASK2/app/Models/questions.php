<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\answers;
class questions extends Model
{
    use HasFactory;
    public function answers()
    {
       return $this->hasMany(answers::class,'answers_id');

    }
    protected $fillable = [
        'title',
        'descrition',

    ];
}
