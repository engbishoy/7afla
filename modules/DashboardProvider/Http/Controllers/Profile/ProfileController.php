<?php

namespace Modules\DashboardProvider\Http\Controllers\Profile;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Modules\Service\Entities\Service;
use Illuminate\Contracts\Support\Renderable;
use Modules\BusinessProfile\Entities\Gallary;
use Modules\BusinessProfile\Entities\Profile;
use Modules\BusinessProfile\Entities\Time;
use Modules\Core\Http\Controllers\AppController;
use Modules\DashboardProvider\Http\Requests\ProfileRequest;

class ProfileController extends AppController
{
    public function services()
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

        $services=Service::all();
        return view('dashboardprovider::dashboard.profile.services',compact('services'));
    }


     /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Service $service)
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
        
        return view('dashboardprovider::dashboard.profile.index',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(Service $service)
    {
        $this->setAjaxParams([
            'dt_modal_request_type' => 'POST',
            'dt_modal_submit_url' => route('dashboard.provider.profile.store',[$service->id])
        ]);
        return view('dashboardprovider::dashboard.profile.modals.add');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(ProfileRequest $request,Service $service)
    {

        foreach($request->start_time as $index=>$start_time)
        if($start_time >= $request->end_time[$index]){
            return response()->json(['errors'=>[__('core::global.Please, the timer for the end of time must be greater than the beginning of time')]],422);
        }

        $data=$request->except('provider_id');
        $data['provider_id']=auth()->user()->id;
        $data['service_id']=$service->id;

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

        foreach($request->start_time as $index=>$start_time){
            $time=Time::create([
                'profile_id'=>$profile->id,
                'start_time'=>$start_time,
                'end_time'=>$request->end_time[$index],
            ]);
        }
        
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-added-row')],201);
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
            'dt_modal_submit_url' => route('dashboard.provider.profile.update', [$profile->id]),
        ]);

        return view('dashboardprovider::dashboard.profile.modals.edit', compact('profile'));
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

}
