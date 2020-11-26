<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $primaryKey = 'icto';

    public $incrementing = false;


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sourceApplication()
    {
        return $this->hasMany(Flow::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function targetApplication()
    {
        return $this->hasMany(Flow::class);
    }
}
