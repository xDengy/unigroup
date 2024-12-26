<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class Bid extends Model
{
    use HasFactory, AsSource, Attachable, Filterable, Chartable;

    protected $fillable = [
        'name',
        'phone',
        'page',
    ];

    protected $allowedSorts = [
        'created_at',
    ];
}

