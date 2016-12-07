
@extends('layouts.layout_sidebar_sysAdmin')

@section('title')
    Assign Roles
@endsection

@section('page')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">

                <div class="panel-body">
                    <div class="row">
                        <label for="firstName" class="col-sm-6 col-form-label">First Name<input id="firstName" type="text" class="form-control"/></label>
                    </div>
                    <div class="row">
                        <label for="lastName" class="col-sm-6 col-form-label">Last Name<input id="lastName" type="text" class="form-control"/></label>
                    </div>
                    <div class="row">
                        <label for="email" class="col-sm-6 col-form-label">e-mail<input id="email" type="text" class="form-control"/></label>
                    </div>
                        <div class="row dropdown">
                            <label for="roles"></label>
                            <input id="roles" class="dropdown-toggle" type="button" data-toggle="dropdown">
                            <ul class="dropdown-menu">
                                <li><a href="#">Police Officer</a></li>
                                <li><a href="#">Court Personnel</a></li>
                                <li><a href="#">System Administrator</a></li>
                            </ul>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="pull-left col-md-5">
                    <a data-toggle="modal" data-target="#flagModal" style="padding:10px; margin:10px;" type="button" class="btn btn-primary">Save</a>
                    <a style="padding:10px; margin:10px;" class="btn btn-danger" href="/sysAdminHome">Cancel</a>
                </div>
            </div>
                </div>
            </div>
    <!-- modal -->
    <div class="modal fade" id="flagModal" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="helpModalLabel">Citation Saved Successfully!</h3>
                </div>
            </div>
        </div>
    </div>
        </div>
@endsection