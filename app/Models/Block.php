<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Orchid\Attachment\Attachable;
    use Orchid\Filters\Filterable;
    use Orchid\Filters\Types\Like;
    use Orchid\Filters\Types\Where;
    use Orchid\Metrics\Chartable;
    use Orchid\Screen\AsSource;

    class Block extends Model
    {
        use HasFactory, AsSource, Attachable, Filterable, Chartable;

        protected $fillable = [
            'name',
            'second_name',
            'code',
            'text',
            'additional_text',
            'link_text',
            'link',
            'active',
        ];

        protected $allowedFilters = [
            'name' => Like::class,
            'code' => Like::class,
            'active' => Where::class
        ];

        public function photos()
        {
            return $this->hasMany(Portfolio::class)->where('group', 'blocks');
        }
    }
