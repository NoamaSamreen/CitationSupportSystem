@extends('layouts.layout_no_sidebar')
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
    var citaionNumber = Math.floor((Math.random() * 987654321) + 123456789);
    document.getElementById("citationNumber").value=citaionNumber;
</script>
@endpush
@stop
@section('title')
   Citation Summary
@endsection
@section('page')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label for="cittaionNumber" class="col-form-label">Citation Number <input style="pointer-events: none;" type="text" id="citationNumber"/></label>
                </div>
                <div class="panel-body">
                <div class="row">
                        <label for="date_picker" class="col-sm-3 col-form-label">Date <div style="pointer-events: none;" id="date_picker"></div></label>
                        <label for="time_auto" class="col-sm-3 col-form-label">Time <div style="pointer-events: none;" id="time_auto"></div></label>
            </div>
                    <br>
                    <div class="row">
                        <label for="dueDate" class="col-sm-6 col-form-label">Due Date  <input style="pointer-events: none;" value="12/15/2016"/></label>
                    </div>
                    <br>
                    <div class="row">
                        <label for="description" class="col-sm-6 col-form-label">Description  <input style="pointer-events: none;" value="Parking Ticket"/></label>
                    </div>
                    <br>
                    <div class="row">
                        <label for="Status" class="col-sm-6 col-form-label">Citation Status  <input style="pointer-events: none;" value="Unpaid"/></label>
                    </div>
            <div class="row">
                <div class="col-sm-6">
                    <a href="/pay" class="btn btn-primary">Pay</a>
                    <a href="/" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    </div>
@endsection