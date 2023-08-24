<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['type_id','titolo','descrizione','inizio_progetto','consegna_progetto','approvato', 'non_approvato', 'img'];
        /**
         * Get the user associated with the Project
         *
         */
        public function type()
        {
            return $this->belongsTo(Type::class);
        }
}

