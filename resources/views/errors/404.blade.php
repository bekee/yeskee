@extends('layouts.error')



@section('title')
    Error 404
@stop


@section('heading')

@stop

@section('login-page')
    fixed-left full-content internal-error
@stop
<!-- Begin page -->
<div class="container">
    <div class="full-content-center animated flipInX">
        <h1>404</h1>
        <h2>The page you are looking for is definitely not this!</h2><br>
        <p class="text-lightblue-2">You better try our awesome search:</p>
        <div class="row">
            <div class="icon-added input-group col-sm-8 col-sm-offset-2">
                <i class="fa fa-search"></i>
                <input type="text" class="form-control">
                <span class="input-group-btn">
				        <button class="btn btn-success" type="button">Search</button>
				      </span>
            </div>
        </div><br>
        <a class="btn btn-primary btn-sm" href="index.html"><i class="fa fa-angle-left"></i> Back to Dashboard</a>
    </div>
</div>
<!-- End of page -->