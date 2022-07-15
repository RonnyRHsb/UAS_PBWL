<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokter extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the rekamedis for the Dokter
     *
     * @return HasMany
     */
    public function rekamedis(): HasMany
    {
        return $this->hasMany(Rekamedis::class);
    }
}
