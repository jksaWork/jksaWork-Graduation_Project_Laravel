<!DOCTYPE html>
<html lang="en">
{{-- @dd('heelo'); --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Wasil Project Map</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }} rel=" stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    @if (app()->getLocale() == 'en')
        <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    @endif

    {{-- End Google fonts --}}
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style-rtl.css') }}">
    <!-- END Custom CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500&family=El+Messiri&display=swap" rel="stylesheet">
        <style>
           * {
                font-family: 'Cairo', sans-serif;
                font-family: 'El Messiri', sans-serif;
            }
        </style>
    <style>
        #map {
            height: 100%;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #active_user_list {
            z-index: 1000;
            background: #fff;
            width: 300px;
            height: 70%;
            position: absolute;
            top: 50%;
            left: 50px;
            transform: translate(0%, -50%);
            border-radius: 20px;
            padding: 20px;
            overflow-y: scroll;
            cursor: pointer;
        }

        #drivers_list {
            z-index: 1000;
            background: #fff;
            width: 250px;
            height: 50%;
            position: absolute;
            top: 60%;
            right: 50px;
            transform: translate(0%, -50%);
            border-radius: 20px;
            padding: 20px;
            overflow-y: scroll;
            cursor: pointer;
        }

        #back_to_dashboard {
            z-index: 1000;
            background: #fff;
            width: 250px;
            height: 50px;
            position: absolute;
            top: 20%;
            right: 50px;
            transform: translate(0%, -50%);
            border-radius: 20px;
            padding: 10px 20px;
            overflow-y: scroll;
            cursor: pointer;
        }

        /* @media (min ) */
        @media (max-width: 768px) {
            #back_to_dashboard {
                /* width: 200; */
                display: inline-block;
                width: auto;
            }

            /* #back_to_dashboard  h3 {
                font-size: 15px;
            } */
            #drivers_list {
                display: none;
            }

            #active_user_list {
                display: none;
            }
        }

        ::-webkit-scrollbar {
            width: 2px;
            height: 2px
        }

        ::-webkit-scrollbar-button {
            background: transparent
        }

        ::-webkit-scrollbar-track-piece {
            background: transparent
        }

        ::-webkit-scrollbar-thumb {
            background: transparent
        }


        .lds-roller {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }

        .lds-roller div {
            animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
            transform-origin: 40px 40px;
        }

        .lds-roller div:after {
            content: " ";
            display: block;
            position: absolute;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #28d094;
            margin: -4px 0 0 -4px;
        }

        .lds-roller div:nth-child(1) {
            animation-delay: -0.036s;
        }

        .lds-roller div:nth-child(1):after {
            top: 63px;
            left: 63px;
        }

        .lds-roller div:nth-child(2) {
            animation-delay: -0.072s;
        }

        .lds-roller div:nth-child(2):after {
            top: 68px;
            left: 56px;
        }

        .lds-roller div:nth-child(3) {
            animation-delay: -0.108s;
        }

        .lds-roller div:nth-child(3):after {
            top: 71px;
            left: 48px;
        }

        .lds-roller div:nth-child(4) {
            animation-delay: -0.144s;
        }

        .lds-roller div:nth-child(4):after {
            top: 72px;
            left: 40px;
        }

        .lds-roller div:nth-child(5) {
            animation-delay: -0.18s;
        }

        .lds-roller div:nth-child(5):after {
            top: 71px;
            left: 32px;
        }

        .lds-roller div:nth-child(6) {
            animation-delay: -0.216s;
        }

        .lds-roller div:nth-child(6):after {
            top: 68px;
            left: 24px;
        }

        .lds-roller div:nth-child(7) {
            animation-delay: -0.252s;
        }

        .lds-roller div:nth-child(7):after {
            top: 63px;
            left: 17px;
        }

        .lds-roller div:nth-child(8) {
            animation-delay: -0.288s;
        }

        .lds-roller div:nth-child(8):after {
            top: 56px;
            left: 12px;
        }

        @keyframes lds-roller {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .loader_full {
            cursor: pointer;
            position: absolute;
            top: 0;
            left: 0;
            background: white;
            width: 100%;
            height: 100%;
            z-index: 1001;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 1.5s all linear;
            opacity: 1;
        }

        .fade_linear {
            opacity: 0;
        }

    </style>
</head>

<body>
    <div class="loader_full">
        <div class="lds-roller">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div id='active_user_list'>

        <h3 class='mb-2'>{{ __('translation.orders.list') }}</h3>
        @foreach ($orders as $key => $order)
            <div class="order_foreach mt-1 " style='padding:3px; border-bottom: 1px solid #ccc '
                onclick="takeCamaraTolaocation({{ $key }})">
                <div class="row" style="justify-content:space-between ">
                    <div class="order_container">
                        <h4>{{ $order->title }} | ({{ $order->id }})</h4>
                        <div> <span>{{ $order->service->name }} -
                                {{ $order->price }}</span>
                            <span>
                                {{-- {{ $order->payment_method }} --}}
                            </span>
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <div class="">
                            <div class="text-center">
                                <span
                                    class="badge @switch($order->status)
                                                @case('pending')
                                                    badge-warning
                                                    @break
                                                @case('inProgress')
                                                    badge-primary
                                                    @break
                                                @default
                                            @endswitch ">{{ __('translation.' . $order->status) }}</span>

                            </div>
                            <div>
                                {{ $order->order_date }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div id="map">
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
