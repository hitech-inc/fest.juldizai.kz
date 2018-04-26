<?php

namespace App\Repositories\Backend;

use App\Models\Backend\TextBlock;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TextBlockRepository
 * @package App\Repositories\Backend
 * @version April 26, 2018, 6:48 am UTC
 *
 * @method TextBlock findWithoutFail($id, $columns = ['*'])
 * @method TextBlock find($id, $columns = ['*'])
 * @method TextBlock first($columns = ['*'])
*/
class TextBlockRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'desc'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TextBlock::class;
    }
}
