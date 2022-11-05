@extends('layouts.admin.admin')
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
                        <div class="col-md-12">
                            @if (auth()->user()->hasPermission('read_roles'))
                            <a href="{{ route('admin.admin.create') }}" class="btn btn-primary"><i
                                    class="fa fa-plus"></i>
                                @lang('site.create')</a>
                            @endif @if (auth()->user()->hasPermission('delete_roles'))
                            <form method="post" action="{{ route('admin.roles.bulk_delete') }}"
                                style="display: inline-block;">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="record_ids" id="record-ids">
                                <button type="submit" class="btn btn-danger" id="bulk-delete" disabled="true"><i
                                        class="fa fa-trash"></i> @lang('site.bulk_delete')</button>
                            </form><!-- end of form -->
                            @endif
                        </div>
                    </div><!-- end of row -->
                    @include('layouts.includes.session')
                    <div class="card-header border-0 ">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative ">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" id="data-table-search" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="{{__('translation.search_on_agents')}}">
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
                        <a href="{{ route('agent.create')}}" type="button" class="btn btn-light-primary"> {{__('translation.add_agent')}} </a>
                        <!--end::Add customer-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Group actions-->
                    <div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
                        <div class="fw-bolder me-5">
                            <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected
                        </div>
                        <button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete Selected</button>
                    </div>
                    <!--end::Group actions-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table datatable align-middle table-row-dashed fs-6 gy-5" id="roles-table" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <div class="animated-checkbox">
                                                    <label class="m-0">
                                                        <input type="checkbox" id="record__select-all">
                                                        <span class="label-text"></span>
                                                    </label>
                                                </div>
                                            </th>
                                            <th class="text-center">{{__('translation.logo')}}</th>
                                            <th class="text-center">{{__('translation.name')}} </th>
                                            <th class="text-center">{{__('translation.phone')}}</th>
                                            {{-- <th class="text-center">{{__('translation.roles')}}</th> --}}
                                            <th class="text-center">{{__('translation.location')}}</th>
                                            <th class="text-center">{{__('translation.description')}}</th>
                                            <th class="text-center">{{__('translation.status')}}</th>
                                            <th class="text-center">{{__('translation.date')}}</th>
                                            <th class="text-center">{{__('translation.action')}}</th>
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

    @endsection

    @push('scripts');
    <script src="{{ asset('admin_assets/js/custom/index.js')}}"></script>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script>
        // alert('worgiing');

        // let role;
        let rolesTable = $('#roles-table').DataTable({
            dom: "tiplr",
            serverSide: true,
            processing: true,
            "language": {
                "url": "{{ asset('admin_assets/datatable-lang/' . app()->getLocale() . '.json') }}"
            },
            ajax: {
                url: '{{ route('agents.data') }}',
                // data : function (d) {
                //     d.role_id = role;
                // },
            },
            columns: [
                {data: 'record_select', name: 'record_select', searchable: false, sortable: false, width: '1%'},
                {data: 'logo', name: 'logo' },
                {data: 'name', name: 'name' },
                {data: 'phone', name: 'phone'},
                {data: 'location', name: 'location'},
                {data: 'description', name: 'description'},
                {data: 'status', name: 'status', searchable: false},
                {data: 'created_at', name: 'created_at', searchable: false},
                {data: 'actions', name: 'actions', searchable: false, sortable: false, width: '20%'},
            ],
            order: [[3, 'desc']],
            drawCallback: function (settings) {
                $('.record__select').prop('checked', false);
                $('#record__select-all').prop('checked', false);
                $('#record-ids').val();
                $('#bulk-delete').attr('disabled', true);
            }
        });

        $('#data-table-search').keyup(function () {
            rolesTable.search(this.value).draw();
        });
        // $('#roles').on('change' , function(){
        //     role = $(this).val();
        //     rolesTable.ajax.reload();
        // });
    </script>

    @endpush
