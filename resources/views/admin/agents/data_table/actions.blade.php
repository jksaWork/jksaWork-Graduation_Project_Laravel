{{-- @if (auth()->user()->hasPermission('update_admins')) --}}
<div style="min-width: 200px">
    <a href="{{ route('agent.show', $id) }}" class="btn btn-light-primary btn-sm btn-icon">
        <i class="fa fa-eye"></i>
    </a>

    <a href="{{ route('agent.edit', $id) }}" class="btn btn-light-info btn-sm btn-icon">
        <i class="fa fa-edit"></i>
    </a>

        <a href="{{ route('agent.show', ['status' => true , 'agent' => $id]) }}" class="btn btn-light-success btn-sm btn-icon">
            <i class="fa fa-toggle-on"></i>
             </a>
{{-- @endif --}}

{{-- @if (auth()->user()->hasPermission('delete_admins')) --}}
    <form action="{{ route('agent.destroy', $id) }}" class="my-1 my-xl-0" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-light-danger btn-sm delete btn-icon"><i class="fa fa-trash"></i></button>
    </form>
</div>
{{-- @endif --}}
