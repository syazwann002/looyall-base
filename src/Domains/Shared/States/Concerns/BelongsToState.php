<?php

namespace App\Domains\Shared\Models\States\Concerns;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Looyall\Looyall\Models\State;

trait BelongsToState
{
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}
