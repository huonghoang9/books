<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table ="reviews";
    protected $fillable=[
        "comment",
        'rating',
        'book_id',
        'user_id'
    ];

    // Trong model Review
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
