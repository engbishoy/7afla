<?php

namespace Modules\BusinessProfile\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Lang;
use Modules\BusinessProfile\Entities\Profile;
use Yajra\DataTables\Facades\DataTables;

class ProfileStatusDatatableController extends Controller
{
    public function __invoke(Request $request,$status)
    {

        if (!$request->ajax()) {
            abort(403);
        }

        if($status=='waiting'){
            $model = Profile::where('status',0)->orderBy('id','desc')->get();  
        }

        if($status=='confirmed'){
            $model = Profile::where('status',1)->orderBy('id','desc')->get();  
        }

        if($status=='blocked'){
            $model = Profile::where('status',2)->orderBy('id','desc')->get();  
        }

        return DataTables::of($model)
        ->addColumn('selectRow', function ($row) {
            return $row->id;
        })
            ->addColumn('photo', function ($row) {
                if (count($row->gallary)>0) {
                    $url = url($row->gallary[0]->photo_path);
                    return view('dashboard::widgets.dt_photo', compact('url'));
                } else {
                    return '-';
                }
            })
            ->addColumn('provider_name', function ($row) {
                return $row->provider->name;
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
                    // _dt_btn_factory([
                    //     'action'      => 'gallary',
                    //     'actionType'  => 'link',
                    //     'actionMethod'  => 'GET',
                    //     'url'         => route('profile.gallary.index', [$row->id]),
                    //     'title'       => Lang::get("core::global.datatable.actions.gallary"),
                    //     'icon'        => 'fas fa-images',
                    //     'classes'     => 'btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1',
                    //     'conditions'    => true,
                    //     'tooltip' => [
                    //         'disabled' => false,
                    //         'placement' => 'top',
                    //         'color' => 'dark'
                    //     ]
                    // ]),

                    _dt_btn_factory([
                        'action'      => 'active',
                        'actionType'  => 'alert',
                        'actionMethod'  => 'PUT',
                        'url'         => route('profile.active', [$row->id]),
                        'title'       => Lang::get("core::global.datatable.actions.active"),
                        'icon'        => 'fas fa-check',
                        'classes'     => 'btn btn-icon btn-light-success btn-sm',
                        'permissions' => auth()->user()->can('profile.actions.control') ,
                        'conditions'    => ( $row->status==0 or $row->status==2 ) ? true : false,
                        'tooltip' => [
                            'disabled' => false,
                            'placement' => 'top',
                            'color' => 'dark'
                        ],
                        'alertOptions' => [
                            'title' => 'swal-update-prompt-single',
                            'icon' => 'warning',
                            'showCancelButton' => 'true',
                            'buttonsStyling' => 'false',
                            'confirmButtonText' => 'swal-update-btn-confirm',
                            'confirmButtonClasses' => 'btn-success',
                            'cancelButtonText' => 'swal-update-btn-discard',
                            'cancelButtonClasses' => 'btn-active-light-danger',
                        ]
                    ]),
                        


                                  
                    _dt_btn_factory([
                        'action'      => 'block',
                        'actionType'  => 'alert',
                        'actionMethod'  => 'PUT',
                        'url'         => route('profile.block', [$row->id]),
                        'title'       => Lang::get("core::global.datatable.actions.block"),
                        'icon'        => 'fas fa-ban',
                        'classes'     => 'btn btn-icon btn-light-danger btn-sm',
                        'permissions' => auth()->user()->can('profile.actions.control') ,
                        'conditions'    => ( $row->status==1 ) ? true : false,
                        'tooltip' => [
                            'disabled' => false,
                            'placement' => 'top',
                            'color' => 'dark'
                        ],
                        'alertOptions' => [
                            'title' => 'swal-update-prompt-single',
                            'icon' => 'warning',
                            'showCancelButton' => 'true',
                            'buttonsStyling' => 'false',
                            'confirmButtonText' => 'swal-update-btn-confirm',
                            'confirmButtonClasses' => 'btn-danger',
                            'cancelButtonText' => 'swal-update-btn-discard',
                            'cancelButtonClasses' => 'btn-active-light-primary',
                        ]
                    ]),
                        
                    
                    _dt_btn_factory([
                        'action'      => 'edit',
                        'actionType'  => 'modal',
                        'actionMethod'  => 'GET',
                        'url'         => route('profile.edit', [$row->id]),
                        'title'       => Lang::get("core::global.datatable.actions.edit"),
                        'icon'        => 'fas fa-edit',
                        'classes'     => 'btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1',
                        'permissions' => auth()->user()->can('profile.actions.edit'),
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
                        'url'         => route('profile.destroy', [$row->id]),
                        'title'       => Lang::get("core::global.datatable.actions.delete"),
                        'icon'        => 'fas fa-trash',
                        'classes'     => 'btn btn-icon btn-light-danger btn-sm',
                        'permissions' => auth()->user()->can('profile.actions.delete'),
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
