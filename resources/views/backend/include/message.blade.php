@if(count($errors->all()))
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
@endif

@if(session('alert'))
    <div class="alert alert-success" ><i class="fa fa-check-circle"></i> &nbsp;{{session('alert')}}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger"><i class="fa fa-times-circle"></i> &nbsp; {{session('error')}}</div>
@endif