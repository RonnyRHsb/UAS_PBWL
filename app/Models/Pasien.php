<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the rekamedis for the Pasien
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rekamedis(): HasMany
    {
        return $this->hasMany(Rekamedis::class);
    }
}
