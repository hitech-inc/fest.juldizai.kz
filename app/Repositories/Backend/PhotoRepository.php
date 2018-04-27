<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Photo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PhotoRepository
 * @package App\Repositories\Backend
 * @version April 26, 2018, 8:20 am UTC
 *
 * @method Photo findWithoutFail($id, $columns = ['*'])
 * @method Photo find($id, $columns = ['*'])
 * @method Photo first($columns = ['*'])
*/
class PhotoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'path',
        'alt'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Photo::class;
    }
}
