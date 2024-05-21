<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'description', 'company_name', 'started_in', 'finished_in', 'user_id','technologies'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeOrderByDateDesc($query)
    {
        return $query->orderBy('started_in', 'desc');
    }

    protected $table = 'experiences';
}
