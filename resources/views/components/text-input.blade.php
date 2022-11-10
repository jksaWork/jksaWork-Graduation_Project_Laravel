<div class="fv-row mb-7 {{$class}} {{!$hidden ?: 'd-none'}}">
    <label class="required fs-6 fw-bold mb-2">{{ __('translation.' .$name) }}</label>
    <input type="text" class="form-control form-control-solid"
        placeholder="" name="{{$name}}" value="{{ ( $value ?? old($name) )}}" {{!$hidden ?: 'hidden'}}/>
        @error($name)
            <span class="text-danger">
                {{$message}}
            </span>
        @enderror
</div>
