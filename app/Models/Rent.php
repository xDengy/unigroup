<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Where;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class Rent extends Model
{
    use HasFactory, AsSource, Attachable, Filterable, Chartable;

    protected $fillable = [
        'name',
        'price',
        'active',
        'sort',
        'rent_sections_id',
    ];

    protected $allowedFilters = [
        'active' => Where::class,
        'price' => Where::class,
        'rent_sections_id' => Where::class,
    ];

    protected $allowedSorts = [
        'sort',
        'active',
    ];
}
