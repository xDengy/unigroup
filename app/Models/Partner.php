<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Orchid\Attachment\Attachable;
    use Orchid\Filters\Filterable;
    use Orchid\Filters\Types\Where;
    use Orchid\Metrics\Chartable;
    use Orchid\Screen\AsSource;

    class Partner extends Model
    {
        use HasFactory, AsSource, Attachable, Filterable, Chartable;

        protected $fillable = [
            'name',
            'active',
            'sort',
        ];

        protected $allowedFilters = [
            'active' => Where::class
        ];

        protected $allowedSorts = [
            'sort',
            'active',
        ];
    }
