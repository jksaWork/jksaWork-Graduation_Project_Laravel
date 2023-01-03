{{-- @extends('layouts.admin.admin') --}}
@extends('layouts.admin.admin')
@section('main-head', __('translation.system_usage_monthly'))
@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <div class="card p-5">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-md-12">
                            @include('layouts.includes.session')

                            <div class="card p-4">
                                <div class="tile ">
                                    <div class="row mb-2">
                                    </div><!-- end of row -->

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="d-flex justify-content-between">
                                                <h4>
                                                    <b>{{ __('translation.area_report') }}</b>
                                                </h4>
                                                <span class="btn btn-primary" onclick="window.print()">
                                                    {{ __('translation.print') }}</span>

                                            </div>


                                        </div>
                                        <div class="table-responsive">
                                            <table class="table datatable align-middle table-row-dashed fs-6 gy-5"
                                                id="roles-table" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <h3>
                                                                                <b>
                                                                                    {{ __('translation.service_name') }}
                                                                                </b>
                                                                            </h3>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <h3><b>{{ __('translation.number') }}</b>
                                                                            </h3>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </th>
                                                        @foreach ($report_service as $item)
                                                            <th>
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th> {{ $item->name }} </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>{{ $item->num }} </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </th>
                                                        @endforeach
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div><!-- end of table responsive -->
                                    </div><!-- end of col -->
                                </div><!-- end of row -->
                            </div><!-- end of tile -->

                        </div><!-- end of col -->

                    </div>

                </div><!-- end of row -->
                <div class="card p-4 mt-5">
                    <div class="tile ">
                        <div class="row mb-2">
                        </div><!-- end of row -->

                        <div class="row">

                            <div class="col-md-12">
                                <div class="d-flex justify-content-between">
                                    <h4>
                                        <b>{{ __('translation.service_report') }}</b>
                                    </h4>
                                    <span class="btn btn-primary" onclick="window.print()">
                                        {{ __('translation.print') }}</span>

                                </div>


                            </div>
                            <div class="table-responsive">
                                <table class="table datatable align-middle table-row-dashed fs-6 gy-5" id="roles-table"
                                    style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <h3>
                                                                    <b>
                                                                        {{ __('translation.service_name') }}
                                                                    </b>
                                                                </h3>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h3><b>{{ __('translation.number') }}</b>
                                                                </h3>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </th>
                                            @foreach ($report_area as $item)
                                                <th>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th> {{ $item->name }} </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ $item->num }} </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                </table>
                            </div><!-- end of table responsive -->
                        </div><!-- end of col -->
                    </div><!-- end of row -->
                </div>
            @endsection
