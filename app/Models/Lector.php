<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Lector extends Model
{
    protected $table = 'lectors';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = '_id';
    protected $hidden = ['_id'];

    /**
     * Get the university that owns the Lector
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function university(): BelongsTo
    {
        return $this->belongsTo(University::class, 'university_id', '_id');
    }


    /**
     * Get the currect_university associated with the Lector
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function currect_university(): HasOne
    {
        return $this->hasOne(University::class, 'current_lector_id', '_id');
    }
}
