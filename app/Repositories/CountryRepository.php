<?php

namespace App\Repositories;

use App\Models\Country;
use App\Repositories\BaseRepository;

/**
 * Class CountryRepository
 * @package App\Repositories
 * @version September 7, 2023, 10:44 am UTC
*/

class CountryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Country::class;
    }
}
