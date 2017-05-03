<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use InterventionImage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageController extends Controller
{
    /**
     * Requires user to be autenticated to call this controller.
     */    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageRequest $request)
    {

        $image = $this->makeImage($request->file, $request);
        
        return Response::json('success', 200);
    }

    protected function makeImage(UploadedFile $file, ImageRequest $request)
    {
        //make image
        //make thumbnail image
        //dd($file->getClientOriginalName());
        $name = sprintf('%s-%s',time(), $file->getClientOriginalName());
        
        $path = '/storage/user/'. auth()->user()->id . '/' . $name;
        
        $image = Image::create([
            'nom'               => $request->nom,
            'descripcio'        => $request->image_descripcio,
            'user_id'           => auth()->user()->id,
            'path'              => $path,
            'thumbnail_path'    => '/storage/user/'. 
                                    auth()->user()->id . '/' .
                                    sprintf('tn-%s', $name),
            'imageable_id'      => $request->imageable_id,
            'imageable_type'    => $request->imageable_type,
            //testing
        ]);


        $request->file('file')->storeAs('public/user/' . auth()->user()->id, $name);

        // InterventionImage::make($request->file('file'))
        //     ->fit(330)  
        //     //->save($image->thumbnail_path);
        //     ->save('/public/user/' . auth()->user()->id . '/tn-' . $name);

        InterventionImage::make($request->file('file'))
            ->fit(330)
            //->save($image->thumbnail_path);
            ->save('public/user/' . auth()->user()->id . '/tn-' . $name);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return view('image.edit',compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ImageRequest $request, Image $image)
    {
        $image['nom'] = $request['nom'];
        $image['descripcio'] = $request['descripcio'];

        $image->save();

        return Response::json('success', 200);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        dd(Storage::files('storage/user'));
        Storage::delete([$image->path, $image->thumbnail_path]);
        $image->imageable()->dissociate();
        $image->delete();
        dd($image);
         
        return Response::json('success', 200);  
    }
}
