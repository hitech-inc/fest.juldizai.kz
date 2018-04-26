<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Block
 * @package App\Models\Backend
 * @version April 26, 2018, 6:58 am UTC
 *
 * @property string title
 * @property string text
 * @property integer theme_id
 */
class Block extends Model
{
    use SoftDeletes;

    public $table = 'blocks';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'text',
        'theme_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'text' => 'string',
        'theme_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'text' => 'required',
        'theme_id' => 'required'
    ];

    
}
