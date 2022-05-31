<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    // protected $table = 'profile-user';

    public function profileImage()
    {
        $imagePath = ($this->image) ?  $this->image : 'profile/Ncjb3CAt1uq3sZHoJpBts9r1C6gFvKRY7vaquARl.png';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
