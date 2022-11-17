<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function arts(): BelongsToMany
    {
        return $this->belongsToMany(Art::class)->withTimestamps();
    }

    protected static function boot() {
        parent::boot();
        static::deleting(function(self $model) {
            $model->arts()->sync([]);
        });
    }
}
