<?php namespace Avirdigital\Courier\Models;

use Model;

/**
 * Model
 */
class Driver extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    protected $guarded = [];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'avirdigital_courier_drivers';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'drivertype' => ['Avirdigital\Courier\Models\Drivertype'],
    ];
    public $attachOne = [
        'driver_license_front' => 'System\Models\File',
        'driver_license_back' => 'System\Models\File',
        'id_card_back' => 'System\Models\File',
        'id_card_front' => 'System\Models\File',
    ];


}
