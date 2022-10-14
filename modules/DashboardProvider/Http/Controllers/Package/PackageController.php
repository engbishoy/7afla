<?php

namespace Modules\DashboardProvider\Http\Controllers\Package;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Modules\Package\Entities\Package;

use Illuminate\Contracts\Support\Renderable;
use Modules\Package\Entities\PackageDetails;
use Modules\BusinessProfile\Entities\Profile;
use Modules\Core\Http\Controllers\AppController;
use Modules\Package\Http\Requests\PackageRequest;
use Modules\Package\Http\Requests\UpdatePackageRequest;

class PackageController extends AppController
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
        return view('dashboardprovider::dashboard.package.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $this->setAjaxParams([
            'dt_modal_request_type' => 'POST',
            'dt_modal_submit_url' => route('dashboard.provider.package.store')
        ]);
        $profiles = Profile::where('provider_id',auth()->user()->id)->get();
        return view('dashboardprovider::dashboard.package.modals.add', compact('profiles'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(PackageRequest $request)
    {


        $package = Package::create([
            'profile_id' => $request->profile_id,
            'title' => $request->title,
        ]);




        foreach ($request->package_name as $index => $package_name) {

            $photo = $request->photo[$index];
            $photoname = $photo->getClientOriginalName();
            $path = base_path() . '/storage/app/public/package/img/';
            $photo->move($path, $photoname);
            $photo_path = '/system/storage/app/public/package/img/' . $photoname;


            PackageDetails::create([
                'package_id' => $package->id,
                'name' => $package_name,
                'description' => $request->description[$index],
                'price' => $request->price[$index],
                'photo_name' => $photoname,
                'photo_path' => $photo_path,
            ]);
        }
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-added-row')], 201);
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Package $package)
    {
        $this->setAjaxParams([
            'dt_modal_request_type' => 'PUT',
            'dt_modal_submit_url' => route('dashboard.provider.package.update', [$package->id]),
        ]);
        $profiles = Profile::where('provider_id',auth()->user()->id)->get();
        return view('dashboardprovider::dashboard.package.modals.edit', compact('package', 'profiles'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdatePackageRequest $request, Package $package)
    {

        $package_details=PackageDetails::where('package_id',$package->id)->delete();

        foreach ($request->package_name as $index => $package_name) {


            $photo = $request->photo[$index];
            
            $photoname = $photo->getClientOriginalName();
            $path = base_path() . '/storage/app/public/package/img/';
            $photo->move($path, $photoname);
            $photo_path = '/system/storage/app/public/package/img/' . $photoname;


            PackageDetails::create([
                'package_id' => $package->id,
                'name' => $package_name,
                'description' => $request->description[$index],
                'price' => $request->price[$index],
                'photo_name' => $photoname,
                'photo_path' => $photo_path,
            ]);
        }
        
        $data = $request->except(['package_id','name','description','price','photo_name', 'photo_path']);

        $package->update($data);
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-updated-row')], 200);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-deleted-row')], 200);
    }


    public function destroyMany(Request $request)
    {
        Package::destroy($request->ids);
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-deleted-rows')], 200);
    }
}
