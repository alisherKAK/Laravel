<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Music
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property string $author
 * @property time $duration
 * @property int $quality
 */

class Music extends Model
{
    protected $fillable = [
      'name', 'author', 'duration', 'quality'
    ];

    protected $hidden = [
      'id'
    ];
}
