<?php

namespace Looyall\Looyall\Models;

use App\Domains\Shared\Models\Countries\Concerns\BelongsToCountry;
use Illuminate\Foundation\Auth\User as Authenticatable;

abstract class User extends Authenticatable 
{    
    use BelongsToCountry;
    
    protected $connection = 'main';
    
    protected $fillable = [
        'membership_id',
        'name',
        'first_name',
        'username',
        'email',
        'phone_country',
        'phone',
        'password',
        'profile_photo_path',
        'country_id',
        'email_verified_at',
        'registeration_method',
        'pin_code',
        'age',
        'gender',
        'birth_date',
        'birth_day',
        'birth_month',
        'birth_year',
        'flag_reveal_phone_number',
        'flag_counter_registeration',
        'flag_interact_business_banner',
        'flag_interact_business_welcome',
    ];
    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];
}