<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\questions;

class answers extends Model
{
    use HasFactory;
    public function questions()
    {
       // echo "done";

      return  $this->belongsTo(questions::class,'questions_id');
    }
    protected $fillable = [
        'title',
        'descrition',
        'questions_id'

    ];
}
