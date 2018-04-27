<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreatePhotoRequest;
use App\Http\Requests\Backend\UpdatePhotoRequest;
use App\Repositories\Backend\PhotoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Carbon\Carbon;
use App\Models\Backend\Photo;

class PhotoController extends AppBaseController
{
    /** @var  PhotoRepository */
    private $photoRepository;

    public function __construct(PhotoRepository $photoRepo)
    {
        $this->photoRepository = $photoRepo;
    }


    public function index()
    {
        $photos = Photo::where('alt','!=' ,'gallery-photos')->get();
        return view('backend.photos.index')
            ->with('photos', $photos);
    }

    public function show($id)
    {
        $photo = $this->photoRepository->findWithoutFail($id);

        if (empty($photo)) {
            Flash::error('Photo not found');

            return redirect(route('backend.photos.index'));
        }

        return view('backend.photos.show')->with('photo', $photo);
    }

    public function edit($id)
    {
        $photo = $this->photoRepository->findWithoutFail($id);

        if (empty($photo)) {
            Flash::error('Photo not found');

            return redirect(route('backend.photos.index'));
        }

        return view('backend.photos.edit')->with('photo', $photo);
    }

    public function update($id, UpdatePhotoRequest $request)
    {
        $photo = $this->photoRepository->findWithoutFail($id);

        if (empty($photo)) {
            Flash::error('Photo not found');

            return redirect(route('backend.photos.index'));
        }

        $photo = $this->photoRepository->update($request->all(), $id);

        Flash::success('Photo updated successfully.');

        return redirect(route('backend.photos.index'));
    }

    public function destroy($id)
    {
        $photo = $this->photoRepository->findWithoutFail($id);

        if (empty($photo)) {
            Flash::error('Photo not found');
            return redirect(route('backend.photos.index'));
        }
        $photo = Photo::where('id',$id)->first();
        $this->photoRepository->delete($id);
        unlink(public_path('img/uploads/'.$photo['path']));
        Flash::success('Photo deleted successfully.');


        return redirect(route('backend.photos.index'));
    }

    public function upload(Request $request)
    {

        if($request->hasFile('file')){
            $time = Carbon::now()->format('Ymd-His');
            $file = $request->file('file');
            $extension = $file->extension();
            $filename = $time."_".$file->getClientOriginalName();
            $file->move(public_path().'/img/uploads', $filename);
                
            Photo::create([
                'path' => $filename,
                'alt' => 'shablon']);
            $photos = Photo::where('alt','!=' ,'gallery-photos')->get();
            return view('backend.photos.index',compact('photos'));
        }
        


        // Creating the directory, for example, if the date = 18/10/2017, the directory will be 2017/10/
/*        $directory = date_format($time, 'Y') . '/' . date_format($time, 'm');
        // Creating the file name: random string followed by the day, random number and the hour
        $filename = str_random(5).date_format($time,'d').rand(1,9).date_format($time, 'h').".".$extension*/;

    }
}
