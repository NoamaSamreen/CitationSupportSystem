
@extends('layouts.layout_sidebar_sysAdmin')

@section('title')
Create Account
@endsection

@section('page')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Enter Details Below</div>

                <div class="panel-body">
                    <div class="row">
                        <label for="First Name" class="col-sm-6 col-form-label">First Name<input id="First Name" type="text" class="form-control"/></label>
                    </div>
                    <div class="row">
                        <label for="Last Name" class="col-sm-6 col-form-label">Last Name<input id="Last Name" type="text" class="form-control"/></label>
                    </div>
                    <div class="row">
                        <label for="email" class="col-sm-6 col-form-label">E-mail<input id="Email" type="text" class="form-control"/></label>
                    </div>
                    <div class="row">
                        <label for="password" class="col-sm-6 col-form-label">Password<input id="Password" type="text" class="form-control"/></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="pull-left col-md-5">
                    <a data-toggle="modal" data-target="#flagModal"  style="padding:10px; margin:10px;" type="button" class="btn btn-primary">Create</a>
                    <a style="padding:10px; margin:10px;" class="btn btn-danger" href="/home">Cancel</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="flagModal" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="helpModalLabel">Account Created Successfully!</h3>
                    <p> Account details has been sent to the e-mail provided.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection