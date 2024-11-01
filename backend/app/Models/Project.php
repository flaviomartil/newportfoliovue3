<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'description', 'photo', 'link', 'date', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeOrderByDateDesc($query)
    {
        return $query->orderBy('date', 'desc');
    }

    protected $table = 'projects';
}
