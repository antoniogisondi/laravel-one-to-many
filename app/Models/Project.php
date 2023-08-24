<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['titolo','descrizione','inizio_progetto','consegna_progetto','approvato', 'non_approvato', 'img'];
        /**
         * Get the user associated with the Project
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasOne
         */
        public function types(): HasOne
        {
            return $this->belongsTo(Type::class);
        }
}

