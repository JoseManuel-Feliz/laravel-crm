<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Industry extends Model
{
    use HasFactory;
    /**
     * The company that belong to the Industry
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function company(): BelongsToMany
    {
        return $this->belongsToMany(Company::class);
    }
}
