{{-- @extends('layouts.admin.admin') --}}
@extends('layouts.admin.admin')
@section('main-head', __('translation.agent_offer_report'))
@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <div class="card p-5">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card p-4">
                                <div class="tile ">
                                    <div class="row mb-2">
                                    </div><!-- end of row -->
                                    @include('layouts.includes.session')
                                    <div class="card-header border-0 ">
                                        <!--begin::Card title-->
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between">
                                                <h3><b>
                                                        {{ __('translation.agent_offer_report') }}
                                                    </b>
                                                </h3>
                                                <span class="span btn btn-primary"
                                                    onclick="window.print()">{{ __('translation.print') }}</span>
                                            </div>
                                        </div>
                                        <div class="card-title">
                                            <!--begin::Search-->


                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--begin::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Toolbar-->


                                        <div class="d-flex justify-content-end align-items-center d-none"
                                            data-kt-customer-table-toolbar="selected">
                                            <div class="fw-bolder me-5">
                                                <span class="me-2"
                                                    data-kt-customer-table-select="selected_count"></span>Selected
                                            </div>
                                            <button type="button" class="btn btn-danger"
                                                data-kt-customer-table-select="delete_selected">Delete Selected</button>
                                        </div>
                                        <!--end::Group actions-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table datatable align-middle table-row-dashed fs-6 gy-5"
                                                id="roles-table" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>{{ __('translation.agent_name') }} </th>
                                                        <th>{{ __('translation.approved') }} </th>
                                                        <th>{{ __('translation.under_mainten') }} </th>
                                                        <th>{{ __('translation.rejected') }} </th>
                                                        <th>{{ __('translation.new') }} </th>
                                                        <th>{{ __('translation.total') }} </th>
                                                    </tr>
                                                    @foreach ($report as $item)
                                                        <tr>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->approved }}</td>
                                                            <td>{{ $item->under_mainten }}</td>
                                                            <td>{{ $item->rejected }}</td>
                                                            <td>{{ $item->new }}</td>
                                                            <td>{{ $item->total }}</td>
                                                        </tr>
                                                    @endforeach
                                                </thead>
                                            </table>
                                        </div><!-- end of table responsive -->
                                    </div><!-- end of col -->
                                </div><!-- end of row -->
                            </div><!-- end of tile -->
                        </div><!-- end of col -->
                    </div>
                </div><!-- end of row -->

            @endsection
