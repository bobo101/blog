<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;

class Art extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'file'];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function authors(): BelongsToMany
    {
        return $this->belongsToMany(Author::class)->withTimestamps();
    }

    public function getImageUrlAttribute(): string
    {
        return Storage::disk('public')->url($this->image);
    }

    public function getFileUrlAttribute(): string
    {
        return Storage::disk('public')->url($this->file);
    }

    protected static function boot() {
        parent::boot();
        static::deleting(function(self $model) {
            $model->tags()->sync([]);
            $model->authors()->sync([]);
            Storage::disk('public')->delete($model->image);
        });
    }
}
