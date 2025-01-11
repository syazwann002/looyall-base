<?php

namespace Looyall\Looyall\Models;

use App\Domains\Shared\Models\Countries\Concerns\BelongsToCountry;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

abstract class State extends Model 
{
    use HasFactory;
    use BelongsToCountry;

    protected $connection = 'main';
    
    protected $fillable = [
        'country_id',
        'name',
    ];
}
