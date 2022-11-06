<div class='{{ $class }}' id='kt_dropzonejs_example_1'>
    <label class="required fs-6 fw-bold mb-2">{{ __('translation.'. $name) }}</label>
    <textarea name="{{$name}}" id="" cols="30" rows="10" class="form-control form-control-solid">{{ $value ?? (old($name) ?? '')}}</textarea>
    @error($name)
    <span class="text-danger">
        {{$message}}
    </span>
    @enderror
</div>
