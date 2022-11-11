{{-- @extends('layouts.admin.admin') --}}
@extends(auth()->guard('admin')->check() ?'layouts.admin.admin':'layouts.agents.agent_layouts')
@section('main-head' ,  __('translation.users_mangement'))
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> search </label>
                                <input type="text" id="data-table-search" class="form-control" autofocus
                                    placeholder="@lang('site.search')">
                            </div>
                        </div>
                    @if(auth()->guard('admin')->check())
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Roles</label>
                                <select class="form-control" name="roles" id="roles">
                                    @foreach ($roles as $role )
                                    <option value="{{$role->id}}"> {{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @endif
                    </div><!-- end of row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table datatable  align-middle table-row-dashed fs-6 gy-5" id="roles-table" style="width: 100%;">
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
                                            <th class="text-center">{{__('translation.name')}}</th>
                                            <th class="text-center">{{__('translation.email')}} </th>
                                            <th class="text-center">{{__('translation.phone')}}</th>
                                            @admin
                                            <th class="text-center">{{__('translation.roles')}}</th>
                                            @endAdmin
                                            {{-- <th class="text-center">{{__('translation.roles')}}</th> --}}

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
        var  isadmin = @json(auth()->guard('admin')->check());
        console.log(isadmin);

        var usersColumns = [
                {data: 'record_select', name: 'record_select', searchable: false, sortable: false, width: '1%'},
                {data: 'name', name: 'name' },
                {data: 'email', name: 'email'},
                {data: 'phone', name: 'phone'},
                {data: 'roles', name: 'roles', searchable: false},
                {data: 'status', name: 'roles', searchable: false},
                {data: 'created_at', name: 'created_at', searchable: false},
                {data: 'actions', name: 'actions', searchable: false, sortable: false, width: '20%'},
            ];
            usersColumns = isadmin ? usersColumns : usersColumns.filter(el => el.data !== 'roles');
        console.log(usersColumns);
            let role;
        let rolesTable = $('#roles-table').DataTable({
            dom: "tiplr",
            serverSide: true,
            processing: true,
            "language": {
                "url": "{{ asset('admin_assets/datatable-lang/' . app()->getLocale() . '.json') }}"
            },
            ajax: {
                url: '{{ route('users.data') }}',
                data : function (d) {
                    d.role_id = role;
                },
            },
            columns: usersColumns,
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
        $('#roles').on('change' , function(){
            role = $(this).val();
            rolesTable.ajax.reload();
        });
    </script>

    @endpush
