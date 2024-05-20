<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class PersonalInfo extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $fillable = [
        'name', 'avatar', 'instagram', 'facebook', 'whatsapp', 'linkedin', 'email', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $table = 'personal_info';
}
