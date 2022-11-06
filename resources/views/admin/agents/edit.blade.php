@extends('layouts.admin.admin')
@section('main-head', 'Edit Agents')

@section('content')

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card p-5">
                <div class="card-body p-3">
                    <div class="row">
                        <form action="{{ route('agent.update' , $agent->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-md-12">
                                <div class="card p-4">
                                    <div class="row">
                                        <x:text-input class="col-md-6" name='name' value='{{ $agent->name}}' />
                                        {{-- <x:text-input class="col-md-6" name='email'   value='{{  $agent ? $agent->Users[0]->email : ''}}'/> --}}
                                        {{-- <x:text-input class="col-md-6" name='password' /> --}}
                                        <x:text-input class="col-md-6" name='phone' value='{{ $agent->phone}}' />
                                        <x:text-area  class="col-md-6" name='description' value='{{ $agent->description}}'/>
                                        <x:text-input class="col-md-6" name='location'  value='{{ $agent->location}}' />

                                        <div class="fv-row mb-7 col-md-6">
                                            {{-- <label class="required fs-6 fw-bold mb-2">{{ __('translation.' . 'lat') }}</label> --}}
                                            <input type="hidden" class="form-control form-control-solid"
                                                placeholder="" name="lat" value="{{  $agent->lat ??  (old('lat') ?? '')  }}"/>
                                                @error('lat')
                                                    <span class="text-danger">
                                                        {{$message}}
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="fv-row mb-7 col-md-6">
                                            {{-- <label class="required fs-6 fw-bold mb-2">{{ __('translation.' . 'long') }}</label> --}}
                                            <input type="hidden" class="form-control form-control-solid"
                                                placeholder=""
                                                name="long" value="{{ $agent->long ??  (old('long') ?? '') }}"/>
                                                @error('long')
                                                    <span class="text-danger">
                                                        {{$message}}
                                                    </span>
                                                @enderror
                                        </div>
                                        {{-- <x:text-input class="col-md-6" name='lat' value='15.6162612' /> --}}
                                        <div id="map" style="height: 500px;width: 1000px;"></div>
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


    <script>
        // console.log();
        var currentLocation  =  {lat: {{ $agent->lat ?? '24.740691'}}, lng: {{ $agent->long ?? '46.6528521'}} };
        console.log(currentLocation);
        $("#pac-input").focusin(function() {
            $(this).val('');
        });
        $('[name="lat"]').val('');
        $('[name="long"]').val('');
        // This example adds a search box to a map, using the Google Place Autocomplete
        // feature. People can enter geographical searches. The search box will return a
        // pick list containing a mix of places and predicted search terms.
        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
        function initAutocomplete() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: currentLocation,
                zoom: 29,
                mapTypeId: 'terrain'
            });
            // move pin and current location
            infoWindow = new google.maps.InfoWindow;
            geocoder = new google.maps.Geocoder();
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    map.setCenter(pos);
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(pos),
                        map: map,
                        title: 'موقعك الحالي'
                    });
                    markers.push(marker);
                    marker.addListener('click', function() {
                        geocodeLatLng(geocoder, map, infoWindow,marker);
                    });
                    // to get current position address on load
                    google.maps.event.trigger(marker, 'click');
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                console.log('dsdsdsdsddsd');
                handleLocationError(false, infoWindow, map.getCenter());
            }
            var geocoder = new google.maps.Geocoder();
            google.maps.event.addListener(map, 'click', function(event) {
                SelectedLatLng = event.latLng;
                geocoder.geocode({
                    'latLng': event.latLng
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            deleteMarkers();
                            addMarkerRunTime(event.latLng);
                            SelectedLocation = results[0].formatted_address;
                            console.log( results[0].formatted_address);
                            splitLatLng(String(event.latLng));
                            $("#pac-input").val(results[0].formatted_address);
                        }
                    }
                });
            });
            function geocodeLatLng(geocoder, map, infowindow,markerCurrent) {
                var latlng = {lat: markerCurrent.position.lat(), lng: markerCurrent.position.lng()};
                /* $('#branch-latLng').val("("+markerCurrent.position.lat() +","+markerCurrent.position.lng()+")");*/
                $('#latitude').val(markerCurrent.position.lat());
                $('#longitude').val(markerCurrent.position.lng());
                geocoder.geocode({'location': latlng}, function(results, status) {
                    if (status === 'OK') {
                        if (results[0]) {
                            map.setZoom(13);
                            var marker = new google.maps.Marker({
                                position: latlng,
                                map: map
                            });
                            markers.push(marker);
                            infowindow.setContent(results[0].formatted_address);
                            SelectedLocation = results[0].formatted_address;
                            $("#pac-input").val(results[0].formatted_address);
                            infowindow.open(map, marker);
                        } else {
                            window.alert('No results found');
                        }
                    } else {
                        window.alert('Geocoder failed due to: ' + status);
                    }
                });
                SelectedLatLng =(markerCurrent.position.lat(),markerCurrent.position.lng());
            }
            function addMarkerRunTime(location) {
                var marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
                markers.push(marker);
            }
            function setMapOnAll(map) {
                for (var i = 0; i < markers.length; i++) {
                    markers[i].setMap(map);
                }
            }
            function clearMarkers() {
                setMapOnAll(null);
            }
            function deleteMarkers() {
                clearMarkers();
                markers = [];
            }
            // Create the search box and link it to the UI element.
            var input = document.getElementById('pac-input');
            $("#pac-input").val("أبحث هنا ");
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);
            // Bias the SearchBox results towards current map's viewport.
            map.addListener('bounds_changed', function() {
                searchBox.setBounds(map.getBounds());
            });
            var markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener('places_changed', function() {
                var places = searchBox.getPlaces();
                if (places.length == 0) {
                    return;
                }
                // Clear out the old markers.
                markers.forEach(function(marker) {
                    marker.setMap(null);
                });
                markers = [];
                // For each place, get the icon, name and location.
                var bounds = new google.maps.LatLngBounds();
                places.forEach(function(place) {
                    if (!place.geometry) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    var icon = {
                        url: place.icon,
                        size: new google.maps.Size(100, 100),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25)
                    };
                    // Create a marker for each place.
                    markers.push(new google.maps.Marker({
                        map: map,
                        icon: icon,
                        title: place.name,
                        position: place.geometry.location
                    }));
                    $('#latitude').val(place.geometry.location.lat());
                    $('#longitude').val(place.geometry.location.lng());
                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        }
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }
        function splitLatLng(latLng){
            var newString = latLng.substring(0, latLng.length-1);
            var newString2 = newString.substring(1);
            var trainindIdArray = newString2.split(',');
            var lat = trainindIdArray[0];
            var Lng  = trainindIdArray[1];
            $('[name="lat"]').val(lat);
            $('[name="long"]').val(Lng);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClrFqfOqOGTSGWpiZby6POa-AEFjGmJoM&libraries=places&callback=initAutocomplete&language=ar&region=EG
    async defer"></script>
@endpush

