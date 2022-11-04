{{-- @if (auth()->user()->hasPermission('update_admins')) --}}
    <div style="min-width: 300px">
        <a href="{{ route('users.edit', $id) }}" class="btn btn-light-info btn-sm">
            {{ __('translation.edit') }} </a>

            <a href="{{ route('users.show', ['status' => true , 'user' => $id]) }}" class="btn btn-light-success btn-sm">
                {{ __('translation.change_status') }} </a>
    {{-- @endif --}}

    {{-- @if (auth()->user()->hasPermission('delete_admins')) --}}
        <form action="{{ route('users.destroy', $id) }}" class="my-1 my-xl-0" method="post" style="display: inline-block;">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-light-danger btn-sm delete"><i class="fa fa-trash"></i>{{ __('translation.delete') }}</button>
        </form>
    </div>
{{-- @endif --}}
