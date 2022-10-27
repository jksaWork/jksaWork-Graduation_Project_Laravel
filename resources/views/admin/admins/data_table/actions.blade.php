{{-- @if (auth()->user()->hasPermission('update_admins')) --}}
    <a href="{{ route('users.edit', $id) }}" class="btn btn-light-info btn-sm">
       Edit </a>
{{-- @endif --}}

{{-- @if (auth()->user()->hasPermission('delete_admins')) --}}
    <form action="{{ route('admin.admin.destroy', $id) }}" class="my-1 my-xl-0" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-light-danger btn-sm delete"><i class="fa fa-trash"></i> @lang('site.delete')</button>
    </form>
{{-- @endif --}}
