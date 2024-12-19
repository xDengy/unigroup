<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Orchid\Attachment\Attachable;
    use Orchid\Filters\Filterable;
    use Orchid\Filters\Types\Like;
    use Orchid\Metrics\Chartable;
    use Orchid\Screen\AsSource;

    class Director extends Model
    {
        use HasFactory, AsSource, Attachable, Filterable, Chartable;

        protected $fillable = [
            'name',
            'post',
            'text',
            'quote',
            'picture',
        ];
    }
