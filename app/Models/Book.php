<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

    /* One to One Relations */

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function collectionMethod()
    {
        return $this->belongsTo(CollectionMethod::class);
    }

    public function storage()
    {
        return $this->belongsTo(Storage::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function created_by()
    {
        return $this->belongsTo(User::class);
    }

    public function updated_by()
    {
        return $this->belongsTo(User::class);
    }

    /** Many to Many Relations */

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
