<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class History extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'history';
    protected $fillable = [
        'user_id',
        'titre',
        'ville',
        'pays',
        'date',
        'description',
        'longitude',
        'latitude',
        'jugement',
        'url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Category()
    {
        return $this->belongsToMany(Category::class, 'category_history', 'history_id', 'category_id');
    }


}
