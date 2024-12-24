<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Orchid\Attachment\Attachable;
    use Orchid\Filters\Filterable;
    use Orchid\Metrics\Chartable;
    use Orchid\Screen\AsSource;

    class Menu extends Model
    {
        use HasFactory, AsSource, Attachable, Filterable, Chartable;

        protected $fillable = [
            'name',
            'url',
            'sort',
            'active',
        ];

        protected $allowedSorts = [
            'sort',
            'active',
        ];
    }
