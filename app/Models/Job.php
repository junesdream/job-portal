<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // Define the relation to Company-Modell
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // Define the relation tp Category-Modell
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
