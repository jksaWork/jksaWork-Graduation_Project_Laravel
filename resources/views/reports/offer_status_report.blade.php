{{-- @extends('layouts.admin.admin') --}}
@extends('layouts.admin.admin')
@section('main-head', __('translation.offer_status_report'))
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

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table datatable align-middle table-row-dashed fs-6 gy-5"
                                                    id="roles-table" style="width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>{{ __('translation.approved') }} </th>
                                                            <th>{{ __('translation.under_mainten') }} </th>
                                                            <th>{{ __('translation.rejected') }} </th>
                                                            <th>{{ __('translation.new') }} </th>
                                                            <th>{{ __('translation.total') }} </th>
                                                        </tr>
                                                        @foreach ($report as $item)
                                                            <tr>
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
