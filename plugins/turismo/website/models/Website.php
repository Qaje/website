<?php namespace Turismo\Website\Models;

use Model;

/**
 * Model
 */
class Website extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $fillable = ['title','description','status'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'turismo_website_';
}
