<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use Notifiable;
    use InteractsWithMedia;
    use HasApiTokens;

    protected $fillable = [
        'name', 'email', 'password', 'avatar'
    ];

    public function abouts()
    {
        return $this->hasOne(About::class);
    }

    public function personalInfo()
    {
        return $this->hasOne(PersonalInfo::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function education()
    {
        return $this->hasMany(Education::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function components()
    {
        return $this->hasMany(Component::class);
    }

    public function getComponentsGroupedAttribute()
    {
        return $this->components->groupBy('component')->map(function ($items, $key) {
            return $items->toArray();
        })->toArray();
    }
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
