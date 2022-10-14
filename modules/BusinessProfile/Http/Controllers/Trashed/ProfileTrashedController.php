<?php

namespace Modules\BusinessProfile\Http\Controllers\Trashed;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Lang;
use Modules\BusinessProfile\Entities\Profile;
use Modules\Core\Http\Controllers\AppController;

class ProfileTrashedController extends AppController
{

    public function destroy($id)
    {
        Profile::withTrashed()->findOrFail($id)->forceDelete();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-hard-deleted-row')], 200);
    }

    public function destroyMany(Request $request)
    {
        Profile::withTrashed()->whereIn('id',$request->ids)->forceDelete();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-hard-deleted-rows')],200);
    }

    public function restore($id)
    {
        Profile::withTrashed()->findOrFail($id)->restore();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-restored-row')], 200);
    }

    public function restoreMany(Request $request)
    {
        Profile::withTrashed()->whereIn('id',$request->ids)->restore();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-restored-rows')],200);
    }
}
