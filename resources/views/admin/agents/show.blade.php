@extends('layouts.admin.admin')
@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <div class="card p-5">
                <div class="card-body p-3">
                    {{-- <h2>{{ __('translation.agent_details')}}</h2> --}}
                    {{-- <div class="card "> --}}
                    <div class="card-header card-header-stretch">
                        <h3 class="card-title">{{ __('translation.show_agent_details') }}</h3>
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_7">
                                        {{ __('translation.agent_info') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab"
                                        href="#kt_tab_pane_8">{{ __('translation.agent_users') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_9">
                                        {{ __('translation.agent_attachment') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="kt_tab_pane_7" role="tabpanel">
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class=" text-gray-400 fw-bolder fs-7 text-uppercase ">
                                            <th class="">{{ __('translation.logo') }}</th>
                                            <th class="">{{ __('translation.name') }}</th>
                                            <th class="">{{ __('translation.phone') }}</th>
                                            <th class="">{{ __('translation.location') }}</th>
                                            <th class="">{{ __('translation.description') }}</th>
                                            <th class="">{{ __('translation.status') }}</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600">
                                        <tr>
                                            <td>
                                                <div class="text-center">
                                                    <img src="{{ $agent->logo }}" width='70' alt="">
                                                </div>
                                            </td>
                                            <td> {{ $agent->name }}</td>
                                            <td> {{ $agent->phone }}</td>
                                            <td> {{ $agent->location }}</td>
                                            <td> {{ $agent->description }}</td>
                                            <td> {!! $agent->getStatusWithSpan() !!}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_8" role="tabpanel">
                                <div class="tab-pane fade show active" id="kt_tab_pane_7" role="tabpanel">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class=" text-gray-400 fw-bolder fs-7 text-uppercase ">
                                                <th class="">{{ __('translation.logo') }}</th>
                                                <th class="">{{ __('translation.name') }}</th>
                                                <th class="">{{ __('translation.phone') }}</th>
                                                <th class="">{{ __('translation.email') }}</th>
                                                {{-- <th class="">{{ __('translation.location')}}</th>
                                        <th class="">{{__('translation.description')}}</th> --}}
                                                <th class="">{{ __('translation.status') }}</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-bold text-gray-600">
                                            @foreach ($agent->Users as $user_agent)
                                                <tr>
                                                    <td>
                                                        <div class="text-center">
                                                            <img src="{{ $agent->logo }}" width='70' alt="">
                                                        </div>
                                                    </td>
                                                    <td> {{ $user_agent->name }}</td>
                                                    <td> {{ $user_agent->phone }}</td>
                                                    <td> {{ $user_agent->email }}</td>
                                                    {{-- <td> {{$agent->description}}</td> --}}
                                                    <td> {!! $user_agent->getStatusWithSpan() !!}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="kt_tab_pane_9" role="tabpanel">
                                {{-- @if (count($agent->attachments) > 0)
                                    @foreach ($employee->attachments as $attachment)
                                        <tr>
                                            <td class=" "> {{ $attachment->employee_id }}</td>
                                            <td class=" "> {{ $employee->name }}</td>
                                            <td class=" "> {{ $attachment->file_name }}</td>
                                            <td class=" ">
                                                <div>
                                                    <a target="_blank"
                                                        href="{{ route('attchment.file', [$employee->id, $attachment->file_name]) }}"
                                                        class="btn btn-outline-primary p-1">
                                                        <i class="mdi mdi-eye" style="font-size: 20px"></i>
                                                    </a>
                                                    <a href="{{ route('attchment.download', [$employee->id, $attachment->file_name]) }}"
                                                        class="btn btn-outline-info p-1">
                                                        <i class="mdi mdi-download" style="font-size: 20px"></i>
                                                    </a>
                                                    <form method='post'
                                                        style="display:inline-block;
                                                                                                                                                        "
                                                        action='{{ route('attachment.destroy', $attachment->id) }} '>
                                                        @csrf
                                                        @method('delete')
                                                        <input type="hidden" name='emp_id' value='{{ $employee->id }}'>
                                                        <button class="btn btn-outline-danger p-1">
                                                            <i class="mdi mdi-delete" style="font-size: 20px"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('scripts')
        ;
        <script src="{{ asset('admin_assets/js/custom/index.js') }}"></script>
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        {{-- <script>
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
    </script> --}}
    @endpush
