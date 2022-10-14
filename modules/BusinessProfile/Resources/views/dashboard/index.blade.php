@extends('dashboard::layout.main')

@section('pageHead')
<title>{{ __('businessprofile::header.title') }} | Sengine</title>
<meta name="description"
content="put description here" />
<meta name="keywords"
content="put key words here" />
@endsection

@section('pageStyle')
<link href="{{ asset('/themes/metro8/assets/plugins/datatables/datatables.bundle.css') }}" rel="stylesheet"
    type="text/css">
@endsection

@section('page_title')
<!--begin::Page title-->
<div data-kt-swapper="true" data-kt-swapper-mode="prepend"
    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_header_nav'}"
    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
    <!--begin::Title-->
    <h1 class="d-flex align-items-center fw-bolder fs-3 my-1 toolbar-main-title-color">{{ __('businessprofile::header.title') }}</h1>
    <!--end::Title-->
</div>
<!--end::Page title-->
@endsection

@section('content')
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl container-full-width">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div id="header-container" class="card-header border-0 pt-6">
                <x-dashboard::dt-search dt-target="_datatable"/>
                <!--begin::Card toolbar-->
                <x-dashboard::dt-toolbar>

                    @can('profile.actions.add')
                    <!--begin::Add-->
                    <x-dashboard::dt-add-btn dt-target="_datatable" data-action-url="{{ route('profile.create') }}"/>
                    <!--end::Add-->
                    @endcan

                    @can('profile.actions.view_trash')
                    <!--begin::Trashed-->
                    <x-dashboard::dt-trash-btn dt-target="_datatable" data-action-url="{{ route('profile.trashed.datatable') }}"/>
                    <!--end::Trashed-->
                    @endcan

                    @can('profile.actions.view_trash')
                    <!--begin::Previous-->
                    <x-dashboard::dt-prv-btn dt-target="_datatable" data-action-url="{{ route('profile.datatable') }}"/>
                    <!--end::Previous-->
                    @endcan

                    @can('profile.actions.export')
                    <!--begin::Export-->
                    <x-dashboard::dt-export dt-target="_datatable"/>
                    <!--end::Export-->
                    @endcan

                    <!--begin::ColumnFilter-->
                    <x-dashboard::dt-col-filter dt-target="_datatable"/>
                    <!--end::ColumnFilter-->

                    <!--begin::Refresh-->
                    <x-dashboard::dt-refresh dt-target="_datatable"/>
                    <!--end::Refresh-->

                    <!--begin::FullScrn-->
                    <x-dashboard::dt-full-scrn dt-target="_datatable"/>
                    <!--end::FullScrn-->

                    <!--begin::Group actions-->
                    <x-slot name="group">
                        <!--begin::Input group-->
                        <x-dashboard::dt-actn-grp>
                            @can('profile.actions.delete')
                            <x-dashboard::dt-actn-grp-delete data-action-url="{{ route('profile.destroy.many') }}" />
                            @endcan
                        </x-dashboard::dt-actn-grp>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <x-dashboard::dt-trashed-actn-grp>
                            @can('profile.actions.restore')
                            <x-dashboard::dt-actn-grp-restore data-action-url="{{ route('profile.trashed.restore.many') }}" />
                            @endcan
                            @can('profile.actions.hard_delete')
                            <x-dashboard::dt-actn-grp-delete data-action-url="{{ route('profile.trashed.destroy.many') }}" />
                            @endcan
                        </x-dashboard::dt-trashed-actn-grp>
                        <!--end::Input group-->
                    </x-slot>
                    <!--end::Group actions-->
                </x-dashboard::dt-toolbar>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">

                        
        <div class="row">

         
            <div class="col">
 
             <div style="width: 100%" class="small-box btn btn-primary">
               <a style="color: white"  dt-target="_datatable" dt-staticts data-action-url="{{ route('profile.datatable') }}" >
               <div class="inner">      
               <h2>{{__('businessprofile::datatable.all profiles')}}</h2>
               <p style="font-weight: bold;font-size: 45px;"> {{$all_profile}} </p>
 
               </div>
            
               <p style="color: white" class="small-box-footer">{{__('businessprofile::datatable.More info')}} <i class="fa fa-arrow-circle-right"></i></p>
            
               </a>
             </div>
 
           </div>
 
           <div class="col">
 
             <div style="width: 100%" class="small-box btn btn-warning">
               <a style="color: white"  dt-target="_datatable" dt-staticts data-action-url="{{ route('profile.status.datatable',['status'=>'waiting']) }}">
               <div class="inner">      
               <h2>{{__('businessprofile::datatable.awaiting approve')}}</h2>
               <p style="font-weight: bold;font-size: 45px;"> {{$waiting_profile}} </p>
 
               </div>
            
               <p style="color: white"  class="small-box-footer">{{__('businessprofile::datatable.More info')}} <i class="fa fa-arrow-circle-right"></i></p>
               </a>
             </div>
 
           </div>
 
 
           <div class="col">
 
             <div style="width: 100%" class="small-box btn btn-success">
               <a style="color: white" dt-target="_datatable" dt-staticts data-action-url="{{ route('profile.status.datatable',['status'=>'confirmed']) }}">

               <div class="inner">      
               <h2>{{__('businessprofile::datatable.approved')}}</h2>
               <p style="font-weight: bold;font-size: 45px;"> {{$confirmed_profile}} </p>
 
               </div>
            
               <p style="color: white" class="small-box-footer">{{__('businessprofile::datatable.More info')}} <i class="fa fa-arrow-circle-right"></i></p>
               </a>
             </div>
 
           </div>
 
 
           <div class="col">
 
             <div style="width: 100%" class="small-box btn btn-danger">
               <a style="color: white" dt-target="_datatable" dt-staticts data-action-url="{{ route('profile.status.datatable',['status'=>'blocked']) }}">

               <div class="inner">      
               <h2>{{__('businessprofile::datatable.blocked')}}</h2>
               <p style="font-weight: bold;font-size: 45px;"> {{$blocked_profile}} </p>
 
               </div>
            
               <p style="color: white" class="small-box-footer">{{__('businessprofile::datatable.More info')}} <i class="fa fa-arrow-circle-right"></i></p>
             
               </a>
             </div>
 
           </div>
 
         </div>


                <!--begin::Table-->
                <x-dashboard::data-table id="_datatable" data-url="{{ route('profile.datatable') }}" 
                    data-order='[[ 1, "desc" ]]' data-page-length='25'>

                    <th>
                        {{ __('businessprofile::datatable.columns.photo') }}
                    </th>

                    <th>
                        {{ __('businessprofile::datatable.columns.provider name') }}
                    </th>

                    <th>
                        {{ __('businessprofile::datatable.columns.profile title') }}
                    </th>

                    <th>
                        {{ __('businessprofile::datatable.columns.price') }}
                    </th>

                    
                    <th>
                        {{ __('businessprofile::datatable.columns.service') }}
                    </th>

                    <th>
                        {{ __('businessprofile::datatable.columns.status') }}
                    </th>

                    <th>
                        {{ __('businessprofile::datatable.columns.creation_date') }}
                    </th>
                    
                </x-dashboard::data-table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
@endsection


@section('extras')
<!--begin::Scrolltop-->
@include('dashboard::layout.partials.scrollup')
<!--end::Scrolltop-->
<x-dashboard::dt-modal/>
@endsection

@section('pageScripts')

<script src="{{asset('/themes/metro8/assets/plugins/datatables/datatables.bundle.js')}}"></script>
<script src="{{asset('/themes/metro8/assets/js/bundle/datatable.js')}}"></script>
<script src="{{asset('/themes/metro8/assets/js/bundle/modal_form_validation.js')}}"></script>
<script src="{{asset('/themes/metro8/assets/modules/businessprofile/js/profile.js')}}"></script>

<script src="{{asset('/themes/metro8/assets/js/bundle/dt_media_query.js')}}"></script>

@endsection