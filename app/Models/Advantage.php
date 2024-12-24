<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Orchid\Attachment\Attachable;
    use Orchid\Filters\Filterable;
    use Orchid\Metrics\Chartable;
    use Orchid\Screen\AsSource;
    use Orchid\Filters\Types\Where;

    class Advantage extends Model
    {
        use HasFactory, AsSource, Attachable, Filterable, Chartable;

        protected $fillable = [
            'name',
            'description',
            'sort',
            'active',
        ];

        protected $allowedFilters = [
            'active' => Where::class
        ];

        protected $allowedSorts = [
            'sort',
            'active',
        ];
    }
