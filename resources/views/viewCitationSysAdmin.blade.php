@extends('layouts.layout_sidebar_sysAdmin')
@section('head')
@push('javascript')
<script type="text/javascript">
    $(document).ready(function () {
        $("#date_picker").jqxDateTimeInput({
            formatString: "MM/dd/yyyy",
            showTimeButton:false,
            showCalendarButton: false
        });
        $("#time_auto").jqxDateTimeInput({
            formatString: "hh:mm",
            showTimeButton:false,
            showCalendarButton: false
        });
    });

        var citaionNumber1 = Math.floor((Math.random() * 987654321) + 123456789);
        document.getElementById("citationNumber1").value = citaionNumber1;
    var citaionNumber2 = Math.floor((Math.random() * 987654321) + 123456789);
    document.getElementById("citationNumber2").value = citaionNumber2;
    var citaionNumber3 = Math.floor((Math.random() * 987654321) + 123456789);
    document.getElementById("citationNumber3").value = citaionNumber3;
    var citaionNumber4 = Math.floor((Math.random() * 987654321) + 123456789);
    document.getElementById("citationNumber4").value = citaionNumber4;
    var citaionNumber5 = Math.floor((Math.random() * 987654321) + 123456789);
    document.getElementById("citationNumber5").value = citaionNumber5;

</script>
@endpush
@stop
@section('title')
    View Citation
@endsection
@section('page')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label for="enterCitation" class="col-form-label">Citation Number<input type="text" id="enterCitation"/></label>
                        <a style="padding:10px; margin:10px;" type="button" class="btn btn-primary" href="/viewSysAdmin">View</a>
                </div>
                <div class="panel-body">
                <div class="row">
                    @section('table_headers')
                        <tr>
                            <th>Citation Number</th>
                            <th>Date/Time</th>
                            <th class="no-sort nowrap" style="width: 30px;">Action</th>
                        </tr>
                    @stop
                    @section('table_rows')
                                <tr>
                            <td><input style="pointer-events: none; background-color: #f5f8fa" type="text" id="citationNumber1"/></td>
                            <td><?php
                                date_default_timezone_set("America/New_York");
                                echo  date("m/d/Y h:i:sa");?></td>
                            <td> <a style="padding:10px; margin:10px;" type="button" class="btn btn-primary" href="/viewSysAdmin">View</a></td>
                        </tr>
                            <tr>
                                <td><input style="pointer-events: none; background-color: #f5f8fa" type="text" id="citationNumber2"/></td>
                                <td><?php
                                    date_default_timezone_set("America/New_York");
                                    echo  date("m/d/Y h:i:sa");?></td>
                                <td> <a style="padding:10px; margin:10px;" type="button" class="btn btn-primary" href="/viewSysAdmin">View</a></td>
                            </tr>
                            <tr>
                                <td><input style="pointer-events: none; background-color: #f5f8fa" type="text" id="citationNumber3"/></td>
                                <td><?php
                                    date_default_timezone_set("America/New_York");
                                    echo  date("m/d/Y h:i:sa");?></td>
                                <td> <a style="padding:10px; margin:10px;" type="button" class="btn btn-primary" href="/viewSysAdmin">View</a></td>
                            </tr>
                            <tr>
                                <td><input style="pointer-events: none; background-color: #f5f8fa" type="text" id="citationNumber4"/></td>
                                <td><?php
                                    date_default_timezone_set("America/New_York");
                                    echo  date("m/d/Y h:i:sa");?></td>
                                <td> <a style="padding:10px; margin:10px;" type="button" class="btn btn-primary" href="/viewSysAdmin">View</a></td>
                            </tr>
                            <tr>
                                <td><input style="pointer-events: none; background-color: #f5f8fa" type="text" id="citationNumber5"/></td>
                                <td><?php
                                    date_default_timezone_set("America/New_York");
                                    echo  date("m/d/Y h:i:sa");?></td>
                                <td> <a style="padding:10px; margin:10px;" type="button" class="btn btn-primary" href="/viewSysAdmin">View</a></td>
                            </tr>
                        @stop
                        @include('layouts.table')
                </div>
        </div>
    </div>
</div>
    </div></div>
@endsection