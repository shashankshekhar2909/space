@extends('main-layout.master')
@section('pg-name','Sign Up')
@section('content')
<div class="container">
<h2>Sign Up</h2>
    <div class="row">
        <div class="col-md-6"><i style="color:teal" class="fa fa-user-plus fa-5x" aria-hidden="true"></i></div>
        <div class="col-md-6">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign Up</h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <fieldset>
                            <div class="form-group">
                                <label>Name</label><input class="form-control" placeholder="Your Name" name="name" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <label>E-mail</label><input class="form-control" placeholder="Your E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <label>Contact Number</label><input class="form-control" placeholder="Your Contact Number" name="contact" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <label>Password</label><input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <a href="#" class="btn btn-lg btn-info">Sign Up</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
