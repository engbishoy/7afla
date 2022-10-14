<?php

namespace Modules\BusinessProfile\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Modules\Provider\Entities\Provider;
use Illuminate\Contracts\Support\Renderable;
use Modules\BusinessProfile\Entities\Gallary;
use Modules\BusinessProfile\Entities\Profile;
use Modules\Core\Http\Controllers\AppController;
use Modules\Service\Entities\Service;

class ProfileController extends AppController
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $this->setMessages([
            //swal
            'swal-delete-prompt' => Lang::get('core::global.swal.swal-delete-prompt'),
            'swal-delete-prompt-single' => Lang::get('core::global.swal.swal-delete-prompt-single'),
            'swal-hard-delete-prompt' => Lang::get('core::global.swal.swal-hard-delete-prompt'),
            'swal-hard-delete-prompt-single' => Lang::get('core::global.swal.swal-hard-delete-prompt-single'),
            'swal-delete-btn-confirm' => Lang::get('core::global.swal.swal-delete-btn-confirm'),
            'swal-delete-btn-discard' => Lang::get('core::global.swal.swal-delete-btn-discard'),

            'swal-restore-prompt' => Lang::get('core::global.swal.swal-restore-prompt'),
            'swal-restore-prompt-single' => Lang::get('core::global.swal.swal-restore-prompt-single'),
            'swal-restore-btn-confirm' => Lang::get('core::global.swal.swal-restore-btn-confirm'),
            'swal-restore-btn-discard' => Lang::get('core::global.swal.swal-restore-btn-discard'),

            'swal-update-prompt' => Lang::get('core::global.swal.swal-update-prompt'),
            'swal-update-prompt-single' => Lang::get('core::global.swal.swal-update-prompt-single'),
            'swal-update-btn-confirm' => Lang::get('core::global.swal.swal-update-btn-confirm'),
            'swal-update-btn-discard' => Lang::get('core::global.swal.swal-update-btn-discard'),
   
        ]);
        $all_profile = Profile::count();
        $waiting_profile = Profile::where('status', 0)->count();
        $confirmed_profile = Profile::where('status', 1)->count();
        $blocked_profile = Profile::where('status', 2)->count();

        return view('businessprofile::dashboard.index',compact('all_profile','waiting_profile','confirmed_profile','blocked_profile'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $this->setAjaxParams([
            'dt_modal_request_type' => 'POST',
            'dt_modal_submit_url' => route('profile.store')
        ]);
        $providers=Provider::all();
        $services=Service::all();
        return view('businessprofile::dashboard.modals.add',compact('providers','services'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $profile = Profile::create($data);

        if($request->photos){
        foreach ($request->photos as $photo) {
            Gallary::create([
                'profile_id' => $profile->id,
                'photo_name' =>$photo,
                'photo_path' => '/system/storage/app/public/profiles/img/'.$photo
            ]);
        }
        }
        
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-added-row')],201);
    }


    public function upload_photos(Request $request)
    {

        $photos = $request->photos;

        $photoname = $photos->getClientOriginalName();
        $path = base_path() . '/storage/app/public/profiles/img/';

        $photos->move($path, $photoname);
    }


    public function delete_photos(Request $request)
    {

        $photos = $request->filename;
        File::delete(base_path() . '/storage/app/public/profiles/img/' . $photos);
    }

    
    public function get_photos(Request $request)
    {
        $profile = Profile::find($request->profile_id);

        $images = $profile->gallary;
        if(count($images)>0){
          
        foreach ($images as $image) {
            $tableImages[] = $image['photo_name'];
        }

        foreach ($tableImages as $file) {
            $obj['name'] = $file;
            $file_path = base_path() . '/storage/app/public/profiles/img/' . $file;
            $obj['size'] = filesize($file_path);
            $obj['path'] = url('/system/storage/app/public/profiles/img/' . $file);
            $data[] = $obj;
        }
        return $data;
        }else{
            return [];
        }
    }
    
    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Profile $profile)
    {
        $this->setAjaxParams([
            'dt_modal_request_type' => 'PUT',
            'dt_modal_submit_url' => route('profile.update', [$profile->id]),
        ]);
        $providers=Provider::all();
        $services=Service::all();

        return view('businessprofile::dashboard.modals.edit', compact('profile','providers','services'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, Profile $profile)
    {
        $data=$request->except('photos');

        Gallary::where('profile_id', $profile->id)->delete();
        foreach ($request->photos as $photo) {
            Gallary::create([
                'profile_id' => $profile->id,
                'photo_name' =>$photo,
                'photo_path' => '/system/storage/app/public/profiles/img/'.$photo
            ]);
        }      
        $profile->update($data);
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-updated-row')],200);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-deleted-row')], 200);
    }


    public function destroyMany(Request $request){
        Profile::destroy($request->ids);
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-deleted-rows')],200);
    }

    public function active(Profile $profile)
    {
        $profile->status = 1;
        $profile->save();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-updated-row')], 200);
    }



    public function block(profile $profile)
    {
        $profile->status = 2;
        $profile->save();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-updated-row')], 200);
    }
    

}
