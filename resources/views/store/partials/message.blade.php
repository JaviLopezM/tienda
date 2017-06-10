@if(\Session::has('message'))
<div class="alert alert-info alert-dismissible text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h2><strong><i class="fa fa-info-circle"></i></strong> {{ \Session::get('message') }}</h2>
</div>
@endif

@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@if(session('alert'))
    <div class="alert alert-danger">
        {{ session('alert') }}
    </div>
@endif