<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <div class="fv-row mb-7 col-md-6">
        <label class="required fs-6 fw-bold mb-2">{{ __('translation.' . 'lat') }}</label>
        <input type="hidden" class="form-control form-control-solid"
            placeholder="" name="lat" value="{{  old('lat') ?? '' }}"/>
            @error('lat')
                <span class="text-danger">
                    {{$message}}
                </span>
            @enderror
    </div>
    <div class="fv-row mb-7 col-md-6">
        <label class="required fs-6 fw-bold mb-2">{{ __('translation.' . 'long') }}</label>
        <input type="hidden" class="form-control form-control-solid"
            placeholder=""
            name="long" value="{{  old('long') ?? '' }}"/>
            @error('long')
                <span class="text-danger">
                    {{$message}}
                </span>
            @enderror
    </div>
    {{-- <x:text-input class="col-md-6" name='lat' value='15.6162612' /> --}}
    <div id="map" style="height: 500px;width: 1000px;"></div>
</div>
