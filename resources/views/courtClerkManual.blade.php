
@extends('layouts.layout_sidebar_sysAdmin')

@section('title')
    Privileges of a Court Clerk
@endsection

@section('page')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    @section('table_headers')
                        <tr>
                            <th><input type="checkbox"/></th>
                            <th>Privileges</th>
                        </tr>
                    @stop
                        @section('table_rows')
                            <tr>
                                <td><input type="checkbox"/></td>
                                <td>Edit Citations</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"/></td>
                                <td>Close Citations</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"/></td>
                                <td>View Citations</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"/></td>
                                <td>Master list of Citations</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"/></td>
                                <td>View User Manuals</td>
                            </tr>
                        @stop
                    @include('layouts.table')
                </div>
            </div>
        </div>
        <div class="row">
            <div class="pull-left col-md-5">
                <a data-toggle="modal" data-target="#flagModal" style="padding:10px; margin:10px;" type="button" class="btn btn-primary">Save</a>
                <a style="padding:10px; margin:10px;" class="btn btn-danger" href="/home">Cancel</a>
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
                    <h3 class="modal-title" id="helpModalLabel">Privileges Saved Successfully!</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection