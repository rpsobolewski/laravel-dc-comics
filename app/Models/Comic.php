<?php

namespace App\Models;

use Dotenv\Parser\Value;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Comic extends Model
{
    use HasFactory;

    /**
     * Get the correct url for the img.
     */
    protected function thumb(): Attribute
    {
        return Attribute::make(
            get: function ($value) {

                if (strstr($value, 'http') !== false) {
                    return $value;
                } else {
                    return asset('storage/' . $value);
                }
            }
        );
    }
}
