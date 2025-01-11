<?php

namespace Looyall\Looyall\Models;

use App\Domains\Shared\Models\States\Concerns\HasManyState;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

abstract class Country extends Model 
{
    use HasFactory;
    use HasManyState;

    protected $connection = 'main';

    protected $fillable = [
        'code',
        'name',
        'phone_code',
        'currency_code',
    ];
}
