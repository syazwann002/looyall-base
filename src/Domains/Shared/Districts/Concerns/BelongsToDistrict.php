<?php

namespace App\Domains\Shared\Models\Districts\Concerns;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Looyall\Looyall\Models\District;

trait BelongsToDistrict 
{
    public function district(): BelongsTo 
    {
        return $this->belongsTo(District::class);
    }
}