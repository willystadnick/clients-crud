@if (in_array('delete', $actions))
    <form action="{{ route('clients.destroy', $client) }}" method="post">
        @csrf
        @method('delete')
        <div class="btn-group">
@endif

@if (in_array('back', $actions))
            <a href="javascript:history.go(-1)" class="btn btn-info btn-sm">Back</a>
@endif

@if (in_array('view', $actions))
            <a href="{{ route('clients.show', $client) }}" class="btn btn-info btn-sm">View</a>
@endif

@if (in_array('edit', $actions))
            <a href="{{ route('clients.edit', $client) }}" class="btn btn-primary btn-sm">Edit</a>
@endif

@if (in_array('delete', $actions))
            <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
        </div>
    </form>
@endif
