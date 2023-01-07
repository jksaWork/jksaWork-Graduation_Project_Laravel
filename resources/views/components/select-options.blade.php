<div class='{{$class}}'>
    <div class="form-group">
        <label for="" class="fs-6 fw-bold mb-2"> {{ __('translation.' . $name) }} </label>
        <select class="form-control" name="{{ $name }}" id="status">
            @foreach ($options as $option)
                <option value="{{ is_string($option) ? $option : $option->id  }}"
                    @if(is_string($option))
                        @if ($option == null)
                            selected
                        @endif
                    @else
                        @if ($option == null)
                            selected
                        @endif
                    @endif
                    >
                {{is_string($option) ? $option : $option->name }}
                </option>
            @endforeach
        </select>
    </div>
</div>
