<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'name',
        'logo'
    ];

    public function getLogoUrlAttribute()
    {
        $logo = $this->attributes['logo'] ?? null;
        
        if (! $logo) {
            return '';
        }

        if (preg_match('/^https?:\/\//', $logo)) {
            return $logo;
        }

        return asset('storage/' . $logo);
    }
}