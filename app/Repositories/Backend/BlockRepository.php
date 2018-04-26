<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Block;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BlockRepository
 * @package App\Repositories\Backend
 * @version April 26, 2018, 6:58 am UTC
 *
 * @method Block findWithoutFail($id, $columns = ['*'])
 * @method Block find($id, $columns = ['*'])
 * @method Block first($columns = ['*'])
*/
class BlockRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'text',
        'theme_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Block::class;
    }
}
