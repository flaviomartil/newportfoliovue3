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

    protected $table = 'experiences';
}
