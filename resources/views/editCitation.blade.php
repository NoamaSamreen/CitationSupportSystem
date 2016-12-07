@extends('layouts.layout_sidebar')
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
        $("#DOB").jqxDateTimeInput({
            formatString: "MM/dd/yyyy",
            showTimeButton:false,
            showCalendarButton:true
        });
    });
    var citaionNumber = Math.floor((Math.random() * 987654321) + 123456789);
    document.getElementById("citationNumber").value=citaionNumber;
</script>
@endpush
@stop
@section('title')
    Edit Citation
@endsection
@section('page')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label for="cittaionNumber" class="col-form-label">Citation Number<input style="pointer-events: none;" type="text" id="citationNumber"/></label>
                </div>
                <div class="panel-body">
                <div class="row">
                        <label for="date_picker" class="col-sm-3 col-form-label">Date<div style="pointer-events: none;" id="date_picker"></div></label>
                        <label for="time_auto" class="col-sm-3 col-form-label">Time<div style="pointer-events: none;" id="time_auto"></div></label>
            </div>
                <div class="row">
                        <label for="offender_ID" class="col-sm-6 col-form-label">Offender ID<input id="offender_ID" type="text" value="TL193789FJ" class="form-control"/></label>
                </div>
                <div class="row">
                        <label for="offenderFirstName" class="col-sm-6 col-form-label">Offender First Name<input id="offenderFirstName" type="text" class="form-control" value="John"/></label>
                </div>
                <div class="row">
                        <label for="offenderLastName" class="col-sm-6 col-form-label">Offender Last Name<input id="offenderLastName" type="text" class="form-control" value="Doe"/></label>
                </div>
                <div class="row">
                        <label for="DOB" class="col-sm-6 col-form-label">Offender DOB<div id="DOB"></div></label>
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