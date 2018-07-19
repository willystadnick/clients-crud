@foreach ([
    'primary',
    'secondary',
    'success',
    'danger',
    'warning',
    'info',
    'light',
    'dark',
] as $type)
    @if (Session::has($type))
        <div class="alert alert-dismissible alert-{{ $type }}">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ Session::get($type) }}
        </div>
    @endif
@endforeach
