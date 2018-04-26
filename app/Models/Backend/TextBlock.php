<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TextBlock
 * @package App\Models\Backend
 * @version April 26, 2018, 6:48 am UTC
 *
 * @property string title
 * @property string desc
 */
class TextBlock extends Model
{
    use SoftDeletes;

    public $table = 'text_blocks';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'desc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'desc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'desc' => 'required'
    ];

    
}
