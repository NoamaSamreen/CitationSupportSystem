
@extends('layouts.layout_sidebar_courtClerk')

@section('title')
    User Manual - Court Personnel
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
    </div>
</div>
@endsection