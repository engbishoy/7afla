<?php

namespace Modules\Service\Http\Controllers\Trashed;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Lang;
use Modules\Service\Entities\Service;
use Yajra\DataTables\Facades\DataTables;

class ServiceTrashedDataTableController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->ajax()) {
            $model = Service::onlyTrashed();
            return DataTables::of($model)
                ->addColumn('name', function ($row) {
                    return $row->name;
                })
                ->addColumn('selectRow', function ($row) {
                    return $row->id;
                })
                ->addColumn('action', function ($row) {
                    $buttons = [
                        _dt_btn_factory([
                            'action'      => 'restore',
                            'actionType'  => 'alert',
                            'actionMethod'  => 'POST',
                            'url'         => route('service.trashed.restore', [$row->id]),
                            'title'       => Lang::get("core::global.datatable.actions.restore"),
                            'icon'        => 'fas fa-trash-undo-alt',
                            'classes'     => 'btn btn-icon btn-light-success btn-sm me-1',
                            'permissions' => auth()->user()->can('service.actions.restore'),
                            'conditions'    => true,
                            'tooltip' => [
                                'disabled' => false,
                                'placement' => 'top',
                                'color' => 'dark'
                            ],
                            'alertOptions' => [
                                'title' => 'swal-restore-prompt-single',
                                'icon' => 'warning',
                                'showCancelButton' => 'true',
                                'buttonsStyling' => 'false',
                                'confirmButtonText' => 'swal-restore-btn-confirm',
                                'confirmButtonClasses' => 'btn-warning',
                                'cancelButtonText' => 'swal-restore-btn-discard',
                                'cancelButtonClasses' => 'btn-active-light-primary',
                            ]
                        ]),
                        _dt_btn_factory([
                            'action'      => 'delete',
                            'actionType'  => 'alert',
                            'actionMethod'  => 'DELETE',
                            'url'         => route('service.trashed.destroy', [$row->id]),
                            'title'       => Lang::get("core::global.datatable.actions.delete"),
                            'icon'        => 'fas fa-trash',
                            'classes'     => 'btn btn-icon btn-light-danger btn-sm',
                            'permissions' => auth()->user()->can('service.actions.hard_delete'),
                            'conditions'    => true,
                            'tooltip' => [
                                'disabled' => false,
                                'placement' => 'top',
                                'color' => 'dark'
                            ],
                            'alertOptions' => [
                                'title' => 'swal-hard-delete-prompt-single',
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
                })
                ->make(true);
        } else {
            abort(404);
        }
    }
}
