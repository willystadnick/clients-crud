@extends('layouts.app')

@section('title', 'Clients')

@section('content')
    <div class="row">
        @forelse ($clients as $client)
            <div class="col-md-4 my-3">
                @include('clients.card')
            </div>
        @empty
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        No clients found...
                    </div>
                </div>
            </div>
        @endforelse
    </div>
@endsection
