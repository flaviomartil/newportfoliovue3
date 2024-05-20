<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'description', 'back_techs', 'front_techs', 'photo', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $table = 'about';
}
