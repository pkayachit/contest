<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


/**
 * Class User
 * @package App\Models
 * @version September 5, 2023, 12:42 pm UTC
 *
 * @property string $name
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $phone
 * @property string $mobile
 * @property number $age
 * @property string $address
 * @property integer $country_id
 * @property string $zipcode
 */
class User extends Authenticatable
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'first_name',
        'last_name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'phone',
        'mobile',
        'age',
        'address',
        'country_id',
        'zipcode'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string',
        'phone' => 'string',
        'mobile' => 'string',
        'age' => 'decimal:2',
        'address' => 'string',
        'country_id' => 'integer',
        'zipcode' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'first_name' => 'required|string|max:500',
        'last_name' => 'required|string|max:500',
        'email' => 'required|string|max:255',
        'email_verified_at' => 'nullable',
        'password' => 'required|string|max:255',
        'remember_token' => 'nullable|string|max:100',
        'phone' => 'required|string|max:100',
        'mobile' => 'required|string|max:100',
        'age' => 'required|numeric',
        'address' => 'required|string',
        'country_id' => 'nullable|integer',
        'zipcode' => 'required|string|max:250',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
