<?php

namespace Modules\Provider\Http\Controllers\Gallary;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Modules\Provider\Entities\Gallary;
use Modules\Provider\Entities\Provider;
use Yajra\DataTables\Facades\DataTables;

class GallaryDatatableController extends Controller
{
    public function __invoke(Request $request,Provider $provider)
    {

        if (!$request->ajax()) {
            abort(403);
        }

        $model = Gallary::where('provider_id',$provider->id)->get();
        return DataTables::of($model)
            ->addColumn('photo', function ($row) {
                $url=url($row->photo_path);
                return view('dashboard::widgets.dt_photo',compact('url'));
            })
            ->addColumn('action', function ($row) {
                $buttons = [
                    _dt_btn_factory([
                        'action'      => 'delete',
                        'actionType'  => 'alert',
                        'actionMethod'  => 'DELETE',
                        'url'         => route('provider.gallary.destroy', [$row->id]),
                        'title'       => Lang::get("core::global.datatable.actions.delete"),
                        'icon'        => 'fas fa-trash',
                        'classes'     => 'btn btn-icon btn-light-danger btn-sm',
                        'permissions' => auth()->user()->can('provider.actions.delete'),

                        'conditions'    => true,
                        'tooltip' => [
                            'disabled' => false,
                            'placement' => 'top',
                            'color' => 'dark'
                        ],
                        'alertOptions' => [
                            'title' => 'swal-delete-prompt-single',
                            'icon' => 'error',
                            'showCancelButton' => 'true',
                            'buttonsStyling' => 'false',
                            'confirmButtonText' => 'swal-delete-btn-confirm',
                            'confirmButtonClasses' => 'btn-danger',
                            'cancelButtonText' => 'swal-delete-btn-discard',
                            'cancelButtonClasses' => 'btn-active-light-primary',
                        ]
                    ])
                ];
                return $buttons;
            })->make(true);
    }
}
