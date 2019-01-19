<?php namespace Avirdigital\Courier\Models;

use Model;

/**
 * Model
 */
class Drivertype extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'avirdigital_courier_drivertypes';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        'drivers' => ['Avirdigital\Courier\Models\Driver', 'key' => 'drivertype_id', 'softDelete' => true],

    ];
}
