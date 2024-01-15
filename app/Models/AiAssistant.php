<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AiAssistant extends Model
{
    use HasFactory;

    public function catgeory(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
