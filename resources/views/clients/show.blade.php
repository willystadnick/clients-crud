@extends('layouts.app')

@section('title', 'Clients')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('clients.card', ['actions' => ['back', 'edit', 'delete'], 'maxheight' => '360'])
        </div>
    </div>
</div>
@endsection
