<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rekamedis extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the pasien that owns the Rekamedis
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pasien(): BelongsTo
    {
        return $this->belongsTo(Pasien::class);
    }

    /**
     * Get the obat that owns the Rekamedis
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function obat(): BelongsTo
    {
        return $this->belongsTo(Obat::class);
    }

    /**
     * Get the dokter that owns the Rekamedis
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dokter(): BelongsTo
    {
        return $this->belongsTo(Dokter::class);
    }
}
