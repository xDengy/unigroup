<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Orchid\Attachment\Attachable;
    use Orchid\Filters\Filterable;
    use Orchid\Metrics\Chartable;
    use Orchid\Screen\AsSource;
    use Orchid\Filters\Types\Like;

    class Page extends Model
    {
        use HasFactory, AsSource, Attachable, Filterable, Chartable;

        protected $fillable = [
            'page_name',
            'page_url',
            'code',
            'title',
            'h1',
            'description',
            'keywords',
        ];

        protected $allowedSorts = [
            'page_name',
            'title',
        ];

        protected $allowedFilters = [
            'page_name' => Like::class,
            'title' => Like::class,
            'code' => Like::class,
        ];
    }
