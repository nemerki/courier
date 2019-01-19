<?php namespace Avirdigital\Courier\Models;

use Model;

/**
 * Model
 */
class Car extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    protected $guarded = [];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'avirdigital_courier_cars';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'brand' => ['Avirdigital\Courier\Models\Brand'],
        'mdl' => ['Avirdigital\Courier\Models\Mdl'],
        'trim' => ['Avirdigital\Courier\Models\Trim'],
        'color' => ['Avirdigital\Courier\Models\Color'],
    ];
}
