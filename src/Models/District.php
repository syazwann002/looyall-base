<?php

namespace Looyall\Looyall\Models;

use App\Domains\Shared\Models\Countries\Concerns\BelongsToCountry;
use App\Domains\Shared\Models\States\Concerns\BelongsToState;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class District extends Model 
{
    use HasFactory;
    use BelongsToCountry, BelongsToState;

    protected $connection = 'main';
    
    protected $fillable = [
        'country_id',
        'state_id',
        'name',
    ];
}
