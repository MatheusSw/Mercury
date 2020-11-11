<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    use HasFactory;

    protected $primaryKey = 'identifier';

    public $incrementing = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sourceServer()
    {
        return $this->hasMany(Flow::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function targetServer()
    {
        return $this->hasMany(Flow::class);
    }

    public function serverType()
    {
        return $this->belongsTo(ServerType::class);
    }
}
