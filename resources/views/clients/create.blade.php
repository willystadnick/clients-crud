@extends('layouts.app')

@section('title', 'Create Client')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('clients.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <fieldset>
                            <legend>Create Client</legend>
                            @include('clients.fields')
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
