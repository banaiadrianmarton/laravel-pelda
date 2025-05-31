<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class University extends Model
{
    protected $table = 'universities';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = '_id';
    protected $hidden = ['_id', 'current_lector_id'];

    /**
     * Get all of the lectors for the University
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lectors(): HasMany
    {
        return $this->hasMany(Lector::class, 'university_id', '_id');
    }

    /**
     * Get the current_lector that owns the University
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function current_lector(): BelongsTo
    {
        return $this->belongsTo(Lector::class, 'current_lector_id', '_id');
    }
}
