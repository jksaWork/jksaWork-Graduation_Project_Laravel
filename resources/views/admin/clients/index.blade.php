@extends('layouts.admin.admin')
@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <form action="{{ route('clients.index') }}" method="get">
                                <input type="text" name='search' class="form-control form-control-solid w-250px ps-15"
                                    placeholder="Search Area" />
                            </form>
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">

                            <!--begin::Menu 1-->

                            <!--end::Menu 1-->
                            <!--end::Filter-->
                            <!--begin::Export-->

                            <!--end::Export-->
                            <!--begin::Add customer-->
                            <a href='{{ route('clients.create') }}' class="btn btn-primary">Add Client</a>
                            <!--end::Add customer-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none"
                            data-kt-customer-table-toolbar="selected">
                            <div class="fw-bolder me-5">
                                <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected
                            </div>
                            <button type="button" class="btn btn-danger"
                                data-kt-customer-table-select="delete_selected">Delete Selected</button>
                        </div>
                        <!--end::Group actions-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    @include('layouts.includes.session')
                    <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                                            data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px">Name</th>
                                <th class="min-w-125px">phone</th>
                                <th class="min-w-125px">Email</th>
                                <th class="min-w-125px">Status</th>
                                <th class="text-end min-w-70px">{{ __('translation.action')}}</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            @forelse ($clients as $client)
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="{{ $client->id }}" />
                                        </div>
                                    </td>
                                    <td>{{ $client->name }}</a>
                                    </td>
                                    <td>{{ $client->phone }}</a></td>
                                    <td>{{ $client->email }}</a></td>
                                    <td>{!! $client->getStatusWithSpan() !!}</a>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo1/dist/apps/customers/view.html"
                                                    class="menu-link px-3">View</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="{{ route('clients.edit', $client->id) }}"
                                                    class="menu-link bg-light-info px-3">Edit</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="{{ route('clients.show', ['client' => $client->id, 'status' => true]) }}"
                                                    class="menu-link bg-light-success px-3">Change Status</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <form action="{{ route('clients.destroy', $client->id) }}" method="post"
                                                    id='{{ 'client_delete_from_' . $client->id }}'>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="#"
                                                        onclick="document.getElementById('client_delete_from_{{ $client->id }}').submit()"
                                                        class="menu-link px-3 bg-light-danger "
                                                        data-kt-menu-trigger="click">Delete
                                                    </a>
                                                </form>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->

                                    </td>
                                </tr>
                            @empty
                                <td colspan="4">
                                    <div class="text-center">No Data Was Found</div>
                                </td>
                            @endforelse
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            </div>
            <!--end::Card-->
            <!--begin::Modals-->
            <!--begin::Modal - Customers - Add-->
            <div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" action="{{ route('area.store') }}" id="" method="post">
                            @csrf
                            <!--begin::Modal header-->
                            <div class="modal-header" id="kt_modal_add_customer_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">Add a Area</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                fill="black" />
                                            <rect x="7.41422" y="6" width="16" height="2"
                                                rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <!--begin::Scroll-->
                                <div class="scroll-y me-n7 pe-7" id="#">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold mb-2">Name</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="name" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->

                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-15">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">Description</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="description" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Billing toggle-->

                                    <!--end::Billing toggle-->
                                    <!--begin::Billing form-->

                                    <!--end::Billing form-->
                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="reset" id="kt_modal_add_customer_cancel"
                                    class="btn btn-light me-3">Discard</button>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!--end::Modal - Customers - Add-->
            <!--begin::Modal - Adjust Balance-->
            <div class="modal fade" id="kt_customers_export_modal" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">Export Customers</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div id="kt_customers_export_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Form-->
                            <form id="kt_customers_export_form" class="form" action="#">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-bold form-label mb-5">Select Export
                                        Format:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select data-control="select2" data-placeholder="Select a format"
                                        data-hide-search="true" name="format" class="form-select form-select-solid">
                                        <option value="excell">Excel</option>
                                        <option value="pdf">PDF</option>
                                        <option value="cvs">CVS</option>
                                        <option value="zip">ZIP</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-bold form-label mb-5">Select Date
                                        Range:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="Pick a date"
                                        name="date" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Row-->
                                <div class="row fv-row mb-15">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-bold form-label mb-5">Payment Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Radio group-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Radio button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                            <input class="form-check-input" type="checkbox" value="1"
                                                checked="checked" name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-bold">All</span>
                                        </label>
                                        <!--end::Radio button-->
                                        <!--begin::Radio button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                            <input class="form-check-input" type="checkbox" value="2"
                                                checked="checked" name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-bold">Visa</span>
                                        </label>
                                        <!--end::Radio button-->
                                        <!--begin::Radio button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                            <input class="form-check-input" type="checkbox" value="3"
                                                name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-bold">Mastercard</span>
                                        </label>
                                        <!--end::Radio button-->
                                        <!--begin::Radio button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="4"
                                                name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-bold">American
                                                Express</span>
                                        </label>
                                        <!--end::Radio button-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="reset" id="kt_customers_export_cancel"
                                        class="btn btn-light me-3">Discard</button>
                                    <button type="submit" id="kt_customers_export_submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - New Card-->
            <!--end::Modals-->
        </div>
        <!--end::Container-->
    </div>
@endsection
