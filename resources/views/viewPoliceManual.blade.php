
@extends('layouts.layout_sidebar')

@section('title')
    User Manual - Police Officers
@endsection
@section('page')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">

                <div class="panel-body">
                    @section('table_headers')
                        <tr>
                            <th>Privileges</th>
                        </tr>
                    @stop
                    @section('table_rows')
                        <tr>
                            <td>Create Citations</td>
                        </tr>
                        <tr>
                            <td>View Citations</td>
                        </tr>
                        <tr>
                            <td>Master list of Citations</td>
                        </tr>
                        <tr>
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