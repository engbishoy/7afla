<?php

namespace Modules\DashboardProvider\Http\Controllers\Gallary;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Lang;
use Modules\Provider\Entities\Gallary;
use Illuminate\Contracts\Support\Renderable;
use Modules\Core\Http\Controllers\AppController;
use Modules\DashboardProvider\Http\Requests\GallaryRequest;

class GallaryController extends AppController
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
        ]);
        return view('dashboardprovider::dashboard.gallary.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $this->setAjaxParams([
            'dt_modal_request_type' => 'POST',
            'dt_modal_submit_url' => route('dashboard.provider.gallary.store')
        ]);
       
        return view('dashboardprovider::dashboard.gallary.modals.add');
    }



    public function upload_photos(Request $request)
    {

        $photos = $request->photos;

        $photoname = $photos->getClientOriginalName();
        $path = base_path() . '/storage/app/public/provider/gallary/img/';

        $photos->move($path, $photoname);
    }


    public function delete_photos(Request $request)
    {

        $photos = $request->filename;
        File::delete(base_path() . '/storage/app/public/provider/gallary/img/' . $photos);
    }


    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
 
        foreach ($request->photos as $photo) {
            Gallary::create([
                'provider_id' => auth()->user()->id,
                'photo_name' =>$photo,
                'photo_path' => '/system/storage/app/public/provider/gallary/img/'.$photo
            ]);
        }
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-added-row')],201);
    }

   
    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Gallary $gallary)
    {
        $gallary->delete();
        File::delete(base_path().$gallary->photo_path);
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-deleted-row')], 200);
    }


    public function destroyMany(Request $request){
        foreach($request->ids as $id){
            $gallary=Gallary::find($id);
            File::delete(base_path().$gallary->photo_name);
        }

        Gallary::destroy($request->ids);

        return response()->json(['message' => Lang::get('core::global.toastr.toastr-deleted-rows')],200);
    }

}
