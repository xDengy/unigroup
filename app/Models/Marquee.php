<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Orchid\Attachment\Attachable;
    use Orchid\Filters\Filterable;
    use Orchid\Metrics\Chartable;
    use Orchid\Screen\AsSource;
    use Orchid\Filters\Types\Where;

    class Marquee extends Model
    {
        use HasFactory, AsSource, Attachable, Filterable, Chartable;

        protected $fillable = [
            'name',
            'sort',
            'active',
        ];

        protected $allowedFilters = [
            'active' => Where::class
        ];
    }
