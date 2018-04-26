<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateTextBlockRequest;
use App\Http\Requests\Backend\UpdateTextBlockRequest;
use App\Repositories\Backend\TextBlockRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TextBlockController extends AppBaseController
{
    /** @var  TextBlockRepository */
    private $textBlockRepository;

    public function __construct(TextBlockRepository $textBlockRepo)
    {
        $this->textBlockRepository = $textBlockRepo;
    }

    /**
     * Display a listing of the TextBlock.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->textBlockRepository->pushCriteria(new RequestCriteria($request));
        $textBlocks = $this->textBlockRepository->all();

        return view('backend.text_blocks.index')
            ->with('textBlocks', $textBlocks);
    }

    /**
     * Show the form for creating a new TextBlock.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.text_blocks.create');
    }

    /**
     * Store a newly created TextBlock in storage.
     *
     * @param CreateTextBlockRequest $request
     *
     * @return Response
     */
    public function store(CreateTextBlockRequest $request)
    {
        $input = $request->all();

        $textBlock = $this->textBlockRepository->create($input);

        Flash::success('Text Block saved successfully.');

        return redirect(route('backend.textBlocks.index'));
    }

    /**
     * Display the specified TextBlock.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $textBlock = $this->textBlockRepository->findWithoutFail($id);

        if (empty($textBlock)) {
            Flash::error('Text Block not found');

            return redirect(route('backend.textBlocks.index'));
        }

        return view('backend.text_blocks.show')->with('textBlock', $textBlock);
    }

    /**
     * Show the form for editing the specified TextBlock.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $textBlock = $this->textBlockRepository->findWithoutFail($id);

        if (empty($textBlock)) {
            Flash::error('Text Block not found');

            return redirect(route('backend.textBlocks.index'));
        }

        return view('backend.text_blocks.edit')->with('textBlock', $textBlock);
    }

    /**
     * Update the specified TextBlock in storage.
     *
     * @param  int              $id
     * @param UpdateTextBlockRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTextBlockRequest $request)
    {
        $textBlock = $this->textBlockRepository->findWithoutFail($id);

        if (empty($textBlock)) {
            Flash::error('Text Block not found');

            return redirect(route('backend.textBlocks.index'));
        }

        $textBlock = $this->textBlockRepository->update($request->all(), $id);

        Flash::success('Text Block updated successfully.');

        return redirect(route('backend.textBlocks.index'));
    }

    /**
     * Remove the specified TextBlock from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $textBlock = $this->textBlockRepository->findWithoutFail($id);

        if (empty($textBlock)) {
            Flash::error('Text Block not found');

            return redirect(route('backend.textBlocks.index'));
        }

        $this->textBlockRepository->delete($id);

        Flash::success('Text Block deleted successfully.');

        return redirect(route('backend.textBlocks.index'));
    }
}
