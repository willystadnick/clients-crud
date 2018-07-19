<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset('uploads/clients/' . $client->id) }}" alt="{{ $client->name }}" class="img-thumbnail mb-2" style="max-height: 110px;">
            </div>
            <div class="col-md-8">
                <h4 class="card-title">{{ $client->name }}</h4>
                <h6 class="card-subtitle mb-2 text-muted"><a href="mailto:{{ $client->email }}" class="card-link">{{ $client->email }}</a></h6>
                <a href="tel:{{ $client->phone }}" class="card-link">{{ $client->phone }}</a>
                <div class="text-right mt-3">
                    <form action="{{ route('clients.destroy', $client) }}" method="post">
                        @csrf
                        @method('delete')
                        <div class="btn-group">
                            <a href="{{ route('clients.show', $client) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('clients.edit', $client) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
