<?php namespace Avirdigital\Courier\Models;

use Model;

/**
 * Model
 */
class Color extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\Sluggable;

    protected $dates = ['deleted_at'];


    /**
     * @var array Generate slugs for these attributes.
     */

    protected $slugs = ['slug' => 'name'];


    /**
     * Softly implement the TranslatableModel behavior.
     */
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    /**
     * @var array Attributes that support translation, if available.
     */
    public $translatable = ['name'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'avirdigital_courier_colors';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'color_code' => 'required',
    ];

    public $belongsTo = [
        'car' => ['Avirdigital\Courier\Models\Car'],
    ];
}
