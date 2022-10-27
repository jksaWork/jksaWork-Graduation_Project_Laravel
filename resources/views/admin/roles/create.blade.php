@extends('layouts.admin.admin')

@section('content')
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
    <div class="card p-5">
        <div class="card-body p-3">
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <form method="post" action="{{ route('admin.roles.store') }}">
                    @csrf
                    {{-- @method('post') --}}
                    @include('admin.partials._errors')
                    {{--name--}}
                    {{-- <x:input --}}
                    <x:text-input name='name' class='col-md-12' />
                    <h5> permission <span class="text-danger">*</span></h5>
                    @php
                        $models = Config::get('laratrust_seeder.roles_structure.super_admin');
                    @endphp

                    <table class="table p-5">
                        <thead>
                        <tr>
                            <th> Roles</th>
                            <th> Permission </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($models as $key => $model)
                            <tr>
                                <td> {{ $key }}</td>
                                <td>
                                    <div class="animated-checkbox mx-2" style="display:inline-block;">
                                        <label class="m-0">
                                            <input type="checkbox" value="{{$key}}" name="" id='{{$key}}'
                                            onchange="markAll({{$key}})"
                                            class="all-roles mark_all">
                                            <span class="label-text">@lang('site.all')</span>
                                        </label>
                                    </div>

                                    @php
                                        //create_roles, read_roles, update_roles, delete_roles
                                            $permissionMaps = ['create', 'read', 'update', 'delete'];
                                    @endphp

                                    @foreach ($permissionMaps as $permissionMap)
                                        <div class="animated-checkbox mx-2" style="display:inline-block;">
                                            <label class="m-0">
                                                <input type="checkbox"
                                                value="{{ $permissionMap . '_' . $key }}" name="permissions[]" class="role {{$key}}">
                                                <span class="label-text">@lang('site.' . $permissionMap)</span>
                                            </label>
                                        </div>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table><!-- end of table -->

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>@lang('site.create')</button>
                    </div>

                </form><!-- end of form -->

            </div><!-- end of tile -->

        </div><!-- end of col -->

    </div><!-- end of row -->

    <script>
        function markAll(e , key){
            // alert(key);
            // console.log(e.checked);
            if(e.checked == true){
                // alert(e.value);
                document.querySelectorAll('.' + e.value ).forEach(element => {
                    element.checked = true;
                });
                // console.log(key);
            }
            else{
                document.querySelectorAll('.' + e.value).forEach(element => {
                    element.checked = false;
                });
            }
            // console.log(key);
        }
    </script>
@endsection

