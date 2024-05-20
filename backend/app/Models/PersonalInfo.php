<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    protected $fillable = [
        'name', 'avatar', 'instagram', 'facebook', 'whatsapp', 'linkedin', 'email', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $table = 'personal_info';
}
