<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Country
 * @package App\Models
 * @version September 7, 2023, 10:44 am UTC
 *
 * @property \App\Models\User $createdBy
 * @property string $code
 * @property string $name
 * @property integer $phone
 * @property string $symbol
 * @property string $capital
 * @property string $currency
 * @property string $continent
 * @property string $continent_code
 * @property string $alpha_3
 * @property integer $created_by
 */
class Country extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'countries';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'code',
        'name',
        'phone',
        'symbol',
        'capital',
        'currency',
        'continent',
        'continent_code',
        'alpha_3',
        'created_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'code' => 'string',
        'name' => 'string',
        'phone' => 'integer',
        'symbol' => 'string',
        'capital' => 'string',
        'currency' => 'string',
        'continent' => 'string',
        'continent_code' => 'string',
        'alpha_3' => 'string',
        'created_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'code' => 'required|string|max:2',
        'name' => 'required|string|max:100',
        'phone' => 'required|integer',
        'symbol' => 'nullable|string|max:10',
        'capital' => 'nullable|string|max:80',
        'currency' => 'nullable|string|max:3',
        'continent' => 'nullable|string|max:30',
        'continent_code' => 'nullable|string|max:2',
        'alpha_3' => 'nullable|string|max:3',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'created_by' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function createdBy()
    {
        return $this->belongsTo(\App\Models\User::class, 'created_by');
    }
}
