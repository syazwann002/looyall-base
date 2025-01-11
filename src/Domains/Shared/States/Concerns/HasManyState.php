<?php

namespace App\Domains\Shared\Models\States\Concerns;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Looyall\Looyall\Models\State;

trait HasManyState
{
    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }
}
