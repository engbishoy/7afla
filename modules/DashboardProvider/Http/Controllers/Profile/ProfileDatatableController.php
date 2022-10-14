<?php

namespace Modules\DashboardProvider\Http\Controllers\Profile;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Lang;
use Modules\BusinessProfile\Entities\Profile;
use Modules\Service\Entities\Service;
use Yajra\DataTables\Facades\DataTables;

class ProfileDatatableController extends Controller
{
    public function __invoke(Request $request,Service $service)
    {

        if (!$request->ajax()) {
            abort(403);
        }

        $model = Profile::where([
            ['provider_id',auth()->user()->id],
            ['service_id',$service->id],
        ])->get();
        return DataTables::of($model)
            ->addColumn('photo', function ($row) {
                if (count($row->gallary)>0) {
                    $url = url($row->gallary[0]->photo_path);
                    return view('dashboard::widgets.dt_photo', compact('url'));
                } else {
                    return '-';
                }
            })
   
            ->addColumn('service_name', function ($row) {
                return $row->service->name;
            })
            ->editColumn('status', function($row){
                $status=$row->status;
                return view('dashboard::widgets.dt_status',compact('status'));
            })

            ->addColumn('action', function ($row) {
                $buttons = [
             
                    _dt_btn_factory([
                        'action'      => 'edit',
                        'actionType'  => 'modal',
                        'actionMethod'  => 'GET',
                        'url'         => route('dashboard.provider.profile.edit', [$row->id]),
                        'title'       => Lang::get("core::global.datatable.actions.edit"),
                        'icon'        => 'fas fa-edit',
                        'classes'     => 'btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1',
                        'conditions'    => true,
                        'tooltip' => [
                            'disabled' => false,
                            'placement' => 'top',
                            'color' => 'dark'
                        ]
                    ]),
                    _dt_btn_factory([
                        'action'      => 'delete',
                        'actionType'  => 'alert',
                        'actionMethod'  => 'DELETE',
                        'url'         => route('dashboard.provider.profile.destroy', [$row->id]),
                        'title'       => Lang::get("core::global.datatable.actions.delete"),
                        'icon'        => 'fas fa-trash',
                        'classes'     => 'btn btn-icon btn-light-danger btn-sm',
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
