<?php

namespace App;

use App\Events\ChannelCreated;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use RecordsActivity;
    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $events = [
        'created' => ChannelCreated::class
    ];

    /**
     * Get the route key name for Laravel.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * A channel consists of threads.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function threads()
    {
        return $this->hasMany(Thread::class);
    }
}
