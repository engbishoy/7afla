<div>
    <button id="dt_header_export" type="button" class="btn btn-sm btn-light me-3" data-kt-menu-trigger="click"
        data-kt-menu-placement="bottom-end">
        <!--begin::Svg Icon | path: icons/duotone/Files/Export.svg-->
        <span class="svg-icon svg-icon-2">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24"></rect>
                    <path
                        d="M17,8 C16.4477153,8 16,7.55228475 16,7 C16,6.44771525 16.4477153,6 17,6 L18,6 C20.209139,6 22,7.790861 22,10 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,9.99305689 C2,7.7839179 3.790861,5.99305689 6,5.99305689 L7.00000482,5.99305689 C7.55228957,5.99305689 8.00000482,6.44077214 8.00000482,6.99305689 C8.00000482,7.54534164 7.55228957,7.99305689 7.00000482,7.99305689 L6,7.99305689 C4.8954305,7.99305689 4,8.88848739 4,9.99305689 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,10 C20,8.8954305 19.1045695,8 18,8 L17,8 Z"
                        fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                    <rect fill="#000000" opacity="0.3"
                        transform="translate(12.000000, 8.000000) scale(1, -1) rotate(-180.000000) translate(-12.000000, -8.000000)"
                        x="11" y="2" width="2" height="12" rx="1"></rect>
                    <path
                        d="M12,2.58578644 L14.2928932,0.292893219 C14.6834175,-0.0976310729 15.3165825,-0.0976310729 15.7071068,0.292893219 C16.0976311,0.683417511 16.0976311,1.31658249 15.7071068,1.70710678 L12.7071068,4.70710678 C12.3165825,5.09763107 11.6834175,5.09763107 11.2928932,4.70710678 L8.29289322,1.70710678 C7.90236893,1.31658249 7.90236893,0.683417511 8.29289322,0.292893219 C8.68341751,-0.0976310729 9.31658249,-0.0976310729 9.70710678,0.292893219 L12,2.58578644 Z"
                        fill="#000000" fill-rule="nonzero"
                        transform="translate(12.000000, 2.500000) scale(1, -1) translate(-12.000000, -2.500000)">
                    </path>
                </g>
            </svg>
        </span>
        <span class="data-action-name">{{ __('core::global.datatable.header.tools') }}</span>
        <!--end::Svg Icon-->
    </button>
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
        data-kt-menu="true">
        <!--begin::Heading-->
        <div class="menu-item px-3">
            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Options</div>
        </div>
        <!--end::Heading-->
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <a href="#" class="menu-link px-3 dt-export-btn" {{ $attributes }} export-option="print">
                <i class="fal fa-print ms-2 fs-3 me-2"></i>
                Imprimer
            </a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <a href="#" class="menu-link px-3 dt-export-btn" {{ $attributes }} export-option="copy">
                <i class="far fa-copy ms-2 fs-3 me-2"></i>
                Copier
            </a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <a href="#" class="menu-link px-3 dt-export-btn" {{ $attributes }} export-option="pdf">
                <i class="far fa-file-pdf ms-2 fs-3 me-2"></i>
                PDF
            </a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <a href="#" class="menu-link px-3 dt-export-btn" {{ $attributes }} export-option="excel">
                <i class="far fa-file-excel ms-2 fs-3 me-2"></i>
                Excel
            </a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <a href="#" class="menu-link px-3 dt-export-btn" {{ $attributes }} export-option="csv">
                <i class="far fa-file-csv ms-2 fs-3 me-2"></i>
                CSV
            </a>
        </div>
        <!--end::Menu item-->
    </div>
</div>