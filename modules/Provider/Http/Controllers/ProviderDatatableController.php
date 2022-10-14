<?php

namespace Modules\Provider\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Lang;
use Modules\Provider\Entities\Provider;
use Yajra\DataTables\Facades\DataTables;

class ProviderDatatableController extends Controller
{
    public function __invoke(Request $request)
    {

        if (!$request->ajax()) {
            abort(403);
        }

        $model = Provider::all();
        return DataTables::of($model)
            ->addColumn('type', function ($row) {
                if($row->type==0){
                    return __('provider::modal.form.service provider');
                }elseif($row->type==1){
                    return __('provider::modal.form.supplier');
                }
            })
            ->addColumn('action', function ($row) {
                $buttons = [
                    // _dt_btn_factory([
                    //     'action'      => 'gallary',
                    //     'actionType'  => 'link',
                    //     'actionMethod'  => 'GET',
                    //     'url'         => route('provider.gallary.index', [$row->id]),
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
                        'action'      => 'edit',
                        'actionType'  => 'modal',
                        'actionMethod'  => 'GET',
                        'url'         => route('provider.edit', [$row->id]),
                        'title'       => Lang::get("core::global.datatable.actions.edit"),
                        'icon'        => 'fas fa-edit',
                        'classes'     => 'btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1',
                        'permissions' => auth()->user()->can('provider.actions.edit'),
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
                        'url'         => route('provider.destroy', [$row->id]),
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
