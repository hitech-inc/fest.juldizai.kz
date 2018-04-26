<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateBlockRequest;
use App\Http\Requests\Backend\UpdateBlockRequest;
use App\Repositories\Backend\BlockRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BlockController extends AppBaseController
{
    /** @var  BlockRepository */
    private $blockRepository;

    public function __construct(BlockRepository $blockRepo)
    {
        $this->blockRepository = $blockRepo;
    }

    /**
     * Display a listing of the Block.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->blockRepository->pushCriteria(new RequestCriteria($request));
        $blocks = $this->blockRepository->all();

        return view('backend.blocks.index')
            ->with('blocks', $blocks);
    }

    /**
     * Show the form for creating a new Block.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.blocks.create');
    }

    /**
     * Store a newly created Block in storage.
     *
     * @param CreateBlockRequest $request
     *
     * @return Response
     */
    public function store(CreateBlockRequest $request)
    {
        $input = $request->all();

        $block = $this->blockRepository->create($input);

        Flash::success('Block saved successfully.');

        return redirect(route('backend.blocks.index'));
    }

    /**
     * Display the specified Block.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $block = $this->blockRepository->findWithoutFail($id);

        if (empty($block)) {
            Flash::error('Block not found');

            return redirect(route('backend.blocks.index'));
        }

        return view('backend.blocks.show')->with('block', $block);
    }

    /**
     * Show the form for editing the specified Block.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $block = $this->blockRepository->findWithoutFail($id);

        if (empty($block)) {
            Flash::error('Block not found');

            return redirect(route('backend.blocks.index'));
        }

        return view('backend.blocks.edit')->with('block', $block);
    }

    /**
     * Update the specified Block in storage.
     *
     * @param  int              $id
     * @param UpdateBlockRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBlockRequest $request)
    {
        $block = $this->blockRepository->findWithoutFail($id);

        if (empty($block)) {
            Flash::error('Block not found');

            return redirect(route('backend.blocks.index'));
        }

        $block = $this->blockRepository->update($request->all(), $id);

        Flash::success('Block updated successfully.');

        return redirect(route('backend.blocks.index'));
    }

    /**
     * Remove the specified Block from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $block = $this->blockRepository->findWithoutFail($id);

        if (empty($block)) {
            Flash::error('Block not found');

            return redirect(route('backend.blocks.index'));
        }

        $this->blockRepository->delete($id);

        Flash::success('Block deleted successfully.');

        return redirect(route('backend.blocks.index'));
    }
}
