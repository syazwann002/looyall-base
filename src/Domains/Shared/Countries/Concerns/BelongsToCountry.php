<?php

namespace App\Domains\Shared\Models\Countries\Concerns;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Looyall\Looyall\Models\Country;

trait BelongsToCountry
{
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
