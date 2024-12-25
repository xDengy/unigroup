<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Where;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class RentSection extends Model
{
    use HasFactory, AsSource, Attachable, Filterable, Chartable;

    protected $fillable = [
        'name',
        'image',
        'active',
        'sort',
    ];

    protected $allowedFilters = [
        'active' => Where::class,
    ];

    protected $allowedSorts = [
        'sort',
        'active',
    ];

    public function items(): HasMany
    {
        return $this->hasMany(Rent::class, 'rent_sections_id', 'id')->where('active', true)->orderBy('sort', 'asc');
    }
}
