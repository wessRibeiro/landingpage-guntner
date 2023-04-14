<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'size', 'url'];

    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(Subcategory::class);
    }
}
