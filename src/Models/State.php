<?php

namespace Looyall\Looyall\Models;

use App\Domains\Shared\Models\Countries\Concerns\BelongsToCountry;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class State extends Model
{
    use BelongsToCountry;
    use HasFactory;

    protected $connection = 'main';

    protected $fillable = [
        'country_id',
        'name',
    ];
}
