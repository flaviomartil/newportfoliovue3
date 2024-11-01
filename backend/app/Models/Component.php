<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;

    protected $fillable = ['subtitle', 'component', 'user_id', 'font-size'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
