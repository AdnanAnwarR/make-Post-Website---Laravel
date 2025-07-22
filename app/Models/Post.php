<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model{
    use HasFactory;
    protected $fillable = ['title' , 'author' ,'slug','body'];

    public function author():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    #[Scope]
    protected function filter(Builder $query, array $filters): void
    {
        $query->when($filters['search'] ?? false, function ($query, $search){
           return $query->where('title', 'like' , '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category){
            return $query->whereHas('category', fn (Builder $query) =>
                $query->where('slug' , $category)
            );
        });

         $query->when($filters['author'] ?? false, function ($query, $author){
            return $query->whereHas('author', fn (Builder $query) =>
                $query->where('username' , $author)
            );
        });
    }

};

