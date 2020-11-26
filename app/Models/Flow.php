<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flow extends Model
{
    protected $guarded = [];

    use HasFactory;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sourceServer()
    {
        return $this->belongsTo(Server::class, 'identifier', 'source_server');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function targetServer()
    {
        return $this->belongsTo(Server::class, 'identifier', 'target_server');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sourceApplication()
    {
        return $this->belongsTo(Application::class, 'icto', 'source_app');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function targetApplication()
    {
        return $this->belongsTo(Application::class, 'icto', 'target_app');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }
}
