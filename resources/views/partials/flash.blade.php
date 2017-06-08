@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
@if(session('message'))
    <div class="alert alert-warning">
        {{ session('message') }}
    </div>
@endif