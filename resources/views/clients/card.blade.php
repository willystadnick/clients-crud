<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset('uploads/clients/' . $client->id) }}" alt="{{ $client->name }}" class="img-thumbnail" style="max-height:{{ $maxheight }}px;">
            </div>
            <div class="col-md-8">
                <h4 class="card-title">{{ $client->name }}</h4>
                <h6 class="card-subtitle mb-2 text-muted"><a href="mailto:{{ $client->email }}" class="card-link">{{ $client->email }}</a></h6>
                <a href="tel:{{ $client->phone }}" class="card-link">{{ $client->phone }}</a>
                <div class="text-right mt-3">
                    @include('clients.actions')
                </div>
            </div>
        </div>
    </div>
</div>
