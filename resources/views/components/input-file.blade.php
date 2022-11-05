    <div class='{{ $class }}' id='kt_dropzonejs_example_1'>
        <label class="required fs-6 fw-bold mb-2">{{ __('translation.'. $name) }}</label>
        <input type="file"  class="dropify form-control form-control-solid" multiple
            {{-- data-default-file="{{ URL::asset('1.jpg') }}" --}}
            data-height="200" name='{{$name}}' />
            @error($name)
            <span class="text-danger">
                {{$message}}
            </span>
            @enderror
    </div>
