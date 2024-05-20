<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class About extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $fillable = [
        'description', 'back_techs', 'front_techs', 'photo', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $table = 'about';
}
