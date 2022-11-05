@extends('layouts.admin.admin')
@section('main-head', 'Admin Mangement')

@section('content')

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card p-5">
                <div class="card-body p-3">
                    <div class="row">
                        <form action="{{ route('agent.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="card p-4">
                                    <div class="row">
                                        <x:text-input class="col-md-6" name='name' />
                                        <x:text-input class="col-md-6" name='email' />
                                        <x:text-input class="col-md-6" name='password' />
                                        <x:text-input class="col-md-6" name='phone' />
                                        <x:text-input class="col-md-6" name='location' />
                                        <x:input-file  class="col-md-6" name='agents_files[]'/>
                                        <x:input-file  class="col-md-6" name='logo'/>
                                        <x:text-area  class="col-md-6" name='description'/>
                                        <x:text-input class="col-md-6" name='long'  value='15.6162612' />
                                        <x:text-input class="col-md-6" name='lat' value='15.6162612' />
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button class="btn-primary btn">
                                        Save
                                    </button>
                                    <a href="javascript::back()" class="btn btn-light-danger">
                                        Back
                                    </a>
                                </div>
                            </div>
                    </div><!-- end of tile -->
                </div><!-- end of col -->
                {{-- <div class="fv-row">
            <!--begin::Dropzone-->
            <div class="dropzone" id="kt_dropzonejs_example_1">
                <!--begin::Message-->
                <div class="dz-message needsclick">
                    <!--begin::Icon-->
                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                    <!--end::Icon-->
                    <!--begin::Info-->
                    <div class="ms-4">
                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or click to upload.</h3>
                        <span class="fs-7 fw-bold text-gray-400">Upload up to 10 files</span>
                    </div>
                    <!--end::Info-->
                </div>
            </div>
            <!--end::Dropzone-->
        </div> --}}
                </form>
            </div>
        </div><!-- end of row -->
    </div>
    </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
@endpush
