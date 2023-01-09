<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <div class="fv-row mb-7 col-md-6 d-none">
        <label class="required fs-6 fw-bold mb-2">{{ __('translation.' . 'lat') }}</label>
        <input type="text" class="form-control form-control-solid"
            placeholder="" name="lat" value="15.233123"/>
            @error('lat')
                <span class="text-danger">
                    {{$message}}
                </span>
            @enderror
    </div>
    <div class="fv-row mb-7 col-md-6 d-none">
        <label class="required fs-6 fw-bold mb-2">{{ __('translation.' . 'long') }}</label>
        <input type="text" class="form-control form-control-solid"
            placeholder=""
            name="long" value="32.233123"/>
            @error('long')
                <span class="text-danger">
                    {{$message}}
                </span>
            @enderror
    </div>
    {{-- <x:text-input class="col-md-6" name='lat' value='15.6162612' /> --}}
    <div id="map" style="height: 500px;max-width: 1000px;"></div>
</div>
