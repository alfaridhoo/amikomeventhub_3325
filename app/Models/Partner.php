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

        if (preg_match('/^(https?:\/\/|data:image\/[a-zA-Z]+;base64,)/', $logo)) {
            return $logo;
        }

        if (str_starts_with($logo, 'public/')) {
            $logo = substr($logo, 7);
        }

        return asset('storage/' . ltrim($logo, '/'));
    }
}