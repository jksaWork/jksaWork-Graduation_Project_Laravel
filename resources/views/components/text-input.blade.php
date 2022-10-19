<div class="fv-row mb-7 {{$class}}">
    <label class="required fs-6 fw-bold mb-2">{{ $name }}</label>
    <input type="text" class="form-control form-control-solid"
        placeholder="" name="{{$name}}" value="{{ old($name) }}"/>
        @error($name)
            <span class="text-danger">
                {{$message}}
            </span>
        @enderror
</div>