<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLog extends Model
{
    use HasFactory;

    protected $fillable = ['action', 'target_user_id', 'target_ad_id'];

  
    public function admin()
    {
        return $this->belongsTo(User::class);
    }

   
    public function targetUser()
    {
        return $this->belongsTo(User::class, 'target_user_id');
    }

    
    public function targetAdvertisement()
    {
        return $this->belongsTo(Advertisement::class, 'target_ad_id');
    }
}
