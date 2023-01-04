{{-- @extends('layouts.admin.admin') --}}
@extends(auth()->guard('admin')->check() ?'layouts.admin.admin':'layouts.agents.agent_layouts')

@section('main-head', __('translation.show_agent_details'))
@section('content')
    <div class="post d-flex flex-column-fluid w-100" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <div class="card p-5">
                <div class="card-body p-3">
                    {{-- <h2>{{ __('translation.agent_details')}}</h2> --}}
                    {{-- <div class="card "> --}}
                    <div class="card-header card-header-stretch">
                        <h3 class="card-title">{{ __('translation.show_offer_details') }}</h3>
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_7">
                                        {{ __('translation.offer_info') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-bs-toggle="tab" href="#kt_tab_pane_4">
                                        {{ __('translation.offer_status_and_ownerss') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_9">
                                        {{ __('translation.offers_image') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="kt_tab_pane_7" role="tabpanel">
                                <div>
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class=" text-gray-400 fw-bolder fs-7 text-uppercase ">
                                                <th class="">{{ __('translation.main_image') }}</th>
                                                <th class="">{{ __('translation.service') }}</th>
                                                <th class="">{{ __('translation.title') }}</th>
                                                <th class="">{{ __('translation.short_desc') }}</th>
                                                <th class="">{{ __('translation.areas') }}</th>
                                                <th class="">{{ __('translation.type_idd') }}</th>
                                                <th class="">{{ __('translation.location') }}</th>
                                                <th class="">{{ __('translation.offer_status') }}</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-bold text-gray-600">
                                            <tr>
                                                <td>
                                                    <div class="text-center">
                                                        <img src="{{ $offer->main_image }}" width='70' alt="">
                                                    </div>
                                                </td>
                                                <td> {{ $offer->Service->name }}</td>
                                                <td> {{ $offer->title }}</td>
                                                <td> {{ $offer->short_desc }}</td>
                                                <td> {{ $offer->Area->name }}</td>
                                                <td> {{ $offer->Type->name }}</td>
                                                <td> {{ $offer->location }}</td>
                                                {{-- <td> {{ $offer->description }}</td> --}}
                                                <td> {!! $offer->getStatusWithSpan() !!}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <h1 class='text-gray-900 text-hover-primary fs-2 fw-bolder me-1 my-5'>
                                        {{ __('translation.location_in_map') }}</h1>
                                    @php
                                        $link = "https://maps.googleapis.com/maps/api/staticmap?center=15.599766380508013,32.52571397310215&zoom=12&size=3000x300&maptype=roadmap
                                                                &markers=color:red%7Clabel:L%7C{$offer->lat},{$offer->long}
                                                                &key=AIzaSyClrFqfOqOGTSGWpiZby6POa-AEFjGmJoM";
                                    @endphp
                                    {{-- @dd($link) --}}
                                    <div class="col-md-12">
                                        <a href="{{ 'https://www.google.com/maps/@' . $offer->lat . ',' . $offer->long . ',14z' }}"
                                            target="_blank" rel="noopener noreferrer">
                                            <img src="{{ $link }}"
                                                style="max-width:100%; min-width:99%; max-height:300px;" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show active" id="kt_tab_pane_4" role="tabpanel">
                                <div>
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class=" text-gray-400 fw-bolder fs-7 text-uppercase ">
                                                <th class="">{{ __('translation.agent') }}</th>
                                                <th class="">{{ __('translation.owner') }}</th>
                                                <th class="">{{ __('translation.client') }}</th>
                                                <th class="">{{ __('translation.status') }}</th>
                                                <th class="">{{ __('translation.sign_it_to_new_client') }}</th>
                                                <th class="">{{ __('translation.singit_to_new_status') }}</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-bold text-gray-600">
                                            <tr>
                                                <td> {{ $offer->Agent->name  ?? '-'}}</td>
                                                <td> {{ $offer->Owner->name  ?? '-'}}</td>
                                                <td> {{ $offer->Client->name ?? '-' }}</td>
                                                <td> {!! $offer->GetOfferStatusWithSpan() !!}</td>
                                                <td>
                                                    <form action="{{ route('asing_to_cleint', $offer->id)}}" method="get">
                                                        <div class="form-group">
                                                            <label for=""></label>
                                                            <select class="form-control" name="offer_client" id="status" onchange="this.form.submit()">
                                                                @foreach ($clients as $status => $client )
                                                                    <option value="{{$client->id}}">{{$client->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{ route('offers.show' , $offer)}}" method="get">
                                                        <div class="form-group">
                                                            <label for=""></label>
                                                            <select class="form-control" name="offer_status" id="status" onchange="this.form.submit()">
                                                                @foreach ($offer->statusBadge as $status => $Badge )
                                                                    <option value="{{$status}}">{{__('translation.' .$status)}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                            </div>


                            <div class="tab-pane fade" id="kt_tab_pane_9" role="tabpanel">
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class=" text-gray-400 fw-bolder fs-7 text-uppercase ">
                                            <th class="">{{ __('translation.no') }}</th>
                                            <th class="">{{ __('translation.file') }}</th>
                                            <th class="">{{ __('translation.name') }}</th>
                                            <th class="">{{ __('translation.action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($offer->attachments) > 0)
                                            @foreach ($offer->attachments as $attachment)
                                                <tr>
                                                    <td class=" "> {{ $attachment->id }}</td>
                                                    <td class=" "> <img
                                                            src="{{$attachment->url }}"
                                                            width="80" alt=""></td>
                                                    <td class=" "> {{ $offer->title }}</td>
                                                    <td class=" ">
                                                        <div style="">
                                                            <a href="{{ route('show_attachments', $attachment->id) }}"
                                                                class="btn btn-light-primary btn-sm btn-icon">
                                                                <i class="fa fa-eye"></i>
                                                            </a>

                                                            <a href="{{ route('download_attachments', $attachment->id) }}"
                                                                class="btn btn-light-info btn-sm btn-icon">
                                                                <i class="fa fa-download"></i>
                                                            </a>

                                                            {{-- <a href="{{ route('agent.show', ['status' => true , 'agent' => $attachment->id]) }}" class="btn btn-light-success btn-sm btn-icon">
                                                            <i class="fa fa-toggle-on"></i>
                                                             </a> --}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                    <div>
                                        <form action="{{ route('attachments.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="agent_id" value='{{ $offer->id }}'>
                                            <x:input-file class="col-12" name='attachments[]' />
                                            <button class="btn btn-light-primary mt-3">Attach </button>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('scripts')
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
