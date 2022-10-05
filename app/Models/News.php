<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'category_id', 
        'title',
        'image',
        'content',    
        'description',
        'active',
        'arrange',
        'created_at',
        'updated_at',
    ];

    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function categories(){
        return $this->belongsTo('App\Models\Categories', 'category_id');
    }
}
