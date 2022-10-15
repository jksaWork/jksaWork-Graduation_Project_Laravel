<div>
    @if (session()->has('success'))
        {{ session()->forget('success') }}
        <div class="alert alert-success">
                <h1>
                    Inser Done Succuess
                </h1>             
        </div>
        <script>
            toastr.options = {
                "closeButton": true,
                "debug": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toastr-top-right",
                "preventDuplicates": false,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr.success("Are you the six fingered man?");
        </script>
    @elseif (session()->has('error'))
        {{ session()->forget('error') }}
        <div class="alert alert-danger">
            {{-- <div class="h1"> --}}
                <h1 class="mb-1 text-dark">{{ session()->get('error')}}</h1>
            {{-- </div> --}}
        </div>
        <script>
            toastr.options = {
                "closeButton": true,
                "debug": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toastr-top-right",
                "preventDuplicates": false,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr.error("New order has been placed!");
        </script>
    @endif
</div>
